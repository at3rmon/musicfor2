<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Seeder;

class DepartmentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $departments = Department::count();
        foreach ($users as $user) {
            $random_number_array = range(1, $departments);
            shuffle($random_number_array);
            $random_number_array = array_slice($random_number_array, 0, $departments > 2 ? 2 : $departments);
            $user->departments()->sync($random_number_array);
        }
    }
}
