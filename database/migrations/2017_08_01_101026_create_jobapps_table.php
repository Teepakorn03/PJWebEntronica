<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobapps', function (Blueprint $table) {
            $table->increments('id');
            $table->text('position');
            $table->text('name');
            $table->text('lastname');
            $table->text('gender');
            $table->text('age');
            $table->text('brithday');
            $table->text('nationality');
            $table->text('address');
            $table->text('email');
            $table->integer('telephone');
            $table->text('currentposition');
            $table->text('education');
            $table->integer('experience');
            $table->integer('expectedsalary');
            $table->string('resume');
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
        Schema::dropIfExists('jobapps');
    }
}
