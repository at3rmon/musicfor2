<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::insert([
            ['name' => 'guitarfor'],
            ['name' => 'bassfor'],
            ['name' => 'drumsfor'],
            ['name' => 'vocalsfor'],
            ['name' => 'pianofor'],
            ['name' => 'saxfor'],
            ['name' => 'songwritingfor'],
        ]);
    }
}
