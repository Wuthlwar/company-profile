<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Pro1admin',
            'email' => 'superadmin@mail.com',
            'password' => Hash::make('superadmin')
        ]);
    }
}
