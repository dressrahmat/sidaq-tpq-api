<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MasjidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => bcrypt(4444),
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();
        try {

            $mpp = User::create(array_merge([
                'name' => 'Masjid Pemuda Peradaban',
                'email' => 'mpp@gmail.com',
            ], $default_user_value));

            $mager = User::create(array_merge([
                'name' => 'Masjid Generasi Robbani',
                'email' => 'mager@gmail.com',
            ], $default_user_value));

            $mjl = User::create(array_merge([
                'name' => 'Masjid Jalan Langit',
                'email' => 'mjl@gmail.com',
            ], $default_user_value));

            $msp = User::create(array_merge([
                'name' => 'Masjid Sejuta Pemuda',
                'email' => 'msp@gmail.com',
            ], $default_user_value));

            $mar = User::create(array_merge([
                'name' => 'Masjid Ar Rahman',
                'email' => 'mar@gmail.com',
            ], $default_user_value));

            $mpp->assignRole('masjid');
            $mager->assignRole('masjid');
            $mjl->assignRole('masjid');
            $msp->assignRole('masjid');
            $mar->assignRole('masjid');

            Profile::create([
                'id_user' => $mpp->id,
                'id_khidmat' => 1,
                'alamat' => 'Jl. Kretek No. 7',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kaderisasi',
            ]);

            Profile::create([
                'id_user' => $mager->id,
                'id_khidmat' => 1,
                'alamat' => 'Jl. Tamanan No. 5',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kaderisasi',
            ]);

            Profile::create([
                'id_user' => $mjl->id,
                'id_khidmat' => 1,
                'alamat' => 'Jl. Langit No. 9',
                'kota' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kaderisasi',
            ]);

            Profile::create([
                'id_user' => $msp->id,
                'id_khidmat' => 1,
                'alamat' => 'Jl. Pemuda No. 94',
                'kota' => 'Bogor',
                'provinsi' => 'Jawa Barat',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kaderisasi',
            ]);

            Profile::create([
                'id_user' => $mar->id,
                'id_khidmat' => 1,
                'alamat' => 'Jl. Cenderawasih No. 12',
                'kota' => 'Malang',
                'provinsi' => 'Jawa Timur',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kaderisasi',
            ]);

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th->getMessage());
        }
    }
}
