<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array (
          [
            'name' => 'Labial 1',
            'slug' => 'labial-1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Tempore perferendis!',
            'extract'=> 'Lorem ipsum dolor sit amet consectetur ',
            'price'=> 10500.00,
            'image'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Lapiz_labial.jpg/200px-Lapiz_labial.jpg',
            'visible'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 1
          ]
          
        );
          Product::insert($data);
    }
}