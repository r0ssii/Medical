<?php
# @Date:   2019-12-06T12:03:58+00:00
# @Last modified time: 2019-12-06T12:14:11+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPatiantIdToDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->bigInteger('patiant_id')->unsigned();

            $table->foreign('patiant_id')->refrerences('id')->on('patiant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {
              $table->dropForeign('patiant_id');
                $table->dropColumn('patiant_id');
                $table->string('patiant');
        });
    }
}
