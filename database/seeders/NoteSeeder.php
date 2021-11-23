<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('notes')->delete();

        \DB::table('notes')->insert([
            ['id'=>'1','title'=>'ฟาตีฮะ','description'=>'กล่าวถึงการสรรเสริญอัลลอฮ์ ','created_at'=>'2021-11-01 20=>10=>11','updated_at'=>'2021-11-11 07=>03=>02'],
            ['id'=>'2','title'=>'love','description'=>'pateint','created_at'=>'2021-11-10 19=>00=>28','updated_at'=>'2021-11-10 19=>00=>28']
               
        ]); 
    }
}
