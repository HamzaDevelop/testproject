<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DepartmentToEmployee extends Model
{
    use HasFactory;

    protected  $table = 'tbl_department_to_employees as dpte';

    public static function getDepartmentEmployees($departmentId){

        $records = self::where('department_id', '=', $departmentId)
            ->join('tbl_employees as emp', 'dpte.employee_id', '=', 'emp.employee_id')
            ->select(DB::raw('Concat(IFNULL(employee_first_name," ") ," ", Ifnull(employee_last_name, " ")) as department_employee'))
            ->get()
            ->toArray();
        return $records;

    }
}
