<?php

class ContentTableSeeder extends Seeder{
    public function run()
    {
        DB::table('contents')->delete();
        
        $content = [
          [
              'title' => 'C# Programming Language Future Features',
              'introtext' => 'C# is a modern and innovative programming language that carefully incorporates features found in the most common industry and research languages. In keeping with the design philosophy of C#, Microsoft has introduced several potential new features to the C# language that increase developer productivity with language constructs.',
              'fulltext' => 'C# is a modern and innovative programming language that carefully incorporates features found in the most common industry and research languages. In keeping with the design philosophy of C#, Microsoft has introduced several potential new features to the C# language that increase developer productivity with language constructs.',
              'created_by' => '1',
              'updated_by' => '1',
              'category_id' => '6',
              'created_at' => '2014-06-15 00:00:00',
              'updated_at' => '2014-06-15 00:00:00'
          ]  
        ];
        
        DB::table('contents')->insert($content);
    }
}