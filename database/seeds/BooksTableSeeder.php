<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       $param = [
        'book_name' =>'おさかな大集合',
        'book_stock' =>'10',
       ];
       DB::table('books')->insert($param);

       $param = [
        'book_name' =>'おさかな逃走中',
        'book_stock' =>'100',
       ];
       DB::table('books')->insert($param);



    }
}
