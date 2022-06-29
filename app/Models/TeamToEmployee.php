<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TeamToEmployee extends Model
{
    use HasFactory;

    protected  $table = 'tbl_team_to_employees as tte';

    public static function getTeamEmployees($teamId){

        $records = self::where('team_id', '=', $teamId)
            ->join('tbl_employees as emp', 'tte.employee_id', '=', 'emp.employee_id')
            ->select(DB::raw('Concat(IFNULL(employee_first_name," ") ," ", Ifnull(employee_last_name, " ")) as team_employee'))
            ->get()
            ->toArray();
        return $records;

    }
}
