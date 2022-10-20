# Quran.th :-

> **Introduction :**

The Quran is the holy scriptures or scriptures of Muslims. It is a provision for Muslims. The language of the Quran is Arabic. Perhaps many people who read the Quran do not know that certain words or verses in the Quran can or are dua that every Muslim reads every day. whether it is all the time of prayer, Remembrance of Allah in the morning and evening or various duas.
That's why our group has added a feature in this project “Quran.th for Thai language” so that everyone can access the dua feature that is a verse of the Quran.

## Problem definition :

At present, there are very few reliable Thai translation sites of the Quran from what we have searched. Some sites do not have a feature that can let people who read or view it that the Quran we read can also be used as dua in our daily life. Mainly in this project we will add a feature that is a page that adds verses in the Quran that can be used as dua in daily life and improve the front-end page. 

## Objective :

1. Thai users can know the dua that is the verse of the Quran and they can be used in daily life.
2. To make it convenient for Thai users to learn The Quran.

## SCOPE Who is your target :

1. The target is for Thai speakers of all ages.
2. The Web application is available for visitors to learn The Quran verses used as dua in daily life.

## Requirement : 

- M - Mandatory requirement (what the system must do)
- D - Desirable requirement (what the system preferably should do)
- O - Optional requirement (what the system may do)

| Requirements ID | Requirement Description | Priority |
| ------------- | ------------- | -------- |
| REQ_01        | Dua from Quran verses    |          |
| REQ_01.1      | Admin CRUD dua from Quran verses | M |
| REQ_01.2      | Display dua from Quran verses to end-user | M |

<br>

> Software requirement
 
| Software  | Version  |
|---------  |--------- |
| Laravel   | 8.1      |
| php       | 7.4.19   |
| Vs code   | 1.72     |
| Laragon   | 5.0.0    |
| Composer  | 2.4.0    |   

## Design :

> **Use case diagram :**

```
@startuml
rectangle Dua {
  User -- (Login)
  (Login) .> (Register) : include
  User -- (Display Dua Translation)
  User -- (Read Dua Page)
  (Login) -- Admin
  (CRUD Quran Translation) -- Admin
  (CRUD Dua page) -- Admin
}
@enduml
```

<br>

> **Activity diagram :**

```
@startuml
(*)-->"Click Manage Dua"
-right->"Display Manage Dua form "
-->"CRUD DUA"
If "Validate" then
-right-> [Error] "Display Error"
--> "CRUD DUA"
else
--> [Valid]"DRUD in Dua database"
Endif
-->(*)
@enduml
```

<br>

## Development && Source code

#### Database :

1- Open terminal and go to folder the-noble-quran and run command
```terminal
    php artisan make:model -Dua -migration
```
This command will create 2 files which are 
 - Dua.php in app\Models foleder which is files for connect to table on database
 - create_duas_table in database\migrations folder which is create table and allow to up or down column

<br>

2- At create_duas_table in database\migrations folder create column
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('surah_num');
            $table->string('surah_name', 1900);
            $table->integer('ayat_num');
            $table->string('ayat_text', 1900);
            $table->string('ayat_meaning', 1900);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duas');
    }
}

```

<br>

3- Open terminal and go to folder the-noble-quran and run command
```terminal
    php artisan migration
