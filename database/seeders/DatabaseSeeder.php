<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userData =[
            [
                'name'=>'Ario Putra',
                'email'=>'ario@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12345678'),
            ],
            [
                'name'=>'Muhammad Jaenal',
                'email'=>'jaenal@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('12345678'),
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
