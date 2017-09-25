<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subheading');
            $table->string('No1');
            $table->string('No2');
            $table->string('No3');
            $table->string('No4');
            $table->string('No5');
            $table->string('No6');
            $table->string('No7');
            $table->string('subheading1');
            $table->string('detail1');
            $table->string('No8');
            $table->string('No9');
            $table->string('No10');
            $table->string('No11');
            $table->string('No12');
            $table->string('No13');
            $table->string('No14');
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
        Schema::dropIfExists('detail_jobs');
    }
}
