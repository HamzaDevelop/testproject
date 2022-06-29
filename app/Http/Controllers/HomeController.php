<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DivisionToEmployee;
use App\Models\Division;
use App\Models\Department;

class HomeController extends Controller
{
    public function index(){

        $divisions = Division::getDivisionsWithLeaders();
        if(!empty($divisions)){
            foreach($divisions as &$division){
                $divisionId = $division['division_id'];
                $division['division_employees'] = DivisionToEmployee::getDivisionEmployees($divisionId);
                $division['division_departments'] = Department::getDepartmentsForDivision($divisionId);
            }
        }
        // dd($divisions);
        // dd($divisionEmployees);
        return view('home', ['divisions' => $divisions]);
    }
}
