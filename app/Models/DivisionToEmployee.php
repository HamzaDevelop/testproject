<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DivisionToEmployee extends Model
{
    use HasFactory;

    protected  $table = 'tbl_division_to_employees as dte';

    public static function getDivisionEmployees($divisionId){

        $records = self::where('division_id', '=', $divisionId)
            ->join('tbl_employees as emp', 'dte.employee_id', '=', 'emp.employee_id')
            ->select(DB::raw('Concat(IFNULL(employee_first_name," ") ," ", Ifnull(employee_last_name, " ")) as division_employee'))
            ->get()
            ->toArray();
        return $records;

    }
}
