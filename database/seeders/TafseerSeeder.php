<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TafseerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tafseers')->delete();

        \DB::table('tafseers')->insert([
            ['index'=>'1','name'=>'#คุฏบะฮ์ ความลับสูเราะฮ์อัล-ฟาติหะฮ์ - ซุฟอัม อุษมาน','youtubeId'=>'H8yLaMW-v6k','datasurah_id'=>'1'],
            ['index'=>'2','name'=>'AH 1106 คุณค่าของ อัล-ฟาติฮะห์ โดย เชคริฎอ อะหมัด สมะดี','youtubeId'=>'dBWUgWote7k','datasurah_id'=>'1'],
            ['index'=>'3','name'=>'ตัฟซีรซูเราะห์อัลฟาติฮะห์ บรรยายธรรมอิสลาม อ.อิสมาแอล วิสุทธิปราณี','youtubeId'=>'YtzEk78gbQI','datasurah_id'=>'1'],
            ['index'=>'4','name'=>'AH 2448 ตัฟซีรอัลกุรอ่าน ซูเราะห์อัลบากอเราะห์ โดย อาจารย์มุบาร็อก มะหะหมัดซอและห์','youtubeId'=>'4sHU5JwxpEU','datasurah_id'=>'2'],
            ['index'=>'5','name'=>'ตัฟซีรอัลกุรอ่าน ซูเราะฮฺที่ 2 อัลบากอเราะฮฺ ตอน 1 (อายะฮฺที่ 1-2)','youtubeId'=>'nVtG0fmOYsw','datasurah_id'=>'2']
]);    
}

}