```
This command will migrate our table and column that have been create and will appear on phpMyAdmin
note: there is problem on this step which is it show error that the name dua migration file is have take to another migration file, so the solve is I have to copy all migration files and run this command then paste all migration files back

<br>

4- insert data to laravel.sql or insert on phpMyAdmin
```sql
INSERT INTO `duas` (`id`, `surah_num`, `surah_name`, `ayat_num`, `ayat_text`, `ayat_meaning`) VALUES
(1, 2, 'อัลบะเกาะเราะฮฺ', 127, 'رَبَّنَا تَقَبَّلۡ مِنَّآۖ إِنَّكَ أَنتَ ٱلسَّمِيعُ ٱلۡعَلِيمُ', '“พระผู้อภิบาลของเรา โปรดรับการงานของพวกเรา แน่นอนท่านนั้นได้ยิน และรู้ดียิ่ง”\r\n'),
(2, 2, ' อัล-บะเกาะเราะฮฺ', 128, 'رَبَّنَا وَٱجۡعَلۡنَا مُسۡلِمَيۡنِ لَكَ وَمِن ذُرِّيَّتِنَآ أُمَّةٗ مُّسۡلِمَةٗ لَّكَ وَأَرِنَا مَنَاسِكَنَا وَتُبۡ عَلَيۡنَآۖ إِنَّكَ أَنتَ ٱلتَّوَّابُ ٱلرَّحِيمُ', '“ข้าพระผู้เป็นเจ้าของข้าพระองค์ โปรดให้พระองค์ทั้งสองเป็นผู้นอบน้อมต่อพระองค์และโปรดให้มีขึ้นจากลูกหลานของพวกพระองค์ซึ่งประชาชนที่นอบน้อมต่อพระองค์\r\nและโปรดแสดงแก่ข้าพระองค์ซึ่งพิธีการทำฮัจญ์ของพวกข้าพระองค์\r\nและโปรดอภัยโทษแก่พวกข้าพระองค์ด้วย แท้จริงพระองค์ทรงเป็นผู้อภัยโทษ ทรงเอ็นดูเมตตา”'),
(3, 2, 'อัลบะเกาะเราะฮฺ', 156, 'إِنَّا لِلَّـهِ وَإِنَّا إِلَيْهِ رَاجِعُونَ', '“แท้จริงพวกเราเป็นกรรมสิทธิ์ของอัลลอฮ\r\nและแท้จริงพวกเราจะกลับไปยังพระองค์”'),
(4, 2, 'อัล-บะเกาะเราะฮฺ ', 201, 'رَبَّنَآ ءَاتِنَا فِي ٱلدُّنۡيَا حَسَنَةٗ وَفِي ٱلۡأٓخِرَةِ حَسَنَةٗ وَقِنَا عَذَابَ ٱلنَّارِ\r\n', '“โอ้พระเจ้าของเรา โปรดประทานให้แก่พวกเรา ซึ่งสิ่งดีงามในโลกนี้ และสิ่งดีงามในปรโลกและโปรดคุ้มครองพวกเราให้พ้นจากลงโทษแห่งไฟนรกด้วยเถิด”'),
(5, 2, 'อัล-บะเกาะเราะฮฺ', 250, 'رَبَّنَا أَفْرِغْ عَلَيْنَا صَبْرًا وَثَبِّتْ أَقْدَامَنَا وَانصُرْنَا عَلَى الْقَوْمِ الْكَافِرِينَ\r\n', '“โอ้พระเจ้าของพวกข้าพระองค์โปรดทรงประทานความอดทนให้แก่พวกข้าพระองค์ด้วยเถิดและโปรดทรงให้มั่นคงซึ่งเท้าของข้าพระองค์และโปรดทรงช่วยพวกข้าพระองค์ให้ชนะเหนือพวกปฏิเสธศรัทธาทั้งหลาย”'),
(6, 2, 'อัล-บะเกาะเราะฮฺ ', 286, 'رَبَّنَا لَا تُؤَاخِذْنَا إِن نَّسِينَا أَوْ أَخْطَأْنَا ۚ رَبَّنَا وَلَا تَحْمِلْ عَلَيْنَا إِصْرًا كَمَا حَمَلْتَهُ عَلَى الَّذِينَ مِن قَبْلِنَا\r\n\r\nرَبَّنَا وَلَا تُحَمِّلْنَا مَا لَا طَاقَةَ لَنَا بِهِ ۖ وَاعْفُ عَنَّا وَاغْفِرْ لَنَا وَارْحَمْنَا ۚ أَنتَ مَوْلَانَا فَانصُرْنَا عَلَى الْقَوْمِ الْكَافِرِينَ', '“โอ้พระเจ้าของพวกเรา! โปรดอย่าเอาโทษแก่เราเลย หากพวกเราลืมหรือผิดพลาดไป โอ้พระเจ้าของพวกเรา! โปรดอย่าได้บรรทุกภาระหนักใด ๆแก่พวกเรา เช่นเดียวกับที่พระองค์ได้ทรงบรรทุกมันแก่บรรดาผู้ที่อยู่ก่อนหน้าพวกเรามาแล้ว\r\n\r\nโอ้พระเจ้าของพวกเรา! โปรดอย่าให้พวกเราแบกสิ่งที่ไม่มีกำลังใดๆ แก่พวกเราที่จะแบกมันได้ และโปรดได้ทรงอภัยแก่พวกเราและยกโทษให้แก่พวกเรา และเมตตาแก่พวกเราด้วยเถิด\r\nพระองค์นั้นคือผู้ปกครองของพวกเรา ดังนั้นโปรดได้ทรงช่วยเหลือพวกเราให้ได้รับชัยชนะเหนือกลุ่มชนที่ปฏิเสธศรัทธาด้วยเถิด”'),
(7, 3, 'อาลิอิมรอน', 23, 'رَبَّنَا لَا تُزِغْ قُلُوبَنَا بَعْدَ إِذْ هَدَيْتَنَا وَهَبْ لَنَا مِن لَّدُنكَ رَحْمَةً ۚ إِنَّكَ أَنتَ الْوَهَّابُ\r\n', 'โอ้พระผู้เป็นเจ้าของพวกเรา ! โปรดอย่าให้หัวใจของพวกเราเอนเอียงออกจากความจริงเลย หลังจากที่พระองค์ได้ทรงแนะนำแก่พวกเราแล้ว\r\nและโปรดได้ประทานความเอ็นดูเมตตาจากที่พระองค์ให้แก่พวกเราด้วยเถิด แท้จริงพระองค์นั้นคือผู้ทรงประทานให้อย่างมากมาย”'),
(8, 3, 'อาลิอิมรอน', 16, 'رَبَّنَا إِنَّنَا آمَنَّا فَاغْفِرْ لَنَا ذُنُوبَنَا وَقِنَا عَذَابَ النَّارِ', '“โอ้พระเจ้าแห่งพวกข้าพระองค์ แท้จริงพวกข้าพระองค์ศรัทธากันแล้ว\r\nโปรดทรงอภัยโทษให้แก่พวกข้าพระองค์ด้วยเถิด\r\nซึ่งบรรดาความผิดของพวกข้าพระองค์และโปรดได้ทรงป้องกันพวกข้าพระองค์ให้พ้นจากการลงโทษแห่งไฟนรกด้วย”'),
(9, 3, 'อาลิอิมรอน', 26, 'اللَّـهُمَّ مَالِكَ الْمُلْكِ تُؤْتِي الْمُلْكَ مَن تَشَاءُ وَتَنزِعُ الْمُلْكَ مِمَّن تَشَاءُ وَتُعِزُّ مَن تَشَاءُ\r\nوَتُذِلُّ مَن تَشَاءُ ۖ بِيَدِكَ الْخَيْرُ ۖ إِنَّكَ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ', 'ข้าแต่อัลลอฮ์ผู้ทรงอภิสิทธิ์แห่งอำนาจทั้งปวง! พระองค์นั้นจะทรงประทานอำนาจแก่ผู้ที่พระองค์ทรงประสงค์ และจะทรงถอดถอนอำนาจจากผู้ที่พระองค์ทรงประสงค์\r\nและจะทรงให้เกียรติแก่ผู้ที่พระองค์ทรงประสงค์\r\nและจะทรงยังความต่ำต้อยแก่ผู้ที่พระองค์ทรงประสงค์ ความดีทั้งหลายนั้นอยู่ที่พระหัตถ์ของพระองค์\r\nแท้จริงพระองค์นั้นเป็นผู้ทรงอานุภาพเหนือทุกสิ่งทุกอย่าง'),
(10, 3, 'อาลิอิมรอน', 38, 'رَبِّ هَبۡ لِي مِن لَّدُنكَ ذُرِّيَّةٗ طَيِّبَةًۖ إِنَّكَ سَمِيعُ ٱلدُّعَ', '“ข้าแต่พระเจ้าของข้าพระองค์ โปรดได้ทรงประทานแก่ข้าพระองค์ซึ่งบุตรที่ดีคนหนึ่งจากที่พระองค์ แท้จริงพระองค์เป็นผู้ทรงได้ยินคำวิงวอน”'),
(11, 3, 'อาลิอิมรอน', 53, 'رَبَّنَا آمَنَّا بِمَا أَنزَلْتَ وَاتَّبَعْنَا الرَّسُولَ فَاكْتُبْنَا مَعَ الشَّاهِدِينَ', '“ข้าแต่พระเจ้าของพวกข้าพระองค์ พวกข้าพระองค์ศรัทธาแล้วต่อสิ่งที่พระองค์ได้ประทานลงมา และพวกข้าพระองค์ก็ได้ปฏิบัติตามร่อซูลแล้ว โปรดทรงบันทึกพวกข้าพระองค์ร่วมกับบรรดาผู้ที่กล่าวปฏิญาณยืนยันทั้งหลายด้วยเถิด”'),
(12, 3, 'อาลิอิมรอน ', 147, 'رَبَّنَا اغْفِرْ لَنَا ذُنُوبَنَا وَإِسْرَافَنَا فِي أَمْرِنَا وَثَبِّتْ أَقْدَامَنَا وَانصُرْنَا عَلَى الْقَوْمِ الْكَافِرِينَ\r\n', '“โอ้พระเจ้าแห่งพวกข้าพระองค์ โปรดได้ทรงอภัยโทษให้แก่พวกข้าพระองค์ด้วยเถิด\r\nซึ่งบรรดาความผิดของพวกข้าพระองค์ และการที่พวกข้าพระองค์กระทำเกินขอบเขตในกิจการของพวกข้าพระองค์ และโปรดทรงให้เท้าของพวกข้าพระองค์มั่นอยู่ และโปรดทรงช่วยเหลือพวกข้าพระองค์ให้ชนะเหนือกลุ่มชนผู้ปฏิเสธศรัทธาด้วย”'),
(13, 3, 'อาลิอิมรอน', 173, 'حَسْبُنَا اللَّـهُ وَنِعْمَ الْوَكِيلُ\r\n', '“อัลลอฮ์นั้นเป็นผู้ที่พอเพียงแก่เราแล้ว และเป็นผู้รับมอบหมายที่ดีเยี่ยม”'),
(14, 3, 'อาลิอิมรอน', 191, 'رَبَّنَا مَا خَلَقْتَ هَـٰذَا بَاطِلًا سُبْحَانَكَ فَقِنَا عَذَابَ النَّارِ', '(โอ้พระเจ้าของพวกเข้าพระองค์ พระองค์มิได้ทรงสร้างสิ่งนี้มาโดยไร้สาระ มหาบริสุทธิ์พระองค์ท่าน โปรดทรงคุ้มครองพวกข้าพระองค์ให้พ้นจากการลงโทษแห่งไฟนรกด้วยเถิด)'),
(15, 3, 'อาลิอิมรอน', 192, 'رَبَّنَا إِنَّكَ مَن تُدْخِلِ النَّارَ فَقَدْ أَخْزَيْتَهُ ۖ وَمَا لِلظَّالِمِينَ مِنْ أَنصَارٍ', '“โอ้พระเจ้าของพวกข้าพระองค์\r\nแท้จริงผู้ใดที่พระองค์ทรงให้เข้าไฟนรก แน่นอนพระองค์ก็ยังความอัปยศแก่เขาแล้ว\r\nและสำหรับบรรดาผู้อธรรมนั้นย่อมไม่มีผู้ช่วยเหลือใด ๆ”'),
(16, 3, 'อาลิอิมรอน', 193, 'رَّبَّنَا إِنَّنَا سَمِعْنَا مُنَادِيًا يُنَادِي لِلْإِيمَانِ أَنْ آمِنُوا بِرَبِّكُمْ فَآمَنَّا ۚ رَبَّنَا فَاغْفِرْ لَنَا ذُنُوبَنَا وَكَفِّرْ عَنَّا سَيِّئَاتِنَا وَتَوَفَّنَا مَعَ الْأَبْرَارِ', '“โอ้พระเจ้าของพวกข้าพระองค์! แท้จริงพวกข้าพระองค์ได้ยินผู้ประกาศเชิญชวนผู้หนึ่ง กำลังประกาศเชิญชวนให้มีการศรัทธาว่า\r\nท่านทั้งหลายจงศรัทธาต่อพระเจ้าของพวกเจ้าเถิด และพวกข้าพระองค์ก็ศรัทธากัน โอ้พระเจ้าของพวกข้าพระองค์! โปรดทรงอภัยแก่พวกข้าพระองค์ด้วย ซึ่งบรรดาโทษของพวกข้าพระองค์และโปรดลบล้างให้พ้นจากพวกข้าพระองค์ ซึ่งบรรดาความผิดของพวกข้าพระองค์และโปรดทรงให้พวกข้าพระองค์สิ้นชีวิตโดยร่วมอยู่กับบรรดาผู้ที่เป็นคนดีด้วยเถิด”'),
(17, 3, 'อาลิอิมรอน', 194, 'رَبَّنَا وَآتِنَا مَا وَعَدتَّنَا عَلَىٰ رُسُلِكَ وَلَا تُخْزِنَا يَوْمَ الْقِيَامَةِ ۗ إِنَّكَ لَا تُخْلِفُ الْمِيعَادَ', '“โอ้พระผู้เป็นเจ้าของพวกข้าพระองค์!\r\nและได้โปรดประทานแก่พวกข้าพระองค์สิ่งที่พระองค์ได้สัญญาไว้แก่พวกข้าพระองค์ โดยผ่านบรรดาร่อซูลของพระองค์และโปรดอย่าได้ทรงยังความอัปยศแก่พวกข้าพระองค์ในวันปรโลกเลย\r\nแท้จริงพระองค์นั้นไม่ทรงผิดสัญญา”'),
(18, 4, 'อันนิซาอฺ ', 75, 'وَاجْعَل لَّنَا مِن لَّدُنكَ وَلِيًّا وَاجْعَل لَّنَا مِن لَّدُنكَ نَصِيرًا', '“(โอ้พระเจ้าของเรา) และโปรดให้มีขึ้นแก่พวกเราซึ่งผู้คุ้มครองคนหนึ่งจากที่พระองค์\r\nและโปรดให้มีขึ้นแก่พวกเราซึ่งผู้ช่วยเหลือคนหนึ่งจากที่พระองค์”'),
(19, 5, 'อัลมาอิดะฮฺ', 83, 'رَبَّنَا آمَنَّا فَاكْتُبْنَا مَعَ الشَّاهِدِينَ', '“โอ้พระเจ้าของพวกข้าพระองค์\r\nโปรดได้ทรงจารึกพวกข้าพระองค์ไว้ร่วมกับบรรดาผู้กล่าวปฏิญาณยืนยันด้วยเถิด” '),
(20, 5, 'อัลมาอิดะฮฺ', 118, 'إِن تُعَذِّبْهُمْ فَإِنَّهُمْ عِبَادُكَ ۖ وَإِن تَغْفِرْ لَهُمْ فَإِنَّكَ أَنتَ الْعَزِيزُ الْحَكِيمُ', '“หากพระองค์จะทรงลงโทษพวกเขา แท้จริงพวกเขาก็คือบ่าวของพระองค์ และหากพระองค์จะทรงอภัยโทษให้แก่พวกเขา แท้จริงพระองค์ท่านคือผู้ทรงเดชานุภาพ ผู้ทรงปรีชาญาณ”'),
(21, 6, 'อัลอันอาม', 79, 'إِنِّي وَجَّهْتُ وَجْهِيَ لِلَّذِي فَطَرَ السَّمَاوَاتِ وَالْأَرْضَ حَنِيفًا ۖ وَمَا أَنَا مِنَ الْمُشْرِكِينَ', '“แท้จริงข้าพระองค์ขอผินหน้าของข้าพระองค์แด่ผู้ที่สร้างบรรดาชั้นฟ้าและแผ่นดิน\r\nในฐานะผู้ใฝ่หาความจริง ผู้สวามิภักดิ์\r\nและข้าพระองค์มิใช่คนหนึ่งในหมู่ผู้ให้มีภาคีขึ้น”'),
(22, 6, 'อัลอันอาม', 162, 'قُلۡ إِنَّ صَلَاتِي وَنُسُكِي وَمَحۡيَايَ وَمَمَاتِي لِلَّهِ رَبِّ ٱلۡعَٰلَمِينَ', '“จงกล่าวเถิด(มุฮัมมัด)ว่า\r\nแท้จริงการละหมาดของฉัน และการอิบาดะฮฺของฉัน และการมีชีวิตของฉัน และการตายของฉันนั้นเพื่ออัลลอฮฺ\r\nผู้เป็นพระเจ้าแห่งสากลโลกเท่านั้น”'),
(23, 6, 'อัลอันอาม', 163, 'لَا شَرِيكَ لَهُۥۖ وَبِذَٰلِكَ أُمِرۡتُ وَأَنَا۠ أَوَّلُ ٱلۡمُسۡلِمِينَ', '“ไม่มีภาคีใด ๆ แก่พระองค์ และด้วยสิ่งนั้นแหละข้าพระองค์ถูกใช้ และข้าพระองค์คือคนแรกในหมู่ผู้สวามิภักดิ์ทั้งหลาย”'),
(24, 7, 'อัลอะอฺรอฟ ', 23, 'رَبَّنَا ظَلَمْنَا أَنْفُسَنَا وَإِنْ لَمْ تَغْفِرْ لَنَا وَتَرْحَمْنَا لَنَكُونَنَّ مِنَ الْخَاسِرِينَ', '“โอ้พระเจ้าของพวกข้าพระองค์ พวกข้าพระองค์ได้อธรรมแก่ตัวของพวกข้าพระองค์เอง และถ้าพระองค์ไม่ทรงอภัยโทษแก่พวกข้าพระองค์และเอ็นดูเมตตาแก่ข้าพระองค์แล้วแน่นอนพวกข้าพระองค์ก็ต้องกลายเป็นพวกที่ขาดทุน”'),
(25, 7, 'อัลอะอฺรอฟ ', 43, 'الْحَمْدُ لِلَّهِ الَّذِي هَدَانَا لِهَذَا وَمَا كُنَّا لِنَهْتَدِيَ لَوْلَا أَنْ هَدَانَا اللَّهُ', '“การสรรเสริญทั้งหลายนั้นเป็นสิทธิของอัลลอฮ์ผู้ทรงแนะนำพวกเราให้ได้รับสิ่งนี้ และใช่ว่าพวกเราจะได้รับคำแนะนำก็หาไม่ หากว่าอัลลอฮ์ไม่ทรงแนะนำแก่พวกเรา”'),
(26, 7, 'อัลอะอฺรอฟ ', 47, 'رَبَّنَا لَا تَجْعَلْنَا مَعَ الْقَوْمِ الظَّالِمِينَ\r\n', '“โอ้พระเจ้าของพวกข้าพระองค์\r\nโปรดอย่าได้ทรงให้พวกข้าพระองค์ร่วมอยู่กับกลุ่มผู้อธรรมเหล่านั้นเลย”'),
(27, 7, 'อัลอะอฺรอฟ', 126, 'رَبَّنَا أَفْرِغْ عَلَيْنَا صَبْرًا وَتَوَفَّنَا مُسْلِمِينَ', '“โอ้พระเจ้าของเรา โปรดเทความอดทนลงมาบนพวกเราด้วยเถิด และโปรดทรงให้พวกเราตายในฐานะผู้สวามิภักดิ์ด้วย”'),
(28, 7, 'อัลอะอฺรอฟ', 151, 'رَبِّ اغْفِرْ لِي وَلِأَخِي وَأَدْخِلْنَا فِي رَحْمَتِكَ وَأَنْتَ أَرْحَمُ الرَّاحِمِينَ', '“โอ้พระเจ้าแห่งข้าพระองค์โปรดอภัยโทษแก่ข้าพระองค์ และแก่พี่ชายของข้าพระองค์ด้วย และโปรดได้ทรงให้พวกข้าพระองค์เข้าอยู่ในความเอ็นดูเมตตาของพระองค์เถิด และพระองค์นั้นคือผู้ที่ทรงเอ็นดูเมตตายิ่งกว่าผู้เอ็นดูเมตตาทั้งหลาย”'),
(29, 9, 'อัตเตาบะฮฺ', 129, 'حَسْبِيَ اللَّهُ لَا إِلَهَ إِلَّا هُوَ عَلَيْهِ تَوَكَّلْتُ وَهُوَ رَبُّ الْعَرْشِ الْعَظِيمِ', '“อัลลอฮ์นั้นเป็นที่พอเพียงแก่ฉันแล้ว ไม่มีพระเจ้าอื่นใดนอกจากพระองค์เท่านั้น\r\nแด่พระองค์เท่านั้นที่ฉันขอมอบหมาย และพระองค์คือเจ้าของบัลลังก์อันยิ่งใหญ่”'),
(30, 11, 'ฮูด', 47, 'رَبِّ إِنِّي أَعُوذُ بِكَ أَنْ أَسْأَلَكَ مَا لَيْسَ لِي بِهِ عِلْمٌ وَإِلَّا تَغْفِرْ لِي وَتَرْحَمْنِي أَكُنْ مِنَ الْخَاسِرِينَ\r\n', '“ข้าแต่พระผู้เป็นเจ้าของข้าพระองค์\r\nแท้จริงข้าพระองค์ขอความคุ้มครองต่อพระองค์ท่าน\r\nให้พ้นจากการร้องเรียนต่อพระองค์ท่านในสิ่งที่ข้าพระองค์ไม่มีความรู้ในเรื่องนั้น และหากพระองค์ไม่ทรงอภัยแก่ข้าพระองค์ และไม่ทรงเมตตาข้าพระองค์แล้ว\r\nข้าพระองค์ก็จะอยู่ในหมู่ผู้ขาดทุน” '),
(31, 11, 'ฮูด', 56, 'إِنِّي تَوَكَّلْتُ عَلَى اللَّهِ رَبِّي وَرَبِّكُمْ مَا مِنْ دَابَّةٍ إِلَّا هُوَ آخِذٌ بِنَاصِيَتِهَا إِنَّ رَبِّي عَلَى صِرَاطٍ مُسْتَقِيمٍ\r\n', '“แท้จริงฉันมอบหมายต่ออัลลอฮ์ พระเจ้าของฉันและพระเจ้าของพวกท่าน ไม่มีสัตว์เลื้อยคลานใด ๆ เว้นแต่พระองค์ทรงกำขมับมัน แท้จริงพระเจ้าของฉันอยู่บนทางที่เที่ยงตรง”'),
(32, 11, 'ฮูด', 88, 'وَمَا تَوْفِيقِي إِلَّا بِاللَّهِ عَلَيْهِ تَوَكَّلْتُ وَإِلَيْهِ أُنِيبُ', '“และความสำเร็จของฉันจะไม่เกิดขึ้น เว้นแต่ด้วยความช่วยเหลือของอัลลอฮ์ แด่พระองค์ฉันขอมอบหมายและยังพระองค์เท่านั้นฉันกลับไปหา”'),
(33, 12, 'ยูซุฟ', 86, 'ยูซุฟ', '“แท้จริงฉันร้องเรียนความเศร้าสลดของฉันและความทุกข์ระทมของฉันต่ออัลลอฮ์”'),
(34, 12, 'ยูซุฟ ', 101, 'فَاطِرَ السَّمَاوَاتِ وَالْأَرْضِ أَنتَ وَلِيِّي فِي الدُّنْيَا وَالْآخِرَةِ ۖ تَوَفَّنِي مُسْلِمًا وَأَلْحِقْنِي بِالصَّالِحِينَ', '“พระผู้ทรงสร้างชั้นฟ้าทั้งหลายและแผ่นดิน พระองค์เป็นผู้คุ้มครองข้าพระองค์ทั้งในโลกดุนยาและอาคิเราะฮ์\r\nขอพระองค์ทรงให้ข้าพระองค์ตายในสภาพเป็นผู้นอบน้อม และทรงให้ข้าพระองค์รวมอยู่ในหมู่คนดีทั้งหลาย'),
(35, 14, 'อิบรอฮีม', 35, 'رَبِّ اجْعَلْ هَـٰذَا الْبَلَدَ آمِنًا وَاجْنُبْنِي وَبَنِيَّ أَن نَّعْبُدَ الْأَصْنَامَ\r\n', '“โอ้ พระเจ้าของข้าพระองค์\r\nขอพระองค์ทรงให้เมืองนี้ (มักกะฮ) ปลอดภัยและทรงให้ข้าพระองค์และลูกหลานของข้าพระองค์พ้นจากการบูชาเจว็ด” '),
(36, 14, 'อิบรอฮีม ', 38, 'رَبَّنَا إِنَّكَ تَعْلَمُ مَا نُخْفِي وَمَا نُعْلِنُ ۗ وَمَا يَخْفَىٰ عَلَى اللَّـهِ مِن شَيْءٍ فِي الْأَرْضِ وَلَا فِي السَّمَاءِ\r\n', '“โอ้พระเจ้าของเรา แท้จริงพระองค์ทรงรอบรู้สิ่งที่เราปิดบังและสิ่งที่เราเปิดเผย ไม่มีสิ่งใดจะซ่อนเร้นไปจากอัลลอฮ ทั้งในแผ่นดินและในชั้นฟ้า”'),
(37, 14, 'อิบรอฮีม ', 40, 'رَبِّ اجْعَلْنِي مُقِيمَ الصَّلَاةِ وَمِن ذُرِّيَّتِي ۚ رَبَّنَا وَتَقَبَّلْ دُعَاءِ', '“โอ้พระเจ้าของข้าพระองค์\r\nขอพระองค์ทรงให้ข้าพระองค์และจากลูกหลานของข้าพระองค์เป็นผู้ดำรงการละหมาด\r\nโอ้พระเจ้าของเรา ขอพระองค์ทรงตอบรับการวิงวอนของข้าพระองค์ด้วยเทอญ” '),
(38, 14, 'อิบรอฮีม', 41, 'رَبَّنَا اغْفِرْ لِي وَلِوَالِدَيَّ وَلِلْمُؤْمِنِينَ يَوْمَ يَقُومُ الْحِسَابُ', '.\r\n“โอ้พระเจ้าของเรา ขอพระองค์ทรงอภัยโทษให้แก่ข้าพระองค์\r\nและแก่บิดามารดาของข้าพระองค์ และแก่บรรดามุอมิน\r\nในวันที่การสอบสวนจะมีขึ้น”'),
(39, 17, 'อัลอิสรออฺ ', 24, 'رَّبِّ ارْحَمْهُمَا كَمَا رَبَّيَانِي صَغِيرًا', '“ข้าแต่พระเจ้าของฉัน\r\nทรงโปรดเมตตาแก่ท่านทั้งสองเช่นที่ทั้งสองได้เลี้ยงดูฉันเมื่อเยาว์วัย”'),
(40, 17, 'อัลอิสรออฺ', 80, 'رَّبِّ أَدْخِلْنِي مُدْخَلَ صِدْقٍ وَأَخْرِجْنِي مُخْرَجَ صِدْقٍ وَاجْعَل لِّي مِن لَّدُنكَ سُلْطَانًا نَّصِيرًا', '“ข้าแต่พระเจ้าของข้าพระองค์\r\nได้ทรงโปรดนำข้าพระองค์เข้าตามทางเข้าที่ชอบธรรม\r\nและได้ทรงโปรดนำข้าพระองค์ออกตามทางออกที่ชอบธรรม และทรงโปรดให้ข้าพระองค์มีอำนาจที่เข้มแข็ง ซึ่งได้รับการช่วยเหลือจากพระองค์” '),
(41, 17, 'อัลอิสรออฺ', 111, 'الْحَمْدُ لِلَّـهِ الَّذِي لَمْ يَتَّخِذْ وَلَدًا وَلَمْ يَكُن لَّهُ شَرِيكٌ فِي الْمُلْكِ وَلَمْ يَكُن لَّهُ وَلِيٌّ مِّنَ الذُّلِّ ۖ وَكَبِّرْهُ تَكْبِيرًا', '“การสรรเสริญทั้งมวลเป็นของอัลลอฮ\r\nซึ่งไม่ทรงตั้งพระบุตรและไม่มีภาคีใดๆ ร่วมกับพระองค์ในอำนาจ และไม่มีผู้ช่วยเหลือใดๆ แก่พระองค์ให้พ้นจากความต่ำต้อย และจงให้ความเกรียงไกรแด่พระองค์อย่างกึกก้อง”'),
(42, 18, 'อัลกะฮฟฺ', 10, 'رَبَّنَا آتِنَا مِن لَّدُنكَ رَحْمَةً وَهَيِّئْ لَنَا مِنْ أَمْرِنَا رَشَدًا', 'ข้าแต่พระผู้เป็นเจ้าของเรา\r\nขอพระองค์ทรงโปรดประทานความเมตตาจากพระองค์แก่เรา\r\nและทรงทำให้การงานของเราอยู่ในแนวทางที่ถูกต้อง'),
(43, 19, 'มัรยัม ', 5, 'فَهَبْ لِي مِن لَّدُنكَ وَلِيًّا', '\"ขอพระองค์ทรงโปรดประทานทายาทที่ดีจากพระองค์แก่ข้าพระองค์ด้วยเถิด\"'),
(44, 20, 'ฏอฮา', 25, 'رَبِّ ٱشۡرَحۡ لِي صَدۡ\r\nوَيَسِّرۡ لِيٓ أَمۡرِ\r\nوَٱحۡلُلۡ عُقۡدَةٗ مِّن لِّسَ\r\nيَفۡقَهُواْ قَوۡ', '“ข้าแต่พระเจ้าของข้าพระองค์ ขอพระองค์ทรงโปรดเปิดอกของข้าพระองค์ให้แก่ข้าพระองค์ด้วยเถิด”\r\n“และทรงโปรดทำให้การงานของข้าพระองค์ ง่ายดายแก่ข้าพระองค์ด้วย\r\n“และทรงโปรดแก้ปม จากลิ้นของข้าพระองค์ด้วย”\r\n“เพื่อให้พวกเขาเข้าใจคำพูดของข้าพระองค์”\r\n“และทรงโปรดให้คนในครอบครัวของข้าพระองค์ เป็นผู้ช่วยแก่ข้าพระองค์ด้วย”'),
(45, 20, 'ฏอฮา ', 114, 'رَّبِّ زِدْنِي عِلْمًا', '“ข้าแต่พระเจ้าของข้าพระองค์\r\nขอพระองค์ทรงโปรดเพิ่มพูนความรู้แก่ข้าพระองค์ด้วย”'),
(46, 21, 'อัลอันบิยาอฺ', 83, 'أَنِّي مَسَّنِيَ الضُّرُّ وَأَنتَ أَرْحَمُ الرَّاحِمِينَ', '“แท้จริงข้าพระองค์นั้น ความทุกข์ยากได้ประสบแก่ข้าพระองค์ และพระองค์เท่านั้นเป็นผู้ทรงเมตตายิ่ง ในหมู่ผู้เมตตาทั้งหลาย\"'),
(47, 21, 'อัลอันบิยาอฺ ', 87, 'لَّا إِلَـٰهَ إِلَّا أَنتَ سُبْحَانَكَ إِنِّي كُنتُ مِنَ الظَّالِمِينَ', '“ไม่มีพระเจ้าอื่นใดนอกจากกพระองค์ ท่านมหาบริสุทธิ์แห่งพระองค์ท่าน แท้จริงข้าพระองค์เป็นผู้หนึ่งในหมู่ผู้อธรรมทั้งหลาย” '),
(48, 21, 'อัลอันบิยาอฺ ', 89, 'رَبِّ لَا تَذَرْنِي فَرْدًا وَأَنتَ خَيْرُ الْوَارِثِينَ\r\n', '“ข้าแต่พระเจ้าของข้าพระองค์\r\nขอพระองค์ทรงอย่าปล่อยให้ข้าพระองค์อยู่อย่างเดียวดาย\r\nและพระองค์ท่านเท่านั้นเป็นผู้สืบมรดกอันดียิ่ง”'),
(49, 21, 'อัลอันบิยาอฺ', 112, 'رَبِّ احْكُم بِالْحَقِّ ۗ وَرَبُّنَا الرَّحْمَـٰنُ الْمُسْتَعَانُ عَلَىٰ مَا تَصِفُونَ', '“ข้าแต่พระผู้เป็นเจ้าของข้าพระองค์ ขอพระองค์ทรงชี้ขาดตัดสินแก่เราด้วยความจริง และพระเจ้าของเรา คือ พระผู้ทรงกรุณา ปรานี ผู้ทรงถูกขอความช่วยเหลือต่อสิ่งที่พวกท่านกล่าวหา” '),
(50, 23, 'อัลมุอฺมินูน ', 97, 'رَّبِّ أَعُوذُ بِكَ مِنۡ هَمَزَٰتِ ٱلشَّيَٰطِينِ\r\nوَأَعُوذُ بِكَ رَبِّ أَن يَحۡضُرُونِ', '“ข้าแต่พระเจ้าของข้าพระองค์ ข้าพระองค์ขอความคุ้มครองต่อพระองค์ ให้พ้นจากเสียงกระซิบกระซาบของชัยฎอน\r\n“และข้าพระองค์ขอความคุ้มครองต่อพระองค์\r\nให้พ้นจากการที่พวกมันจะนำความชั่วร้ายมาสู่ข้าพระองค์”'),
(51, 23, 'อัลมุอฺมินูน ', 109, 'رَبَّنَا آمَنَّا فَاغْفِرْ لَنَا وَارْحَمْنَا وَأَنتَ خَيْرُ الرَّاحِمِينَ', '“ข้าแต่พระเจ้าของเรา พวกเราได้ศรัทธาต่อพระองค์\r\nขอพระองค์ทรงโปรดอภัยโทษให้แก่เรา และทรงเมตตาต่อเราด้วย และพระองค์ท่านเท่านั้น ทรงเป็นผู้เมตตาที่ดียิ่ง”'),
(52, 23, 'อัลมุอฺมินูน ', 118, 'رَّبِّ اغْفِرْ وَارْحَمْ وَأَنتَ خَيْرُ الرَّاحِمِينَ', '“ข้าแต่พระเจ้าของข้าพระองค์\r\nขอพระองค์ทรงโปรดอภัยและทรงเมตตา และพระองค์ท่านเท่านั้นทรงเป็นผู้เมตตาที่ดียิ่ง”'),
(53, 25, 'อัลฟุรกอน', 65, 'رَبَّنَا اصْرِفْ عَنَّا عَذَابَ جَهَنَّمَ ۖ إِنَّ عَذَابَهَا كَانَ غَرَامًا إِنَّهَا سَاءَتْ مُسْتَقَرًّا وَمُقَامًا', '“ข้าแต่พระผู้เป็นเจ้าของเรา\r\nขอพระองค์ทรงปัดเป่าการลงโทษของนรกให้พ้นไปจากเรา แท้จริงการลงโทษของมันนั้นมันคงอยู่ตลอดกาล แท้จริงมันเป็นที่อยู่และที่พำนักอันเลวร้ายยิ่ง”'),
(54, 25, 'อัลฟุรกอน', 74, 'رَبَّنَا هَبْ لَنَا مِنْ أَزْوَاجِنَا وَذُرِّيَّاتِنَا قُرَّةَ أَعْيُنٍ وَاجْعَلْنَا لِلْمُتَّقِينَ إِمَامًا', '“ข้าแต่พระผู้เป็นเจ้าของเรา\r\nขอพระองค์โปรดประทานแก่เรา ซึ่งคู่ครองของเราและลูกหลานของเรา ให้เป็นที่รื่นรมย์แก่สายตาของเรา และทรงทำให้เราเป็นแบบอย่างแก่บรรดาผู้ยำเกรง”'),
(55, 26, 'อัชชุอะรออฺ', 78, 'ٱلَّذِي خَلَقَنِي فَهُوَ يَهۡدِ\r\nوَٱلَّذِي هُوَ يُطۡعِمُنِي وَيَسۡقِينِ\r\nوَإِذَا مَرِضۡتُ فَهُوَ يَشۡفِينِ\r\nوَٱلَّذِي يُمِيتُنِي ثُمَّ يُحۡيِ\r\nوَٱلَّذِيٓ أَطۡمَعُ أَن يَغۡفِرَ لِي خَطِيٓ‍َٔتِي يَوۡمَ ٱلدِّ\r\nرَبِّ هَبۡ لِي حُكۡمٗا وَأَلۡحِقۡنِي بِٱلصَّٰلِحِينَ\r\nوَٱجۡعَل لِّي لِسَانَ صِدۡقٖ فِي ٱلۡأٓخِرِينَ\r\nوَٱجۡعَلۡنِي مِن وَرَثَةِ جَنَّةِ ٱلنَّعِيمِ', '“ซึ่งพระองค์ทรงสร้างฉัน แล้วพระองค์ทรงชี้แนะทางแก่ฉัน \r\nและพระองค์ทรงประทานอาหารให้ฉันและทรงให้น้ำดื่มแก่ฉัน\r\nและเมื่อฉันป่วย ดังนั้นพระองค์ทรงให้ฉันหายป่วย\r\nและผู้ทรงให้ฉันตายแล้วทรงให้ฉันมีชีวิต\r\nและผู้ที่ฉันหวังว่า จะทรงอภัยแก่ฉันซึ่งความผิดพลาดในวันแห่งการตอบแทน\r\nข้าแต่พระเจ้าของฉัน! ขอพระองค์ทรงประทานความรู้และทรงให้ฉันอยู่รวมกับหมู่คนดีทั้งหลาย\r\nและทรงทำให้ฉันได้รับการรำลึกอย่างดีในหมู่ชนรุ่นต่อ ๆ ไป\r\nและทรงทำให้ฉันอยู่ในหมู่ผู้รับมรดกแห่งสวนสวรรค์อันร่มรื่น”');

