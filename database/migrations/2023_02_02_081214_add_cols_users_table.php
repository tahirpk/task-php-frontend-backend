<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name', 225)->after('id');
            $table->string('last_name', 225)->after('first_name');
            $table->string('phone', 225)->after('last_name')->nullable();;
            $table->tinyInteger('job_title')->default(0)->after('phone');
            $table->date('dob')->after('job_title');
            $table->enum('is_experience', ['0', 'on'])->default(0)->after('job_title');
            $table->enum('is_approved', ['0', 'on'])->default(0)->after('is_experience');
            $table->enum('is_admin', ['0', '1'])->default(0)->after('is_experience');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
