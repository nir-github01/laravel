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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->date('orderdate')->nullable();
            $table->char('customername', 100)->nullable();
            $table->binary('productphoto')->nullable();
            $table->foreignId('user_id')->after('id')->nullable();
            $table->json('options')->nullable();
            $table->string('emailid')->after('user_id')->nullable();
            $table->date('journeydate')->after('orderdate')->nullable();
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['user_id', 'title', 'orderdate', 'journeydate', 'customername', 'productphoto', 'options', 'emailid', 'description']);
        });
    }
};
