<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_departments', function (Blueprint $table) {
            $table->id('department_id');
            $table->string('department_name');
            $table->foreignId('employee_id', 'department_leader_fid');
            $table->foreignId('division_id', 'department_devision_fid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_departments');
    }
}
