<?php
# @Date:   2019-12-06T12:14:42+00:00
# @Last modified time: 2019-12-06T12:17:56+00:00




use Illuminate\Database\Seeder;
use App\Patiant;

class PatiantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patiant - new Patiant();
        $patiant->name = "John Nevin";
        $patiant->address = "123 Fake Street";
        $patiant->save();

        $patiant - new Patiant();
        $patiant->name = "tim daly";
        $patiant->address = "69 Fake Road";
        $patiant->save();

        $patiant - new Patiant();
        $patiant->name = "John Joe";
        $patiant->address = "43 Fake Glen";
        $patiant->save();

        $patiant - new Patiant();
        $patiant->name = "Garry Brod";
        $patiant->address = "13 FakeNess";
        $patiant->save();
    }
}
