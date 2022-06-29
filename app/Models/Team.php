<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Team extends Model
{
    use HasFactory;

    protected  $table = 'tbl_teams as tm';

    protected $primaryKey = 'team_id';

    public static function getTeamsForDepartment($departmentId){

        $teams = self::where('department_id', '=', $departmentId)
            ->join('tbl_employees as emp', 'tm.employee_id', '=', 'emp.employee_id')
            ->select(
                'team_id', 
                'team_name', 
                DB::raw('Concat(IFNULL(employee_first_name," ") ," ", Ifnull(employee_last_name, " ")) as team_lead')
            )
            ->get()
            ->toArray();
        if(!empty($teams)){
            foreach($teams as &$team){
                $teamId = $team['team_id'];
                $team['team_employees'] = TeamToEmployee::getTeamEmployees($teamId);
            }   
        }

        return $teams;

    }

}
