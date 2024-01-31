<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();
        try {

            // Dummy Data 1
            $mpp_santri_1 = User::create([
                'name' => 'Yusuf',
                'email' => 'yusuf@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(4444),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_1->id,
                'id_khidmat' => 7,
                'alamat' => 'Jl. Kretek No. 7',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kaderisasi',
            ]);

            $mpp_santri_1->assignRole('santri');

            // Dummy Data 2
            $mpp_santri_2 = User::create([
                'name' => 'Ali',
                'email' => 'ali@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(5555),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_2->id,
                'id_khidmat' => 7,
                'alamat' => 'Jl. Manggis No. 12',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_2->assignRole('santri');

            // Dummy Data 3
            $mpp_santri_3 = User::create([
                'name' => 'Bambang',
                'email' => 'bambang@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(6666),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_3->id,
                'id_khidmat' => 7,
                'alamat' => 'Jl. Kenanga No. 18',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pemberdayaan',
            ]);

            $mpp_santri_3->assignRole('santri');

            // Dummy Data 4
            $mpp_santri_4 = User::create([
                'name' => 'Citra',
                'email' => 'citra@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(7777),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_4->id,
                'id_khidmat' => 7,
                'alamat' => 'Jl. Mawar No. 25',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesehatan',
            ]);

            $mpp_santri_4->assignRole('santri');

            // Dummy Data 5
            $mpp_santri_5 = User::create([
                'name' => 'Diana',
                'email' => 'diana@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(8888),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_5->id,
                'id_khidmat' => 7,
                'alamat' => 'Jl. Cempaka No. 21',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kaderisasi',
            ]);

            $mpp_santri_5->assignRole('santri');

            // Dummy Data 6
            $mpp_santri_6 = User::create([
                'name' => 'Rizky',
                'email' => 'rizky@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(9999),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_6->id,
                'id_khidmat' => 8,
                'alamat' => 'Jl. Dahlia No. 18',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_santri_6->assignRole('santri');

            // Dummy Data 7
            $mpp_santri_7 = User::create([
                'name' => 'Dina',
                'email' => 'dina@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(1010),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_7->id,
                'id_khidmat' => 8,
                'alamat' => 'Jl. Kenanga No. 24',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_7->assignRole('santri');

            // Dummy Data 8
            $mpp_santri_8 = User::create([
                'name' => 'Aisyah',
                'email' => 'aisyah@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(1111),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_8->id,
                'id_khidmat' => 8,
                'alamat' => 'Jl. Melati No. 30',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Dakwah',
            ]);

            $mpp_santri_8->assignRole('santri');

            // Dummy Data 9
            $mpp_santri_9 = User::create([
                'name' => 'Rina',
                'email' => 'rina@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(1212),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_9->id,
                'id_khidmat' => 8,
                'alamat' => 'Jl. Cempaka No. 21',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesehatan',
            ]);

            $mpp_santri_9->assignRole('santri');

            // Dummy Data 10
            $mpp_santri_10 = User::create([
                'name' => 'Dewi',
                'email' => 'dewi@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(1313),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_10->id,
                'id_khidmat' => 8,
                'alamat' => 'Jl. Melor No. 15',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_santri_10->assignRole('santri');

            // Dummy Data 11
            $mpp_santri_11 = User::create([
                'name' => 'Iwan',
                'email' => 'iwan@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(1414),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_11->id,
                'id_khidmat' => 9,
                'alamat' => 'Jl. Kenari No. 24',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_11->assignRole('santri');

            // Dummy Data 12
            $mpp_santri_12 = User::create([
                'name' => 'Siti',
                'email' => 'siti@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(1515),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_12->id,
                'id_khidmat' => 9,
                'alamat' => 'Jl. Melati No. 30',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Dakwah',
            ]);

            $mpp_santri_12->assignRole('santri');

            // Dummy Data 13
            $mpp_santri_13 = User::create([
                'name' => 'Bella',
                'email' => 'bella@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(1616),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_13->id,
                'id_khidmat' => 9,
                'alamat' => 'Jl. Kenanga No. 18',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pemberdayaan',
            ]);

            $mpp_santri_13->assignRole('santri');

            // Dummy Data 14
            $mpp_santri_14 = User::create([
                'name' => 'Rifqi',
                'email' => 'rifqi@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(1717),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_14->id,
                'id_khidmat' => 9,
                'alamat' => 'Jl. Mawar No. 25',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kaderisasi',
            ]);

            $mpp_santri_14->assignRole('santri');

            // Dummy Data 15
            $mpp_santri_15 = User::create([
                'name' => 'Rino',
                'email' => 'rino@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(1818),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_15->id,
                'id_khidmat' => 9,
                'alamat' => 'Jl. Anggrek No. 8',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_15->assignRole('santri');

            // Dummy Data 16
            $mpp_santri_16 = User::create([
                'name' => 'Rizki',
                'email' => 'rizki@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(1919),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_16->id,
                'id_khidmat' => 10,
                'alamat' => 'Jl. Melor No. 12',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_santri_16->assignRole('santri');

            // Dummy Data 17
            $mpp_santri_17 = User::create([
                'name' => 'Aisya',
                'email' => 'aisya@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(2020),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_17->id,
                'id_khidmat' => 10,
                'alamat' => 'Jl. Cempaka No. 15',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Dakwah',
            ]);

            $mpp_santri_17->assignRole('santri');

            // Dummy Data 18
            $mpp_santri_18 = User::create([
                'name' => 'Fajar',
                'email' => 'fajar@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(2121),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_18->id,
                'id_khidmat' => 10,
                'alamat' => 'Jl. Dahlia No. 18',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesehatan',
            ]);

            $mpp_santri_18->assignRole('santri');

            // Dummy Data 19
            $mpp_santri_19 = User::create([
                'name' => 'Lia',
                'email' => 'lia@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(2222),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_19->id,
                'id_khidmat' => 10,
                'alamat' => 'Jl. Mawar No. 7',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pemberdayaan',
            ]);

            $mpp_santri_19->assignRole('santri');

            // Dummy Data 20
            $mpp_santri_20 = User::create([
                'name' => 'Andi',
                'email' => 'andi@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(2323),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_20->id,
                'id_khidmat' => 10,
                'alamat' => 'Jl. Kenari No. 24',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesehatan',
            ]);

            $mpp_santri_20->assignRole('santri');

            // Dummy Data 21
            $mpp_santri_21 = User::create([
                'name' => 'Ani',
                'email' => 'ani@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(2424),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_21->id,
                'id_khidmat' => 11,
                'alamat' => 'Jl. Anggrek No. 8',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_21->assignRole('santri');

            // Dummy Data 22
            $mpp_santri_22 = User::create([
                'name' => 'Zain',
                'email' => 'zain@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3131),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_22->id,
                'id_khidmat' => 11,
                'alamat' => 'Jl. Flamboyan No. 39',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Dakwah',
            ]);

            $mpp_santri_22->assignRole('santri');

            // Dummy Data 23
            $mpp_santri_23 = User::create([
                'name' => 'Ahmad',
                'email' => 'ahmad@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(2929),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_23->id,
                'id_khidmat' => 11,
                'alamat' => 'Jl. Bougenville No. 42',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesehatan',
            ]);

            $mpp_santri_23->assignRole('santri');

            // Dummy Data 24
            $mpp_santri_24 = User::create([
                'name' => 'Sofia',
                'email' => 'sofia@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3030),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_24->id,
                'id_khidmat' => 11,
                'alamat' => 'Jl. Anggrek No. 45',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_24->assignRole('santri');

            // Dummy Data 25
            $mpp_santri_25 = User::create([
                'name' => 'Firdaus',
                'email' => 'firdaus@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3131),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_25->id,
                'id_khidmat' => 11,
                'alamat' => 'Jl. Melor No. 48',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_santri_25->assignRole('santri');

            // Dummy Data 26
            $mpp_santri_26 = User::create([
                'name' => 'Ratna',
                'email' => 'ratna@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3232),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_26->id,
                'id_khidmat' => 12,
                'alamat' => 'Jl. Mawar No. 7',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pemberdayaan',
            ]);

            $mpp_santri_26->assignRole('santri');

            // Dummy Data 27
            $mpp_santri_27 = User::create([
                'name' => 'Ika',
                'email' => 'ika@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3333),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_27->id,
                'id_khidmat' => 12,
                'alamat' => 'Jl. Teratai No. 24',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_santri_27->assignRole('santri');

            // Dummy Data 28
            $mpp_santri_28 = User::create([
                'name' => 'Imran',
                'email' => 'imran@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3434),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_28->id,
                'id_khidmat' => 12,
                'alamat' => 'Jl. Melati No. 27',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Dakwah',
            ]);

            $mpp_santri_28->assignRole('santri');

            // Dummy Data 29
            $mpp_santri_29 = User::create([
                'name' => 'Nina',
                'email' => 'nina@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3535),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_29->id,
                'id_khidmat' => 12,
                'alamat' => 'Jl. Kenanga No. 30',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesehatan',
            ]);

            $mpp_santri_29->assignRole('santri');

            // Dummy Data 30
            $mpp_santri_30 = User::create([
                'name' => 'Rendra',
                'email' => 'rendra@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3636),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_30->id,
                'id_khidmat' => 12,
                'alamat' => 'Jl. Kamboja No. 33',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_30->assignRole('santri');

            // Dummy Data 31
            $mpp_santri_31 = User::create([
                'name' => 'Fandi',
                'email' => 'fandi@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3131),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_31->id,
                'id_khidmat' => 13,
                'alamat' => 'Jl. Anggrek No. 10',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_31->assignRole('santri');

            // Dummy Data 32
            $mpp_santri_32 = User::create([
                'name' => 'Linda',
                'email' => 'linda@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3232),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_32->id,
                'id_khidmat' => 13,
                'alamat' => 'Jl. Kenanga No. 15',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesehatan',
            ]);

            $mpp_santri_32->assignRole('santri');

            // Dummy Data 33
            $mpp_santri_33 = User::create([
                'name' => 'Rudi',
                'email' => 'rudi@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3333),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_33->id,
                'id_khidmat' => 13,
                'alamat' => 'Jl. Mawar No. 20',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Dakwah',
            ]);

            $mpp_santri_33->assignRole('santri');

            // Dummy Data 34
            $mpp_santri_334 = User::create([
                'name' => 'Tari',
                'email' => 'tari@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3434),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_334->id,
                'id_khidmat' => 13,
                'alamat' => 'Jl. Flamboyan No. 30',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_santri_334->assignRole('santri');

            // Dummy Data 35
            $mpp_santri_35 = User::create([
                'name' => 'Budi',
                'email' => 'budi@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3535),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_35->id,
                'id_khidmat' => 13,
                'alamat' => 'Jl. Teratai No. 18',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Dakwah',
            ]);

            $mpp_santri_35->assignRole('santri');

            // Dummy Data 36
            $mpp_santri_36 = User::create([
                'name' => 'Rine',
                'email' => 'rine@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3636),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_36->id,
                'id_khidmat' => 14,
                'alamat' => 'Jl. Flamboyan No. 22',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_santri_36->assignRole('santri');

            // Dummy Data 37
            $mpp_santri_37 = User::create([
                'name' => 'Fitri',
                'email' => 'fitri@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3737),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_37->id,
                'id_khidmat' => 14,
                'alamat' => 'Jl. Mawar No. 11',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pemberdayaan',
            ]);

            $mpp_santri_37->assignRole('santri');

            // Dummy Data 38
            $mpp_santri_38 = User::create([
                'name' => 'Rini',
                'email' => 'rini2@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3838),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_38->id,
                'id_khidmat' => 14,
                'alamat' => 'Jl. Melor No. 14',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesehatan',
            ]);

            $mpp_santri_38->assignRole('santri');

            // Dummy Data 39
            $mpp_santri_39 = User::create([
                'name' => 'Arif',
                'email' => 'arif@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(3939),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_39->id,
                'id_khidmat' => 14,
                'alamat' => 'Jl. Kamboja No. 27',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_santri_39->assignRole('santri');

            // Dummy Data 40
            $mpp_santri_40 = User::create([
                'name' => 'Lina',
                'email' => 'lina@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(4040),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_40->id,
                'id_khidmat' => 14,
                'alamat' => 'Jl. Dahlia No. 33',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_40->assignRole('santri');

            // Dummy Data 41
            $mpp_santri_41 = User::create([
                'name' => 'Bayu',
                'email' => 'bayu@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(4141),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_41->id,
                'id_khidmat' => 15,
                'alamat' => 'Jl. Bougenville No. 16',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Dakwah',
            ]);

            $mpp_santri_41->assignRole('santri');

            // Dummy Data 42
            $mpp_santri_42 = User::create([
                'name' => 'Dina',
                'email' => 'dina2@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(4242),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_42->id,
                'id_khidmat' => 15,
                'alamat' => 'Jl. Flamboyan No. 20',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_santri_42->assignRole('santri');

            // Dummy Data 43
            $mpp_santri_43 = User::create([
                'name' => 'Eva',
                'email' => 'eva@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(4343),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_43->id,
                'id_khidmat' => 15,
                'alamat' => 'Jl. Mawar No. 25',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_43->assignRole('santri');

            // Dummy Data 44
            $mpp_santri_44 = User::create([
                'name' => 'Rian',
                'email' => 'rian@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(4444),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_44->id,
                'id_khidmat' => 15,
                'alamat' => 'Jl. Teratai No. 30',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesehatan',
            ]);

            $mpp_santri_44->assignRole('santri');

            // Dummy Data 45
            $mpp_santri_45 = User::create([
                'name' => 'Liana',
                'email' => 'liana@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(4545),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_45->id,
                'id_khidmat' => 15,
                'alamat' => 'Jl. Kamboja No. 12',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_santri_45->assignRole('santri');

            // Dummy Data 46
            $mpp_santri_46 = User::create([
                'name' => 'Indra',
                'email' => 'indra@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(4646),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_46->id,
                'id_khidmat' => 15,
                'alamat' => 'Jl. Flamboyan No. 28',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_46->assignRole('santri');

            // Dummy Data 47
            $mpp_santri_47 = User::create([
                'name' => 'Fendi',
                'email' => 'fendi@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(4747),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_47->id,
                'id_khidmat' => 16,
                'alamat' => 'Jl. Anggrek No. 10',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Pendidikan',
            ]);

            $mpp_santri_47->assignRole('santri');

            // Dummy Data 48
            $mpp_santri_48 = User::create([
                'name' => 'Ninda',
                'email' => 'ninda@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(4848),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_48->id,
                'id_khidmat' => 16,
                'alamat' => 'Jl. Kenanga No. 15',
                'kota' => 'Bantul',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesehatan',
            ]);

            $mpp_santri_48->assignRole('santri');

            // Dummy Data 49
            $mpp_santri_49 = User::create([
                'name' => 'Ruli',
                'email' => 'ruli@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(4949),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_49->id,
                'id_khidmat' => 16,
                'alamat' => 'Jl. Mawar No. 20',
                'kota' => 'Sleman',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Dakwah',
            ]);

            $mpp_santri_49->assignRole('santri');

            // Dummy Data 50
            $mpp_santri_50 = User::create([
                'name' => 'Sari',
                'email' => 'sari@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt(5050),
            ]);

            Profile::create([
                'id_user' => $mpp_santri_50->id,
                'id_khidmat' => 16,
                'alamat' => 'Jl. Flamboyan No. 30',
                'kota' => 'Yogyakarta',
                'provinsi' => 'D.I Yogyakarta',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Masjid Kesejahteraan',
            ]);

            $mpp_santri_50->assignRole('santri');

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th->getMessage());
        }
    }
}
