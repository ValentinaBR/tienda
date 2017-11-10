<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder
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
            'name' => 'Labiales',
            'slug' => 'labiales',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!',
            'color'=> '#C1196D'
          ],
           [
            'name' => 'Rimeles',
            'slug' => 'rimeles',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!',
            'color'=> '#C1196D'
          ]
        
        );
          Category::insert($data);
    }
}