<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{

    public function run(): void
    {
        $data = 
            [
                'name'=>'Neeraj Choudhary',
                'email'=>'neeraj@mail.com',
                'password'=>Hash::make('password@123')
            ];

              User::updateOrCreate(['email'=>$data['email']],$data);
    }
}
