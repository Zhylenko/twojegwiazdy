<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer("product_id");

            $table->string("name", 64);
            $table->string("email", 64);
            $table->string("phone", 32);

            $table->string("city", 64);
            $table->string("delivery", 16);
            $table->string("postcode", 8)->nullable();
            $table->string("address", 128)->nullable();
            $table->string("post_address", 16)->nullable();

            $table->string("status");
            $table->ipAddress("ip");

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
        Schema::dropIfExists('orders');
    }
}
