<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\JSON;

class orderseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('orders')->insert([
        'title'  => 'first test',
        'customername' => 'Test User',
        'orderdate'  => '2022-07-12',
        'journeydate' => '2022-07-15',
        'emailid' => 'test@example.com',
        'productphoto'=>'photo.jpg',
        'description' => 'testing',
        ]);

    }
}
