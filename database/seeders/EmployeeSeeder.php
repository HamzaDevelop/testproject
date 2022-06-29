<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $counting = array(
            1 => "One", 
            2 => 'Two', 
            3 => 'three', 
            4 => 'four', 
            5 => 'five', 
            6 => 'six', 
            7 => 'seven', 
            8 => 'eight', 
            9 => 'nine', 
            10 => 'ten', 
            11 => 'eleven',
            12 => 'twelve', 
            13 => 'thirteen', 
            14 => 'fourteen', 
            15 => 'fifteen', 
            16 => 'sixteen', 
            17 => 'seventeen', 
            18 => 'eighteen', 
            19 => 'nineteen',
            20 => 'Twenty'
        );

        foreach($counting as $number){
            DB::table('tbl_employees')->insert([
                'employee_first_name' => 'Employee',
                'employee_last_name' => Str::camel($number)
            ]);
        }

    }
}
