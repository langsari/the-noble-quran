<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatasurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('datasurahs')->delete();

        \DB::table('datasurahs')->insert([
            [
                'id' => 1,
                'th_name' => ' อัล-ฟาติหะฮฺ',
                'surah_name' => 'Surah Al-Fatihah',
                'surah_arab' => 'الفاتحة',
                'whole_ayah' => '7',
                'type' => 'Mekkah',
            ],
            [
                'id' => 2,
                'th_name' => ' อัล-บะเกาะเราะฮ',
                'surah_name' => 'Surah Al-Baqarah',
                'surah_arab' => 'البقرة',
                'whole_ayah' => '286',
                'type' => 'Madinah',
            ],
            [
                'id' => 3,
                'th_name' => ' อาลิ อิมรอน',
                'surah_name' => 'Surah Ali `Imran',
                'surah_arab' => 'الفاتحةآل عمران',
                'whole_ayah' => '200',
                'type' => 'Madinah',
            ],
             [
            'id'=>'4',
            'th_name'=>'อัน-นิสาอ์',
            'surah_name'=>'Surah An-Nisa`',
            'surah_arab'=>'النّساء',
            'whole_ayah'=>'176',
            'type'=>'Madinah'
         ],
         [
            'id'=>'5',
            'th_name'=>'อัล-มาอิดะฮฺ',
            'surah_name'=>'Surah Al-Ma`idah',
            'surah_arab'=>'المآئدة',
            'whole_ayah'=>'120',
            'type'=>'Madinah'
         ],
         [
            'id'=>'6',
            'th_name'=>'อัล-อันอาม',
            'surah_name'=>'Surah Al-An`am',
            'surah_arab'=>'الانعام',
            'whole_ayah'=>'165',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'7',
            'th_name'=>'อัล-อะอฺรอฟ',
            'surah_name'=>'Surah Al-A’raf',
            'surah_arab'=>'الأعراف',
            'whole_ayah'=>'206',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'8',
            'th_name'=>'อัล-อันฟาล',
            'surah_name'=>'Surah Al-Anfal',
            'surah_arab'=>'الأنفال',
            'whole_ayah'=>'75',
            'type'=>'Madinah'
         ],
         [
            'id'=>'9',
            'th_name'=>'อัต-เตาบะฮฺ',
            'surah_name'=>'Surah At-Taubah',
            'surah_arab'=>'التوبة',
            'whole_ayah'=>'129',
            'type'=>'Madinah'
         ],
         [
            'id'=>'10',
            'th_name'=>'ยูนุส',
            'surah_name'=>'Surah Yunus',
            'surah_arab'=>'ينوس',
            'whole_ayah'=>'109',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'11',
            'th_name'=>'ฮูด',
            'surah_name'=>'Surah Hud',
            'surah_arab'=>'هود',
            'whole_ayah'=>'123',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'12',
            'th_name'=>'ยูสุฟ',
            'surah_name'=>'Surah Yusuf',
            'surah_arab'=>'يسوف',
            'whole_ayah'=>'111',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'13',
            'th_name'=>' อัร-เราะอฺด์',
            'surah_name'=>'Surah Ar-Ra’d',
            'surah_arab'=>'الرّعد',
            'whole_ayah'=>'43',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'14',
            'th_name'=>'อิบรอฮีม',
            'surah_name'=>'Surah Ibrahim',
            'surah_arab'=>'إبراهيم',
            'whole_ayah'=>'52',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'15',
            'th_name'=>'อัล-หิจญ์รฺ',
            'surah_name'=>'Surah Al-Hijr',
            'surah_arab'=>'الحجر',
            'whole_ayah'=>'99',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'16',
            'th_name'=>'อัน-นะห์ลฺ',
            'surah_name'=>'Surah An-Nahl',
            'surah_arab'=>'النّحل',
            'whole_ayah'=>'128',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'17',
            'th_name'=>'อัล-อิสรออ์',
            'surah_name'=>'Surah Al-Isra`',
            'surah_arab'=>'الإسرا',
            'whole_ayah'=>'111',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'18',
            'th_name'=>'อัล-กะฮ์ฟฺ',
            'surah_name'=>'Surah Al-Kahf',
            'surah_arab'=>'الكهف',
            'whole_ayah'=>'110',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'19',
            'th_name'=>'มัรยัม',
            'surah_name'=>'Surah Maryam',
            'surah_arab'=>'مريم',
            'whole_ayah'=>'98',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'20',
            'th_name'=>'ฏอฮา',
            'surah_name'=>'Surah Ta Ha',
            'surah_arab'=>'طه',
            'whole_ayah'=>'135',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'21',
            'th_name'=>'อัล-อันบิยาอ์',
            'surah_name'=>'Surah Al-Anbiya',
            'surah_arab'=>'الأنبياء',
            'whole_ayah'=>'112',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'22',
            'th_name'=>'อัล-หัจญ์',
            'surah_name'=>'Surah Al-Hajj',
            'surah_arab'=>'الحجّ',
            'whole_ayah'=>'78',
            'type'=>'Madinah & Makkah'
         ],
         [
            'id'=>'23',
            'th_name'=>'อัล-มุอ์มินูน',
            'surah_name'=>'Surah Al-Mu’minun',
            'surah_arab'=>'المؤمنون',
            'whole_ayah'=>'118',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'24',
            'th_name'=>'อัน-นูร',
            'surah_name'=>'Surah An-Nur',
            'surah_arab'=>'النّور',
            'whole_ayah'=>'64',
            'type'=>'Madinah'
         ],
         [
            'id'=>'25',
            'th_name'=>'อัล-ฟุรกอน',
            'surah_name'=>'Surah Al-Furqan',
            'surah_arab'=>'الفرقان',
            'whole_ayah'=>'77',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'26',
            'th_name'=>'อัช-ชุอะรออ์',
            'surah_name'=>'Surah Asy-Syu`ara`',
            'surah_arab'=>'الشّعراء',
            'whole_ayah'=>'227',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'27',
            'th_name'=>'อัน-นัมล์',
            'surah_name'=>'Surah An-Naml',
            'surah_arab'=>'النّمل',
            'whole_ayah'=>'93',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'28',
            'th_name'=>'อัล-เกาะศ็อศ',
            'surah_name'=>'Surah Al-Qasas',
            'surah_arab'=>'القصص',
            'whole_ayah'=>'88',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'29',
            'th_name'=>'อัล-อันกะบูต',
            'surah_name'=>'Surah Al-`Ankabut',
            'surah_arab'=>'العنكبوت',
            'whole_ayah'=>'69',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'30',
            'th_name'=>'อัร-รูม',
            'surah_name'=>'Surah Ar-Rum',
            'surah_arab'=>'الرّوم',
            'whole_ayah'=>'60',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'31',
            'th_name'=>'ลุกมาน',
            'surah_name'=>'Surah Luqman',
            'surah_arab'=>'لقمان',
            'whole_ayah'=>'34',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'32',
            'th_name'=>'อัส-สัจญ์ดะฮฺ',
            'surah_name'=>'Surah As-Sajdah',
            'surah_arab'=>'السّجدة',
            'whole_ayah'=>'30',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'33',
            'th_name'=>'อัล-อะห์ซาบ',
            'surah_name'=>'Surah Al-Ahzab',
            'surah_arab'=>'الْأحزاب',
            'whole_ayah'=>'73',
            'type'=>'Madinah'
         ],
         [
            'id'=>'34',
            'th_name'=>'สะบะอ์',
            'surah_name'=>'Surah Saba’',
            'surah_arab'=>'سبا',
            'whole_ayah'=>'54',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'35',
            'th_name'=>'ฟาฏิร',
            'surah_name'=>'Surah Fatir',
            'surah_arab'=>'فاطر',
            'whole_ayah'=>'45',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'36',
            'th_name'=>'ยาสีน',
            'surah_name'=>'Surah Ya Sin',
            'surah_arab'=>'يس',
            'whole_ayah'=>'83',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'37',
            'th_name'=>'อัศ-ศอฟฟาต',
            'surah_name'=>'Surah As-Saffat',
            'surah_arab'=>'الصّافات',
            'whole_ayah'=>'182',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'38',
            'th_name'=>' ศอด',
            'surah_name'=>'Surah Sad',
            'surah_arab'=>'ص',
            'whole_ayah'=>'88',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'39',
            'th_name'=>'อัซ-ซุมัร',
            'surah_name'=>'Surah Az-Zumar',
            'surah_arab'=>'الزّمر',
            'whole_ayah'=>'75',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'40',
            'th_name'=>'อัล-ฆอฟิร\/อัลมุมิน',
            'surah_name'=>'Surah Al-Mu’min',
            'surah_arab'=>'المؤمن',
            'whole_ayah'=>'85',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'41',
            'th_name'=>'ฟุศศิลัต',
            'surah_name'=>'Surah Fussilat',
            'surah_arab'=>'فصّلت',
            'whole_ayah'=>'54',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'42',
            'th_name'=>'อัช-ชูรอ',
            'surah_name'=>'Surah Asy-Syura',
            'surah_arab'=>'الشّورى',
            'whole_ayah'=>'53',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'43',
            'th_name'=>'อัช-ซุครุฟ',
            'surah_name'=>'Surah Az-Zukhruf',
            'surah_arab'=>'الزّخرف',
            'whole_ayah'=>'89',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'44',
            'th_name'=>'อัด-ดุคอน',
            'surah_name'=>'Surah Ad-Dukhan',
            'surah_arab'=>'الدّخان',
            'whole_ayah'=>'59',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'45',
            'th_name'=>'อัล-ญาษิยะฮฺ',
            'surah_name'=>'Surah Al-Jasiyah',
            'surah_arab'=>'الجاثية',
            'whole_ayah'=>'37',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'46',
            'th_name'=>'อัล-อะห์กอฟ',
            'surah_name'=>'Surah Al-Ahqaf',
            'surah_arab'=>'الَأحقاف',
            'whole_ayah'=>'35',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'47',
            'th_name'=>' มุหัมมัด',
            'surah_name'=>'Surah Muhammad',
            'surah_arab'=>'محمّد',
            'whole_ayah'=>'38',
            'type'=>'Madinah'
         ],
         [
            'id'=>'48',
            'th_name'=>'อัล-ฟัตห์',
            'surah_name'=>'Surah Al-Fath',
            'surah_arab'=>'الفتح',
            'whole_ayah'=>'29',
            'type'=>'Madinah'
         ],
         [
            'id'=>'49',
            'th_name'=>'อัล-อัล-หุญุรอต',
            'surah_name'=>'Surah Al-Hujurat',
            'surah_arab'=>'الحجرات',
            'whole_ayah'=>'18',
            'type'=>'Madinah'
         ],
         [
            'id'=>'50',
            'th_name'=>'กอฟ',
            'surah_name'=>'Surah Qaf',
            'surah_arab'=>'ق',
            'whole_ayah'=>'45',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'51',
            'th_name'=>'อัซ-ซาริยาต',
            'surah_name'=>'Surah Az-Zariyat',
            'surah_arab'=>'الذّاريات',
            'whole_ayah'=>'60',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'52',
            'th_name'=>'อัฏ-ฏูร',
            'surah_name'=>'Surah At-Tur',
            'surah_arab'=>'الطّور',
            'whole_ayah'=>'49',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'53',
            'th_name'=>'อัน-นัจญ์มฺ',
            'surah_name'=>'Surah An-Najm',
            'surah_arab'=>'النّجْم',
            'whole_ayah'=>'62',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'54',
            'th_name'=>'อัล-อัล-เกาะมัร',
            'surah_name'=>'Surah Al-Qamar',
            'surah_arab'=>'القمر',
            'whole_ayah'=>'55',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'55',
            'th_name'=>'อัร-เราะห์มาน',
            'surah_name'=>'Surah Ar-Rahman',
            'surah_arab'=>'الرّحْمن',
            'whole_ayah'=>'78',
            'type'=>'Madinah & Mekkah'
         ],
         [
            'id'=>'56',
            'th_name'=>'อัล-วากิอะฮฺ',
            'surah_name'=>'Surah Al-Waqi’ah',
            'surah_arab'=>'الواقعه',
            'whole_ayah'=>'96',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'57',
            'th_name'=>'อัล-หะดีด',
            'surah_name'=>'Surah Al-Hadid',
            'surah_arab'=>'الحديد',
            'whole_ayah'=>'29',
            'type'=>'Madinah'
         ],
         [
            'id'=>'58',
            'th_name'=>'อัล-มุญาดิละฮฺ',
            'surah_name'=>'Surah Al-Mujadilah',
            'surah_arab'=>'المجادلة',
            'whole_ayah'=>'22',
            'type'=>'Madinah'
         ],
         [
            'id'=>'59',
            'th_name'=>'อัล-หัชร์',
            'surah_name'=>'Surah Al-Hasyr',
            'surah_arab'=>'الحشْر',
            'whole_ayah'=>'24',
            'type'=>'Madinah'
         ],
         [
            'id'=>'60',
            'th_name'=>'อัล-มุมตะหะนะฮฺ',
            'surah_name'=>'Surah Al-Mumtahanah',
            'surah_arab'=>'الممتحنة',
            'whole_ayah'=>'13',
            'type'=>'Madinah'
         ],
         [
            'id'=>'61',
            'th_name'=>'อัศ-ศ็อฟ',
            'surah_name'=>'Surah As-Saff',
            'surah_arab'=>'الصّفّ',
            'whole_ayah'=>'14',
            'type'=>'Madinah'
         ],
         [
            'id'=>'62',
            'th_name'=>'อัล-ญุมุอะฮฺ',
            'surah_name'=>'Surah Al-Jumu’ah',
            'surah_arab'=>'الجمعة',
            'whole_ayah'=>'11',
            'type'=>'Madinah'
         ],
         [
            'id'=>'63',
            'th_name'=>'อัล-มุนาฟิกูน',
            'surah_name'=>'Surah Al-Munafiqun',
            'surah_arab'=>'المنافقون',
            'whole_ayah'=>'11',
            'type'=>'Madinah'
         ],
         [
            'id'=>'64',
            'th_name'=>'อัต-ตะฆอบุน',
            'surah_name'=>'Surah At-Tagabun',
            'surah_arab'=>'التّغابن',
            'whole_ayah'=>'18',
            'type'=>'Madinah'
         ],
         [
            'id'=>'65',
            'th_name'=>'อัฏ-เฏาะลาก',
            'surah_name'=>'Surah At-Talaq',
            'surah_arab'=>'الطّلاق',
            'whole_ayah'=>'12',
            'type'=>'Madinah'
         ],
         [
            'id'=>'66',
            'th_name'=>'อัต-ตะห์รีม',
            'surah_name'=>'Surah At-Tahrim',
            'surah_arab'=>'التّحريم',
            'whole_ayah'=>'12',
            'type'=>'Madinah'
         ],
         [
            'id'=>'67',
            'th_name'=>'อัล-มุลก์',
            'surah_name'=>'Surah Al-Mulk',
            'surah_arab'=>'الملك',
            'whole_ayah'=>'30',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'68',
            'th_name'=>'อัล-เกาะลัม',
            'surah_name'=>'Surah Al-Qalam',
            'surah_arab'=>'القلم',
            'whole_ayah'=>'52',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'69',
            'th_name'=>'อัล-ห๊ากเกาะฮฺ',
            'surah_name'=>'Surah Al-Haqqah',
            'surah_arab'=>'الحآقّة',
            'whole_ayah'=>'52',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'70',
            'th_name'=>'อัล-มะอาริจญ์',
            'surah_name'=>'Surah Al-Ma’arij',
            'surah_arab'=>'المعارج',
            'whole_ayah'=>'44',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'71',
            'th_name'=>'นูหฺ',
            'surah_name'=>'Surah Nuh',
            'surah_arab'=>'نوح',
            'whole_ayah'=>'28',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'72',
            'th_name'=>' อัล-ญิน',
            'surah_name'=>'Surah Al-Jinn',
            'surah_arab'=>'الجنّ',
            'whole_ayah'=>'28',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'73',
            'th_name'=>'อัล-มุซซัมมิล',
            'surah_name'=>'Surah Al-Muzzammil',
            'surah_arab'=>'المزمّل',
            'whole_ayah'=>'20',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'74',
            'th_name'=>'อัล-มุดดัษษิร',
            'surah_name'=>'Surah Al-Muddassir',
            'surah_arab'=>'المدشّر',
            'whole_ayah'=>'56',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'75',
            'th_name'=>'อัล-กิยามะฮฺ',
            'surah_name'=>'Surah Al-Qiyamah',
            'surah_arab'=>'القيمة',
            'whole_ayah'=>'40',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'76',
            'th_name'=>' อัล-อินซาน',
            'surah_name'=>'Surah Al-Insan',
            'surah_arab'=>'الْاٍنسان',
            'whole_ayah'=>'31',
            'type'=>'Madinah'
         ],
         [
            'id'=>'77',
            'th_name'=>' อัล-มุรสะลาต',
            'surah_name'=>'Surah Al-Mursalat',
            'surah_arab'=>'المرسلات',
            'whole_ayah'=>'50',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'78',
            'th_name'=>'อัน-นะบะอ์',
            'surah_name'=>'Surah An-Naba’',
            'surah_arab'=>'النّبا',
            'whole_ayah'=>'40',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'79',
            'th_name'=>'อัน-นาซิอาต',
            'surah_name'=>'Surah An-Nazi’at',
            'surah_arab'=>'النّازعات',
            'whole_ayah'=>'46',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'80',
            'th_name'=>'อะบะสะ',
            'surah_name'=>'Surah `Abasa',
            'surah_arab'=>'عبس',
            'whole_ayah'=>'42',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'81',
            'th_name'=>' อัต-ตักวีร',
            'surah_name'=>'Surah At-Takwir',
            'surah_arab'=>'التّكوير',
            'whole_ayah'=>'29',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'82',
            'th_name'=>'อัล-อินฟิฏอร',
            'surah_name'=>'Surah Al-Infitar',
            'surah_arab'=>'الانفطار',
            'whole_ayah'=>'19',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'83',
            'th_name'=>' อัล-มุฏ็อฟฟิฟีน',
            'surah_name'=>'Surah Al-Tatfif',
            'surah_arab'=>'المطفّفين',
            'whole_ayah'=>'36',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'84',
            'th_name'=>'อัล-อินชิกอก',
            'surah_name'=>'Surah Al-Insyiqaq',
            'surah_arab'=>'الانشقاق',
            'whole_ayah'=>'25',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'85',
            'th_name'=>'อัล-บุรูจญ์',
            'surah_name'=>'Surah Al-Buruj',
            'surah_arab'=>'البروج',
            'whole_ayah'=>'22',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'86',
            'th_name'=>'อัฏ-ฏอริก',
            'surah_name'=>'Surah At-Tariq',
            'surah_arab'=>'الطّارق',
            'whole_ayah'=>'17',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'87',
            'th_name'=>' อัล-อะอฺลา',
            'surah_name'=>'Surah Al-A’la',
            'surah_arab'=>'الْأعلى',
            'whole_ayah'=>'19',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'88',
            'th_name'=>'อัล-ฆอชิยะฮฺ',
            'surah_name'=>'Surah Al-Gasyiyah',
            'surah_arab'=>'الغاشية',
            'whole_ayah'=>'26',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'89',
            'th_name'=>' อัล-ฟัจญ์รฺ',
            'surah_name'=>'Surah Al-Fajr',
            'surah_arab'=>'الفجر',
            'whole_ayah'=>'30',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'90',
            'th_name'=>' อัล-บะลัด',
            'surah_name'=>'Surah Al-Balad',
            'surah_arab'=>'البلد',
            'whole_ayah'=>'20',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'91',
            'th_name'=>'อัช-ชัมส์',
            'surah_name'=>'Surah Asy-Syams',
            'surah_arab'=>'الشّمس',
            'whole_ayah'=>'15',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'92',
            'th_name'=>'อัล-ลัยล์',
            'surah_name'=>'Surah Al-Lail',
            'surah_arab'=>'الّيل',
            'whole_ayah'=>'21',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'93',
            'th_name'=>'อัฎ-ฎูหา',
            'surah_name'=>'Surah Ad-Duha',
            'surah_arab'=>'الضحى',
            'whole_ayah'=>'11',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'94',
            'th_name'=>'อัล-อินชิรอหฺ',
            'surah_name'=>'Surah Al-Insyirah',
            'surah_arab'=>'الانشراح',
            'whole_ayah'=>'8',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'95',
            'th_name'=>'อัต-ตีน',
            'surah_name'=>'Surah At-Tin',
            'surah_arab'=>'التِّينِ',
            'whole_ayah'=>'8',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'96',
            'th_name'=>'อัล-อะลัก',
            'surah_name'=>'Surah Al-`Alaq',
            'surah_arab'=>'العَلَق',
            'whole_ayah'=>'19',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'97',
            'th_name'=>'อัล-ก็อดรฺ',
            'surah_name'=>'Surah Al-Qadr',
            'surah_arab'=>'الْقَدْرِ',
            'whole_ayah'=>'5',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'98',
            'th_name'=>'อัล-บัยยินะฮฺ',
            'surah_name'=>'Surah Al-Bayyinah',
            'surah_arab'=>'الْبَيِّنَةُ',
            'whole_ayah'=>'8',
            'type'=>'Madinah'
         ],
         [
            'id'=>'99',
            'th_name'=>'อัซ-ซัลซะละฮฺ',
            'surah_name'=>'Surah Az-Zalzalah',
            'surah_arab'=>'الزلزلة',
            'whole_ayah'=>'8',
            'type'=>'Madinah'
         ],
         [
            'id'=>'100',
            'th_name'=>'อัล-อาดิยาต',
            'surah_name'=>'Surah Al-`Adiyat',
            'surah_arab'=>'العاديات',
            'whole_ayah'=>'11',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'101',
            'th_name'=>'อัล-กอริอะฮฺ',
            'surah_name'=>'Surah Al-Qari`ah',
            'surah_arab'=>'القارعة',
            'whole_ayah'=>'11',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'102',
            'th_name'=>' อัต-ตะกาษุร',
            'surah_name'=>'Surah At-Takasur',
            'surah_arab'=>'التكاثر',
            'whole_ayah'=>'8',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'103',
            'th_name'=>'อัล-อัศร์',
            'surah_name'=>'Surah Al-`Asr',
            'surah_arab'=>'العصر',
            'whole_ayah'=>'3',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'104',
            'th_name'=>'อัล-ฮุมะซะฮฺ',
            'surah_name'=>'Surah Al-Humazah',
            'surah_arab'=>'الهُمَزة',
            'whole_ayah'=>'9',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'105',
            'th_name'=>'อัล-ฟีล',
            'surah_name'=>'Surah Al-Fil',
            'surah_arab'=>'الْفِيلِ',
            'whole_ayah'=>'5',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'106',
            'th_name'=>'กุร็อยช์',
            'surah_name'=>'Surah Quraisy',
            'surah_arab'=>'قُرَيْشٍ',
            'whole_ayah'=>'4',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'107',
            'th_name'=>'อัล-มาอูน',
            'surah_name'=>'Surah Al-Ma’un',
            'surah_arab'=>'الْمَاعُونَ',
            'whole_ayah'=>'7',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'108',
            'th_name'=>'อัล-เกาษัร',
            'surah_name'=>'Surah Al-Kausar',
            'surah_arab'=>'الكوثر',
            'whole_ayah'=>'3',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'109',
            'th_name'=>'อัล-กาฟิรูน',
            'surah_name'=>'Surah Al-Kafirun',
            'surah_arab'=>'الْكَافِرُونَ',
            'whole_ayah'=>'6',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'110',
            'th_name'=>'อัน-นัศร์',
            'surah_name'=>'Surah An-Nasr',
            'surah_arab'=>'النصر',
            'whole_ayah'=>'3',
            'type'=>'Madinah'
         ],
         [
            'id'=>'111',
            'th_name'=>'อัล-มะสัด',
            'surah_name'=>'Surah Al-Lahab',
            'surah_arab'=>'المسد',
            'whole_ayah'=>'5',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'112',
            'th_name'=>'อัล-อิคลาศ',
            'surah_name'=>'Surah Al-Ikhlas',
            'surah_arab'=>'الإخلاص',
            'whole_ayah'=>'4',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'113',
            'th_name'=>'อัล-ฟะลัก',
            'surah_name'=>'Surah Al-Falaq',
            'surah_arab'=>'الْفَلَقِ',
            'whole_ayah'=>'5',
            'type'=>'Mekkah'
         ],
         [
            'id'=>'114',
            'th_name'=>' อัน-นาส',
            'surah_name'=>'Surah An-Nas',
            'surah_arab'=>'النَّاسِ',
            'whole_ayah'=>'6',
            'type'=>'Mekkah'
         ]

            ]);
    
    }
}
