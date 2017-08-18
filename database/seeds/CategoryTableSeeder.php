<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['id' => 1, 'name'=> 'Điện Thoại'],
        	['id' => 2, 'name'=> 'Laptop'],
        	['id' => 3, 'name'=> 'Desktop'],
        	['id' => 4, 'name'=> 'Máy Tính Bảng'],
        	['id' => 5, 'name'=> 'Phụ Kiện'],
        	['id' => 6, 'name'=> 'Macbook'],
        ]);
    }
}
