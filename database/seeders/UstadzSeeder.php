<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UstadzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();
        try {

            $mpp_ustadz_1 = User::create([
                'name' => 'Ustadz Amin',
                'email' => 'amin@gmail',
                'email_verified_at' => now(),
                'password' => bcrypt(4444),
            ]);

            Profile::create([
                'id_user' => $mpp_ustadz_1->id,
                'id_khidmat' => 2,
                'alamat' => 'Jl. Kretek No. 7',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kaderisasi',
            ]);

            $mpp_ustadz_1->assignRole('ustadz');

            // Dummy Data 1
            $mpp_ustadz_2 = User::create([
                'name' => 'Ustadz Budi',
                'email' => 'budi@gmail',
                'email_verified_at' => now(),
                'password' => bcrypt(5555),
            ]);

            Profile::create([
                'id_user' => $mpp_ustadz_2->id,
                'id_khidmat' => 2,
                'alamat' => 'Jl. Manggis No. 12',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_ustadz_2->assignRole('ustadz');

            // Dummy Data 2
            $mpp_ustadz_3 = User::create([
                'name' => 'Ustadz Candra',
                'email' => 'candra@gmail',
                'email_verified_at' => now(),
                'password' => bcrypt(6666),
            ]);

            Profile::create([
                'id_user' => $mpp_ustadz_3->id,
                'id_khidmat' => 3,
                'alamat' => 'Jl. Merpati No. 5',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Dakwah',
            ]);

            $mpp_ustadz_3->assignRole('ustadz');

            // Dummy Data 4
            $mpp_ustadz_4 = User::create([
                'name' => 'Ustadz Dian',
                'email' => 'dian@gmail',
                'email_verified_at' => now(),
                'password' => bcrypt(7777),
            ]);

            Profile::create([
                'id_user' => $mpp_ustadz_4->id,
                'id_khidmat' => 3,
                'alamat' => 'Jl. Puspa No. 9',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pemberdayaan',
            ]);

            $mpp_ustadz_4->assignRole('ustadz');

            // Dummy Data 5
            $mpp_ustadz_5 = User::create([
                'name' => 'Ustadz Eka',
                'email' => 'eka@gmail',
                'email_verified_at' => now(),
                'password' => bcrypt(8888),
            ]);

            Profile::create([
                'id_user' => $mpp_ustadz_5->id,
                'id_khidmat' => 4,
                'alamat' => 'Jl. Anggrek No. 3',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Sosial',
            ]);

            $mpp_ustadz_5->assignRole('ustadz');

            // Dummy Data 6
            $mpp_ustadz_6 = User::create([
                'name' => 'Ustadz Faisal',
                'email' => 'faisal@gmail',
                'email_verified_at' => now(),
                'password' => bcrypt(9999),
            ]);

            Profile::create([
                'id_user' => $mpp_ustadz_6->id,
                'id_khidmat' => 4,
                'alamat' => 'Jl. Mawar No. 15',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_ustadz_6->assignRole('ustadz');

            // Dummy Data 7
            $mpp_ustadz_7 = User::create([
                'name' => 'Ustadz Gita',
                'email' => 'gita@gmail',
                'email_verified_at' => now(),
                'password' => bcrypt(1111),
            ]);

            Profile::create([
                'id_user' => $mpp_ustadz_7->id,
                'id_khidmat' => 5,
                'alamat' => 'Jl. Cempaka No. 21',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesehatan',
            ]);

            $mpp_ustadz_7->assignRole('ustadz');

            // Dummy Data 8
            $mpp_ustadz_8 = User::create([
                'name' => 'Ustadz Hani',
                'email' => 'hani@gmail',
                'email_verified_at' => now(),
                'password' => bcrypt(2222),
            ]);

            Profile::create([
                'id_user' => $mpp_ustadz_8->id,
                'id_khidmat' => 5,
                'alamat' => 'Jl. Dahlia No. 18',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_ustadz_8->assignRole('ustadz');

            // Dummy Data 9
            $mpp_ustadz_9 = User::create([
                'name' => 'Ustadz Ira',
                'email' => 'ira@gmail',
                'email_verified_at' => now(),
                'password' => bcrypt(3333),
            ]);

            Profile::create([
                'id_user' => $mpp_ustadz_9->id,
                'id_khidmat' => 6,
                'alamat' => 'Jl. Kenanga No. 24',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_ustadz_9->assignRole('ustadz');

            // Dummy Data 10
            $mpp_ustadz_10 = User::create([
                'name' => 'Ustadz Joko',
                'email' => 'joko@gmail',
                'email_verified_at' => now(),
                'password' => bcrypt(4444),
            ]);

            Profile::create([
                'id_user' => $mpp_ustadz_10->id,
                'id_khidmat' => 6,
                'alamat' => 'Jl. Melati No. 30',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Dakwah',
            ]);

            $mpp_ustadz_10->assignRole('ustadz');

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th->getMessage());
        }
    }
}
