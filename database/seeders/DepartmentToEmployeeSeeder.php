<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentToEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_department_to_employees')->insert([
            'department_id' => 1,
            'employee_id' => 6
        ]);

        DB::table('tbl_department_to_employees')->insert([
            'department_id' => 1,
            'employee_id' => 9
        ]);

        DB::table('tbl_department_to_employees')->insert([
            'department_id' => 4,
            'employee_id' => 12
        ]);

        DB::table('tbl_department_to_employees')->insert([
            'department_id' => 5,
            'employee_id' => 1
        ]);
    }
}
