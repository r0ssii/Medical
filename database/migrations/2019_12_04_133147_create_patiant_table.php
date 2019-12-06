<?php
# @Date:   2019-12-04T13:31:47+00:00
# @Last modified time: 2019-12-06T12:03:53+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatiantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patiant', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->string('name', 100);
                $table->string('address', 100);
              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patiant');
    }
}
