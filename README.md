

# Overview

All praise belongs to Allah.  Who gave His servants the Scriptures, and He did not make any distortions.  I praise You, Subhanah, for making Your Book a guide for the believers.  And I praise to whom the Qur'an is revealed to light your heart.  and a radiance to your bosom.  and have adhered to the right path

The Holy Quran is the Holy Book or the Scripture of the Muslims. It lays down for them the law and commandments, codes for their social and moral behaviour, and contains a comprehensive religious philosophy. The language of the Quran is Arabic. It is a compilation of the verbal revelations given to the Holy Prophet Muhammad(Peace be upon him)

# Introuction
Many people who read the Qur'an also distort some of the words in a specific verse.  We have created a page feature in it.  Provide knowledge of specific words in the Quran so that everyone can read them correctly.  and explain about that word and tell where it is in the Quran

# PROBLEM STATEMENT 

 From what we have noticed, there are only a few websites.  Doing about the Quran website and people nowadays most people are online.

 live with the phone  which we have created the Holy Quran website  to be something that is beneficial to all Muslims  In the Quran we have added features which are  specific words in the Quran  It's a word that we come across very often.  And more importantly, there are still many people who misread those words.  So there was an idea to add that function.  to educate about those words

 All this to make it easy for all of us to search Quran and learn Quran.
 
 # OBJECTIVE
 - To design and develop Quran Web Application in Thai language.
 - To make convenience for user in learning The Quran.
 - To be a resource for anyone interested in studying the Quran.
 - Add a feature about  specific words in the Quran  to educate about those words  
 - To make things easy for all of us to make the website for the Quran more thorough.


# Software requirement
 
| Software  | Version   |
|---------  |---------  |
| Laravel   |  8.1      |
| php       | 7.4.19    |
| Vs code   |1.72.0     |
|  Laragon  |5.0.0      |


# Software Method :
* Activity diagram
* Sequence diagram
* Use Case Diagram
* Class Diagram

# Activity diagram

![ativity](https://user-images.githubusercontent.com/96815756/196511272-445f4f1d-d61a-4df3-8697-6ed04071c4a9.png)

# Sequence diagram

![Sequesnce dr](https://user-images.githubusercontent.com/96815756/196511736-3faa287f-e733-40e2-931c-327a6722f615.png)

# Use Case Diagram

![286268752_441035508162536_4959068076365646630_n](https://user-images.githubusercontent.com/96815756/196513462-aa131256-242d-4054-a4af-6d17e5c51146.jpg)


# interface  

![quran](https://user-images.githubusercontent.com/96815756/196480309-d460ca2c-f642-45cf-ab0f-85c429549d61.png)

# feature Spacificword

![quran5](https://user-images.githubusercontent.com/96815756/196481581-e1b00988-5803-40a7-a7ca-7e314680bb26.png)

# Source Code

   <h1 class="title">คำที่ควรสังเกตในอัลกุรอาน</h1>
    
   @foreach($specific as $row)
   <div class="ayat"><p>{{$row->text_specific}}</p></div>
        <p class="t">{{$row->explain_texts}}</p>
        <p>({{$row->name_surah}} : {{$row->ayat_num}})</p>
       
   <audio controls >
      <source src="" type="audio/mpeg">
      </audio>
      <hr color=black > 
      <br>

        @endforeach
     
![quran6](https://user-images.githubusercontent.com/96815756/196483236-a674eb1f-ce3b-4977-b542-d128b6b1f0a1.png)

# Result
![quran3](https://user-images.githubusercontent.com/96815756/196480431-e71bf892-c82a-4a18-b77c-3c1ab1bcecd1.png)

![quran4](https://user-images.githubusercontent.com/96815756/196480512-9541a9b5-a7d1-4189-9ff4-44d29beddbf8.png)

# Conclusion

   The Quran is considered the life of everyone.  A person who has the Quran is a person who lives, and in the Noble Quran there are many functions.  which we have added is  specific words in the Quran  It's a word that we come across very often, and most importantly, there are still a lot of people who misread about them.  So there was an idea to add that function.  to educate about those words
  All this to make it easy for all of us to search Quran and learn Quran.

