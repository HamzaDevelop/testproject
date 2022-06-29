<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionToEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_division_to_employees')->insert([
            'division_id' => 3,
            'employee_id' => 4
        ]);

        DB::table('tbl_division_to_employees')->insert([
            'division_id' => 3,
            'employee_id' => 7
        ]);

        DB::table('tbl_division_to_employees')->insert([
            'division_id' => 2,
            'employee_id' => 6
        ]);
    }
}
