<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tbl_teams')->insert([
            'team_name' => 'Sales ZU',
            'employee_id' => 10,
            'department_id' => 1
        ]);

        DB::table('tbl_teams')->insert([
            'team_name' => 'Sales Ber',
            'employee_id' => 17,
            'department_id' => 2
        ]);

        DB::table('tbl_teams')->insert([
            'team_name' => 'Sales MU',
            'employee_id' => 18,
            'department_id' => 3
        ]);

        DB::table('tbl_teams')->insert([
            'team_name' => 'Marketing ZU',
            'employee_id' => 2,
            'department_id' => 1
        ]);

        DB::table('tbl_teams')->insert([
            'team_name' => 'Marketing Ber',
            'employee_id' => 20,
            'department_id' => 2
        ]);

        DB::table('tbl_teams')->insert([
            'team_name' => 'Development MU',
            'employee_id' => 14,
            'department_id' => 3
        ]);

        DB::table('tbl_teams')->insert([
            'team_name' => 'Development AU',
            'employee_id' => 4,
            'department_id' => 4
        ]);

    }
}
