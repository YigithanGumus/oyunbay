<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>"Yiğithan Gümüş",
            'email'=>"yigithangumus@gmail.com",
            'password'=>"123456",
        ]);

        User::create([
            'name'=>"Yiğithan Gümüş",
            'email'=>"yigithangumus2@gmail.com",
            'password'=>"123456",
        ]);

        User::create([
            'name'=>"Yiğithan Gümüş",
            'email'=>"yigithangumus3@gmail.com",
            'password'=>"123456",
        ]);
    }
}
