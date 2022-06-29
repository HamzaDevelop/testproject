<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamToEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 2,
            'employee_id' => 16
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 2,
            'employee_id' => 4
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 2,
            'employee_id' => 7
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 5,
            'employee_id' => 11
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 5,
            'employee_id' => 12
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 5,
            'employee_id' => 15
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 3,
            'employee_id' => 4
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 3,
            'employee_id' => 9
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 6,
            'employee_id' => 8
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 6,
            'employee_id' => 13
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 1,
            'employee_id' => 1
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 1,
            'employee_id' => 12
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 1,
            'employee_id' => 13
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 4,
            'employee_id' => 3
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 4,
            'employee_id' => 7
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 4,
            'employee_id' => 8
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 7,
            'employee_id' => 2
        ]);

        DB::table('tbl_team_to_employees')->insert([
            'team_id' => 7,
            'employee_id' => 8
        ]);

    }
}
