<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Christos',
            'last_name' => 'Boukouvalas',
            'email' => 'christos.boukouvalas.90@gmail.com',
            'password' => 'password',
        ]);
    }
}
