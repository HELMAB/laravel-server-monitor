<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
