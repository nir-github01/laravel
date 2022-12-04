<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Userlists', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id');
            $table->string('order_title');
            $table->integer('num_of_items');
            $table->date('Delivery Date');
            $table->text('shipping_address');
            $table->integer('zipcode');
            $table->text('shipping_state');
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
        Schema::dropIfExists('Userlists');
    }
};
