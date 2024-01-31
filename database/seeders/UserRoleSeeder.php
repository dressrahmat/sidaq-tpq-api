<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserRoleSeeder extends Seeder
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
            Role::create(['name' => 'pusat']);
            Role::create(['name' => 'masjid']);
            Role::create(['name' => 'ustadz']);
            Role::create(['name' => 'santri']);

            $pusat = User::create(array_merge([
                'name' => 'Pusat',
                'email' => 'pusat@gmail.com',
            ], $default_user_value));

            $pusat->assignRole('pusat');
            Profile::create([
                'id_user' => $pusat->id,
                'alamat' => 'Jalan Jalan',
                'kota' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'tanggal_lahir' => Carbon::now(),
                'amanah' => 'Pusat Kaderisasi',
            ]);

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th->getMessage());
        }
    }
}
