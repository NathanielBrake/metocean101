<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      =>  'Nathaniel',
                'email'     =>  'nathaniel.brake@gmail.co.nz',
                'password'  =>  bcrypt('test1234'),
            ]
        ];

        foreach ($users as $user){
            User::firstOrCreate(['email' => $user['email']], $user);
        }
    }
}
