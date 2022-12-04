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
        Schema::table('employee', function(Blueprint $table){
            $table->string('city')->after('email')->nullable();
            $table->string('state')->after('city')->nullable();
            $table->integer('zip_code')->after('state')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee', function(Blueprint $table){
            $table->dropColumn('city', 'state', 'zip-code');
            });
        
    }
};