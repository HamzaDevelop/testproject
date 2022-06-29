<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tbl_departments')->insert([
            'department_name' => 'Zurich',
            'employee_id' => 5,
            'division_id' => 3
        ]);

        DB::table('tbl_departments')->insert([
            'department_name' => 'Berlin',
            'employee_id' => 3,
            'division_id' => 1
        ]);

        DB::table('tbl_departments')->insert([
            'department_name' => 'Munich',
            'employee_id' => 6,
            'division_id' => 1
        ]);

        DB::table('tbl_departments')->insert([
            'department_name' => 'Salzburg',
            'employee_id' => 4,
            'division_id' => 2
        ]);

        DB::table('tbl_departments')->insert([
            'department_name' => 'Vienna',
            'employee_id' => 3,
            'division_id' => 2
        ]);

    }
}
