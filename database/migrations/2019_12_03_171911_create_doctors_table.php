<?php
# @Date:   2019-12-03T17:19:11+00:00
# @Last modified time: 2019-12-04T13:08:02+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
          $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->integer('phone')->unsigned();
            $table->string('startDate')->unique();
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
        Schema::dropIfExists('doctors');
    }
}
