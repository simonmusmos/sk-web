<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'SK San Roque',
            'email' => 'trixieannebayombon1997@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
