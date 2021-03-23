<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presets', function (Blueprint $table) {
            $table->increments('id');

            $table->string("space_width", 8);
            $table->string("space_height", 8);
            $table->string("space_radius", 8);
            $table->string("space_top", 8);
            $table->boolean("space_negative");

            $table->string("title_top", 8);
            $table->string("description_top", 8);
            $table->string("text_color", 32);

            $table->boolean("compass");
            $table->boolean("frame");
            $table->string("background_color", 32);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presets');
    }
}
