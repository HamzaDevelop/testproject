<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class Division extends Model
{
    use HasFactory;

    protected  $table = 'tbl_divisions as div';

    protected $primaryKey = 'division_id';

    public static function getDivisionsWithLeaders(){

        $records = self::join('tbl_employees as emp', 'div.employee_id', '=', 'emp.employee_id')
        ->select('division_id', 'division_name', DB::raw('Concat(IFNULL(employee_first_name," ") ," ", Ifnull(employee_last_name, " ")) as division_lead'))
        ->get()->toArray();
        return $records;

    }

}
