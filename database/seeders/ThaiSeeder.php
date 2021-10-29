<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('thais')->delete();

        \DB::table('thais')->insert([


            ['arabic_id'=>'1','datasurah_id'=>'1','ayat'=>'1','Text'=>'ด้วยพระนามของอัลลอฮฺ ผู้ทรงกรุณาปราณี ผู้ทรงเมตตาเสมอ','audio'=>'001001.mp3','tafseer'=>' ซูเราะฮฺนี้มีชื่อว่า อัลฟาติหะฮฺ(ผู้เปิด) หมายถึงผู้เปิดคัมภีร์(อัลกุรอาน)ที่ได้มีการเขียนบันทึกขึ้น และซูเราะฮฺอัลฟาติหะฮฺนี้เป็นคำเปิดอ่านในละหมาด มีบางคนเรียกว่า อุมมุลกิตาบ=>أم الكتاب (แม่ของคัมภีร์อัลกุรอาน) แต่อะนัซ อัลหะซันและอิบนุซีรีน ไม่เห็นด้วยกับการเรียกชื่อซูเราะฮฺนี้ว่า อุมมุลกิตาม เพราะอัลหะซันและอิบนุซีรีน มีความเห็นว่า ชื่อ อุมมุลกิตาบนี้เป็นชื่อของ เลาฮุลมะหิชฺฟูซ(اللوح المحفوظ)[1] อัลหะซันกล่าวว่า อายาตุลมุหฺกะมาต(โองการที่มีข้อความรัดกุมชัดเจน) คือ อุมมุลกิตาบ(แม่ของคัมภีร์) ดังนั้นทั้งสองคนจึงไม่เห็นด้วยที่จะให้ชื่อซูเราะฮฺอัลฟาติหะฮฺว่า อุมมุลกุรอาน(แม่ของอัลกุรอาน)เช่นกัน'],
            ['arabic_id'=>'2','datasurah_id'=>'1','ayat'=>'2','Text'=>'การสรรเสริญทั้งหลายนั้น เป็นสิทธิของอัลลอฮฺผู้เป็นพระเจ้าแห่งสากลโลก','audio'=>'001002.mp3','tafseer'=>'อะบูฮุร็อบเราะฮฺ, มุญาฮิด, อะฏออฺ อิบนุ ยะซารฺและอัซซัฮฺรีย์ กล่าวว่า ซูเราะฮฺนี้เป็นซูเราะฮฺมะดะนียะฮฺ(مَدَنِيَّة) หมายถึงเป็นซูเราะฮฺที่ประทานลงในระหว่างที่นบีอยู่มะดีนะฮฺ แต่ก็มีอีกความเห็นกล่าวว่าซูเราะฮฺนี้ประทานลงมา 2 ครั้ง ครั้งหนึ่งที่มักกะฮฺและอีกครั้งที่มะดีนะฮฺ'],
            ['arabic_id'=>'3','datasurah_id'=>'1','ayat'=>'3','Text'=>'ผู้ทรงกรุณาปราณี ผู้ทรงเมตตาเสมอ','audio'=>'001003.mp3','tafseer'=>'ความประเสริฐของการอ่าน ซูเราะฮฺ อัลฟาติหะฮฺ ในฮะดีษกุรซีย์ ระบุว่าเป็นการสนทนาระหว่างบ่าวกับอัลลอฮฺ­ตะอาลา โดยมีรายงานจากท่านอะบีฮุรอยเราะฮฺ ร่อฎิยันลอฮุอันฮากล่าวว่า “ฉันได้ยินร่อซูลลุลลอฮฺ ซล. กล่าวว่า อัลลอฮฺตะอาลา ตรัสว่า” ข้าได้แบ่งการละหมาด ออกเป็นสองส่วนระหว่างข้ากับบ่าวของข้า สำหรับบ่าวของข้านั้นเขาจะได้ตามสิ่งที่เข­าขอ'],
            ['arabic_id'=>'4','datasurah_id'=>'1','ayat'=>'4','Text'=>'ผู้ทรงอภิสิทธิ์แห่งวันตอบแทน','audio'=>'001004.mp3','tafseer'=>'เมื่อบ่าวกล่าวว่า(อัลฮัมดุลิ้ลลาฮิ ร็อบบิล อาละมีน) อัลลอฮฺตะอาลาก็ตรัสว่า บ่าวของข้าได้สรรเสริญข้า และเมื่อเขากล่าวว่า (อัรเราะฮฺมานิรเราะฮีม) อัลลอฮฺตะอาลาก็ตรัสว่า บ่าวของข้าชมเชยข้า'],
            ['arabic_id'=>'5','datasurah_id'=>'1','ayat'=>'5','Text'=>'เฉพาะพระองค์เท่านั้นที่พวกข้าพระองค์เคารพอิบาดะฮฺ และเฉพาะพระองค์เท่านั้นที่พวกข้าพระองค์ขอความช่วยเหลือ','audio'=>'001005.mp3','tafseer'=>'และเมื่อเขากล่าวว่า (มาลิกิเยามิดดีน)พระองค์ก็ตรัสว่า บ่าวของข้าเทิดเกียรติข้า และตรัสอีกครั้งหนึ่งว่า บ่าวของข้าได้มอบหมายแก่ข้า และเมื่อเขากล่าวว่า (อี้ยากะ นะอฺบุดุ วะอี้ยากะนัสตะอีน) '],
            ['arabic_id'=>'6','datasurah_id'=>'1','ayat'=>'6','Text'=>'ขอพระองค์ทรงแนะนำพวกข้าพระองค์ซึ่งทางอันเที่ยงตรง','audio'=>'001006.mp3','tafseer'=>' พระองค์ก็ตรัสว่าเรื่องนี้ระหว่างข้ากับบ่­าวของข้า และสำหรับบ่าวของข้าจะได้สิ่งที่เขาขอ'],
            ['arabic_id'=>'7','datasurah_id'=>'1','ayat'=>'7','Text'=>'(คือ) ทางของบรรดาผู้ที่พระองค์ได้ทรงโปรดปราณแก่พวกเขา มิใช่ในทางของพวกที่ถูกกริ้ว และมิใช่ทางของพวกที่หลงผิด','audio'=>'001007.mp3','tafseer'=>'เมื่อเขากล่าวว่า (อิฮฺดินัศศิรอ ฏ้อลมุสตะกีม ศิรอฏ็อล ละซีนะ อันอัมตะ อะลัยฮิม ฆ็อยริล มัฆฎู บิอะลัยฮิม วะลัฎฎอลลีน) พระองค์ก็ตรัสว่า สิ่งนี้จะได้แก่บ่าวของข้าและบ่าวของข้าจะ­ได้สิ่งที่เขาขอ'],
            ['arabic_id'=>'8','datasurah_id'=>'2','ayat'=>'1','Text'=>'อะลิฟ ลาม มีม','audio'=>'002001.mp3','tafseer'=>''],
            ['arabic_id'=>'9','datasurah_id'=>'2','ayat'=>'2','Text'=>'คัมภีร์นี้ ไม่มีความสงสัยใด ๆ ในนั้น เป็นคำแนะนำสำหรับบรรดาผู้ยำเกรงเท่านั้น','audio'=>'002002.mp3','tafseer'=>''],
            ['arabic_id'=>'10','datasurah_id'=>'2','ayat'=>'3','Text'=>'คือบรรดาผู้ศรัทธาต่อสิ่งเร้นลับ และดำรงไว้ซึ่งการละหมาด และส่วนหนึ่งจากสิ่งที่เราได้ให้เป็นปัจจัยยังชีพแก่พวกเขานั้น พวกเขาก็บริจาค','audio'=>'002003.mp3','tafseer'=>''],
            ['arabic_id'=>'11','datasurah_id'=>'2','ayat'=>'4','Text'=>'และบรรดาผู้ที่ศรัทธาต่อสิ่งที่ถูกประทานลงมาแก่เจ้า และสิ่งที่ถูกประทานลงมาก่อนเจ้า และต่อวันปรโลกนั้นพวกเขาเชื่อมั่น','audio'=>'002004.mp3','tafseer'=>''],
            ['arabic_id'=>'12','datasurah_id'=>'2','ayat'=>'5','Text'=>'ชนเหล่านี้ คือ ผู้ที่(ตั้ง)อยู่บนคำแนะนำ ที่มาจากพระผู้เป็นเจ้าของพวกเขา และชนเหล่านี้คือผู้ที่บรรลุผล','audio'=>'002005.mp3','tafseer'=>''],
            ['arabic_id'=>'13','datasurah_id'=>'2','ayat'=>'6','Text'=>'แท้จริงบรรดาผู้ที่ปฏิเสธการศรัทธานั้นย่อมมีผลเท่ากันแก่พวกเขา เจ้าจะตักเตือนพวกเขาแล้วหรือยังมิได้ตักเตือนพวกเขาก็หาได้ศรัทธาไม่','audio'=>'002006.mp3','tafseer'=>''],
            ['arabic_id'=>'14','datasurah_id'=>'2','ayat'=>'7','Text'=>'อัลลอฮฺได้ทรงประทับตราบนหัวใจของพวกเขา และบนหูของพวกเขาแล้ว และบนตาของพวกเขาก็มีสิ่งบดบังอยู่ และเขาเหล่านั้น จะได้รับการลงโทษอันมหันต์','audio'=>'002007.mp3','tafseer'=>''],
            ['arabic_id'=>'15','datasurah_id'=>'2','ayat'=>'8','Text'=>'และจากหมู่ชนนั้น มีผู้กล่าว่า เราได้ศรัทธาต่ออัลลอฮฺ และวันปรโลกแล้ว ทั้ง ๆ ที่พวกเขาหาใช่เป็นผู้ศรัทธาไม่','audio'=>'002008.mp3','tafseer'=>''],
            ['arabic_id'=>'16','datasurah_id'=>'2','ayat'=>'9','Text'=>'เขาเหล่านั้นต่างหลอกลวงอัลลอฮฺ และบรรดาผู้ที่ศรัทธา และพวกเขาหาได้หลอกลวงใครไม่ นอกจากตัวของพวกเขาเองเท่านั้น แต่พวกเขาไม่รู้สึก','audio'=>'002009.mp3','tafseer'=>''],
            ['arabic_id'=>'17','datasurah_id'=>'2','ayat'=>'10','Text'=>'ในหัวใจของพวกเขามีโรคอย่างหนึ่ง แล้วอัลลอฮฺได้ทรงเพิ่มโรคอีกอย่างหนึ่ง ให้แก่พวกเขา และพวกเขาจะได้รับการนลงโทษอันเจ็บแสบเนื่องจากการที่พวกเขากล่าวเท็จ','audio'=>'002010.mp3','tafseer'=>''],
            ['arabic_id'=>'18','datasurah_id'=>'2','ayat'=>'11','Text'=>'และเมื่อได้ถูกกล่าวแก่พวกเขาว่า พวกท่านจงอย่าก่อความเสียหาแก่แผ่นดิน ซิ พวกเขาก็กล่าวว่า ที่จริงนั้น เราเป็นผู้ปรับปรุงให้ดีต่างหาก','audio'=>'002011.mp3','tafseer'=>''],
            ['arabic_id'=>'19','datasurah_id'=>'2','ayat'=>'12','Text'=>'พึงรู้เถอะว่าแท้จริงพวกเขานั่นแหละ เป็นผู้ที่ก่อความเสียหาย แต่ทว่าพวกเขาไม่รู้สึก','audio'=>'002012.mp3','tafseer'=>''],
            ['arabic_id'=>'20','datasurah_id'=>'2','ayat'=>'13','Text'=>'และเมื่อได้ถูกล่าวแก่พวกเขาว่า พวกท่านจงศรัทธาเยี่ยงที่ประชาชน เขาศรัทธากันซิ พวกเขาก็กล่าวว่า จะให้เราศรัทธาเยี่ยงผู้โฉดเขลาเหล่านั้นศรัทธากัน กระนั่นหรือ? พึงรู้เถิดว่าพวกเขาเองนั่นแหละเป็นผู้ที่โฉดเขลาแต่พวกเขาหารู้ไม่','audio'=>'002013.mp3','tafseer'=>''],
            
            ]);
            }
            }
            

