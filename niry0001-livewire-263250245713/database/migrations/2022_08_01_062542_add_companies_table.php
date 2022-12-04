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
        Schema::table('companies', function(Blueprint $table){
            $table->integer('company_id');
            $table->integer('post_id');
            $table->integer('num_of_employee');
            $table->integer('company_revenue');
            $table->string('company_name');
            $table->string('company_post');
            $table->date('post_date')->after('company_post')->nullable();
            $table->string('email')->after('company_name')->nullable();
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
        Schema::table('companies', function(Blueprint $table){
            $table->dropColumn(['company_id', 'post_id', 'num_of_employee', 'company_revenue', 'company_name', 'company_post', 'post_date', 'email', 
          'city', 'state', 'zip_code'
          ]);
          });
    }
};
