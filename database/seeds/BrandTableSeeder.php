<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
        	['id' => 1, 'name' => 'Apple'],
        	['id' => 2, 'name' => 'Samsung'],
        	['id' => 3, 'name' => 'Nokia'],
        	['id' => 4, 'name' => 'Oppo'],
        	['id' => 5, 'name' => 'LG'],
        	['id' => 6, 'name' => 'Huawei'],
        	['id' => 7, 'name' => 'Lenovo'],
        	['id' => 8, 'name' => 'TCL'],
        	['id' => 9, 'name' => 'Sony'],
        	['id' => 10, 'name' => 'HTC'],
        	['id' => 11, 'name' => 'Asus'],
        	['id' => 12, 'name' => 'Dell'],
        	['id' => 13, 'name' => 'Acer'],
        	['id' => 14, 'name' => 'HP'],
        ]);
    }
}
