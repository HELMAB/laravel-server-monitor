<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $users = [
            [
                'first_name' => 'Admini',
                'last_name' => 'Strator',
                'email' => 'admin@asorasoft.com',
                'password' => bcrypt('12345678'),
                'gender_id' => 1,
            ],
            [
                'first_name' => 'HENG',
                'last_name' => 'Sotharith',
                'email' => 'sotharith@asorasoft.com',
                'password' => bcrypt('12345678'),
                'gender_id' => 1,
            ],
            [
                'first_name' => 'HEL',
                'last_name' => 'Mab',
                'email' => 'mab@asorasoft.com',
                'password' => bcrypt('12345678'),
                'gender_id' => 1,
            ],
            [
                'first_name' => 'HENG',
                'last_name' => 'Siyen',
                'email' => 'siyen@asorasoft.com',
                'password' => bcrypt('12345678'),
                'gender_id' => 1,
            ],
            [
                'first_name' => 'SOR',
                'last_name' => 'Thyrith',
                'email' => 'thyrith@asorasoft.com',
                'password' => bcrypt('12345678'),
                'gender_id' => 1,
            ]
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['first_name'] . " " . $user['last_name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'email_verified_at' => Carbon::now()
            ]);
        }

        $users = User::get();
        foreach ($users as $user) {
            Team::create([
                'user_id' => $user->id,
                'name' => "$user->name's Group",
                'personal_team' => '1',
            ]);
        }
    }
}
