<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tbl_divisions')->insert([
            'division_name' => 'Germany',
            'employee_id' => 14
        ]);

        DB::table('tbl_divisions')->insert([
            'division_name' => 'Austria',
            'employee_id' => 19
        ]);

        DB::table('tbl_divisions')->insert([
            'division_name' => 'Switzerland',
            'employee_id' => 3
        ]);

    }
}
