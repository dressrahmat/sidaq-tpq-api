<?php

namespace App\Http\Controllers\Frontend\Pusat;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

class MasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::role('masjid')->get();

        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
            'alamat' => 'nullable',
            'kota' => 'nullable',
            'provinsi' => 'nullable',
            'photo_profile' => 'nullable|image|mimes:jpg,jpeg|dimensions:max_width=360,max_height=360',
        ]);

        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
            
            $user->assignRole('masjid');

            if ($request->hasFile('photo_profile')) {
                $image = $request->file('photo_profile');
                $folderPath = 'uploads/profile/';
                $fileName = time().'.'.$image->getClientOriginalExtension();
                $image->storeAs('public/'.$folderPath, $fileName);
                $data['photo_profile'] = 'storage/'.$folderPath.$fileName;
            }

            $profile = Profile::create([
                'id_user' => $user->id,
                'id_khidmat' => 1,
                'alamat' => $data['alamat'],
                'kota' => $data['kota'],
                'provinsi' => $data['provinsi'],
            ]);

            DB::commit();

            // Response JSON jika transaksi berhasil
            return response()->json([
                'message' => 'Data berhasil disimpan',
                'data' => [$user, $profile],
            ], 201);

        } catch (\Throwable $th) {
            DB::rollBack();

            // Response JSON jika terjadi kesalahan
            return response()->json(['message' => 'Terjadi kesalahan saat menyimpan data'], 500);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ustadzProfiles = User::whereHas('profile', function (Builder $query) use ($id) {
            $query->where('id_khidmat', $id);
        })->get();

        $ustadzCollection = $ustadzProfiles->map(function ($ustadz) {
            return [
                'id' => $ustadz->id,
                'id_user' => $ustadz->profile->id_user,
                'nama' => $ustadz->name,
                'id_santri' => '404050',
                'email' => $ustadz->email,
            ];
        });
        $ustadzIds = $ustadzCollection->pluck('id_user')->all();

        $santriProfiles = User::whereHas('profile', function (Builder $query) use ($ustadzIds) {
            $query->whereIn('id_khidmat', $ustadzIds);
        })->get();

        $santriCollection = $santriProfiles->map(function ($santri) {
            return [
                'id' => $santri->id,
                'id_user' => $santri->profile->id_user,
                'id_khidmat' => $santri->profile->id_khidmat,
                'nama' => $santri->name,
                'id_santri' => '404050',
                'email' => $santri->email,
            ];
        });

        $result = ['ustadz' => $ustadzCollection->toArray(), 'santri' => $santriCollection->toArray()];

        return response()->json($result, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Cek apakah user dengan ID tersebut sudah ada
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
        
        // Periksa apakah pengguna memiliki peran 'masjid'
        if (!$user->hasRole('masjid')) {
            return response()->json(['error' => 'User does not have the role "masjid"'], 403);
        }

        // Hapus file photo_profile lama jika ada
        if ($user->profile && $user->profile->photo_profile) {
            Storage::delete($user->profile->photo_profile);
        }

        try {
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required',
                'alamat' => 'nullable',
                'kota' => 'nullable',
                'provinsi' => 'nullable',
                'photo_profile' => 'nullable|image|mimes:jpg,jpeg',
            ]);

            DB::beginTransaction();

            // Perbarui data user
            $user->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

            // Perbarui data profile jika ada
            $profileData = [
                'id_khidmat' => 1, // Sesuaikan dengan kebutuhan
                'alamat' => $data['alamat'],
                'kota' => $data['kota'],
                'provinsi' => $data['provinsi'],
            ];

            if ($request->hasFile('photo_profile')) {
                $image = $request->file('photo_profile');
                $folderPath = 'uploads/profile/';
                $fileName = time().'.'.$image->getClientOriginalExtension();
                $image->storeAs('public/'.$folderPath, $fileName);
                $profileData['photo_profile'] = 'storage/'.$folderPath.$fileName;
            }

            // Perbarui data profile atau buat jika belum ada
            if ($user->profile) {
                $user->profile->update($profileData);
            } else {
                $user->profile()->create($profileData);
            }

            DB::commit();

            // Response JSON jika transaksi berhasil
            return response()->json([
                'message' => 'Data berhasil disimpan',
                'data' => [$user, $user->profile],
            ], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangkap kesalahan validasi dan kirim respons JSON
            return response()->json([
                'message' => 'Validation error',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Throwable $th) {
            DB::rollBack();
            
            // Response JSON jika terjadi kesalahan lain
            return response()->json(['message' => $th->getMessage()], $th->getCode());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        try {
            // Cek apakah user dengan ID tersebut sudah ada
            $user = User::find($id);

            if (!$user) {
                return response()->json(['error' => 'User not found'], 404);
            }

            // Periksa apakah pengguna memiliki peran 'masjid'
            if (!$user->hasRole('masjid')) {
                return response()->json(['error' => 'User does not have the role "masjid"'], 403);
            }

            if ($user->profile && $user->profile->photo_profile) {
                Storage::delete($user->profile->photo_profile);
            }

            // Hapus user
            $user->delete();

            return response()->json(['message' => 'User successfully deleted'], 200);
        } catch (\Throwable $th) {
            // Response JSON jika terjadi kesalahan lain
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
}
