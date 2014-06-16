<?php

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->delete();
        
        $categories = [
            [
                'title' => '.NET',
                'name' => '.NET',
                'description' => 'Semua tentang .NET',
                'published' => '1',
                'editor' => '1',
                'updated_by' => '1',
                'created_by' => '1',
                'created_at' => '2014-06-15 00:00:00',
                'updated_at' => '2014-06-15 00:00:00',
                
            ]  
          ];
           
        DB::table('categories')->insert($categories);
    }
}

