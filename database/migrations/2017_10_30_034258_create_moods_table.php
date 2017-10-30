<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city');
            $table->float('lat', 10, 6);
            $table->float('lng', 10, 6);
            $table->unsignedInteger('happy');
            $table->unsignedInteger('angry');
            $table->unsignedInteger('sad');
            $table->timestamps();
        });

        $cities = array
        (
            array('Vancouver', 49.279220, -123.122532),
            array('Burnaby', 49.246527, -122.982270)
        );
        foreach($cities as $city) {
            // Insert some stuff
            DB::table('moods')->insert(
                array(
                    'city' => $city[0],
                    'lat' => $city[1],
                    'lng' => $city[2],
                    'happy' => 0,
                    'angry' => 0,
                    'sad' => 0
                )
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moods');
    }
}