```

<br>

#### Route
At web.php file in route folder add the path of dua page which is url and also add fuchtion controller and call class dua and specify the path of it throug command use
```php
    use App\Http\Controllers\QuransController;

    Route::get('/dua', [QuransController::class, 'dua'])->name ('dua');
```

<br>


#### Controller
At Http\QuransController.php file in controller folder specify path of model Dua.php and create function dua and call data from database
```php
    use App\Models\Dua;

    public function dua() {
        $dua=Dua::paginate(10);
        return view('quran.dua' ,compact('dua'));
    }
 
```

<br>

#### View
At resource\view\quran\nav.blade.php at menu on navber and link to /dua route
```php
  <a href="{{ route('dua')}}">ดูอา</a>
```

<br>

At resource\view\quran create dua page and put the code to display page and all so call database via function dua that have been create on QuransController
```html
@extends('quran.navbar')
@section('content')

<br>
<br>
<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dua</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    
    <style>
        
    </style>

</head>
<body>
    <h1 style = "font-family: 'Mitr', sans-serif; text-align: center; padding: 15px 0px 10px 0px;">ดูอาจากอัลกุรอาน</h1>
    <div style = "background-color: #F7F6DC;" class="py-12">
        <div class="container">
            <div class="row">
                <table style = " font-family: 'Mitr', sans-serif; " class="table">
                    <thead style = " background-color: #CFFF8D; ">
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ซูเราะห์ที่</th>
                            <th scope="col">ชื่อซูเราะห์</th>
                            <th scope="col">อายัตที่</th>
                            <th scope="col">ดูอา</th>
                            <th scope="col">ความหมาย</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dua as $row)
                        <tr>
                            <th>{{$row->id}}</th>
                            <td>{{$row->surah_num}}</td>
                            <td>{{$row->surah_name}}</td>
                            <td>{{$row->ayat_num}}</td>
                            <td>{{$row->ayat_text}}</td>
                            <td>{{$row->ayat_meaning}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div style = "font-family: 'Mitr', sans-serif;  margin: auto; width: 20%; padding-top: 15px; ">{{$dua->links()}}</div>
</body>
</html>
```

<br>





> **User interface :**

<img width="1266" alt="image" src="https://user-images.githubusercontent.com/95903407/196587727-7394f715-e099-466b-8b34-eabc08ffd303.png">

<img width="1266" alt="image" src="https://user-images.githubusercontent.com/95903407/196587898-3d2d19e4-7176-4f30-ab77-85fdfd314f7e.png">

## Development :

```

```

## Test :

1. Open Laragon and click on start button.
2. Click on database for open phpmyadmin and create database then import database file.
3. Open VS code and open project folder on it.
4. Type php artisan serve in VS code terminal and click the link to enter the Quran.th web page.

```
```
