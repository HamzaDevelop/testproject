<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Department extends Model
{
    use HasFactory;

    protected  $table = 'tbl_departments as dep';

    protected $primaryKey = 'department_id';

    public static function getDepartmentsForDivision($divisionId){

        $departments = self::where('division_id', '=', $divisionId)
            ->join('tbl_employees as emp', 'dep.employee_id', '=', 'emp.employee_id')
            ->select(
                'department_id', 
                'department_name', 
                DB::raw('Concat(IFNULL(employee_first_name," ") ," ", Ifnull(employee_last_name, " ")) as department_lead')
            )
            ->get()
            ->toArray();
        if(!empty($departments)){
            foreach($departments as &$department){
                $departmentId = $department['department_id'];
                $department['department_employees'] = DepartmentToEmployee::getDepartmentEmployees($departmentId);
                $department['department_teams'] = Team::getTeamsForDepartment($departmentId);
            }   
        }

        return $departments;

    }

}
