<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::updateOrCreate([
        'email' => 'simranjot.netweb@gmail.com',
       ],
       [
        'name'  =>  'Simranjot',
        'password' => \Hash::make('admin'),
        'is_admin'  =>  1,
        'remember_token'    =>  \Str::random(60),
       ]
       );

    }
}
