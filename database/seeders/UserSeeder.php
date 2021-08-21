<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => hash::make('123123123'),
            'foto' => 'sarah.png',
        ]);
    }
}
