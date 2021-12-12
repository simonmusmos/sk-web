<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("middle_name")->nullable();
            $table->string("last_name");
            $table->string("address");
            $table->string("gender");
            $table->string("father_name")->nullable();
            $table->string("mother_name")->nullable();
            $table->string("email");
            $table->string("contact_number");
            $table->string("educational_attainment");
            $table->string("current_work")->nullable();
            $table->boolean("is_voter")->default(0);
            $table->string("precint_number")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
