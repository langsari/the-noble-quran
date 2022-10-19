มีการเพิ่ม
1)ระบบเปลี่ยนภาษา อังกรุอ่าน
2)ดึง database ไทย มาเเสดงผล
3)เพิ่มข้อมูล database ภาษาอังกฤษ เข้าไป



# Introduction : 

we will talk about the seniors project for devolop , adap. we have to explore the code and have some bug,and no have setting buttom some mode to appropriate for any user. we need to make better.some database existing we extracted to use and change font , background for interrested. 

# Problem Definition : 
The flaw seen in the survey is that there is no proper setting button for translation. We therefore developed a button to change the language to suit the use of the user. 
# Objective : 
Reduce the use of the increased area of the translated language. 
-The more languages that are translated, the more that requires more Therefore, we have to develop a button that allows users to select only one language that the user wants. 
# SCOPE Who is your target : 
-For everyone who wants to visit both Muslims and non-Muslims 
-For thai user or foreginer to learn quran
# Requirement : 
We want to create a translation and explanation that best matches the text of the Qur'an. and the appropriate setting button and the function that is more attractive.


# Constraints : 
The current limitation is There is not enough information and knowledge to solve the problems encountered and to add functions that are not fully as planned. But we will continue to develop to achieve the goal.


# Software Requirement : 
| Software  | Version   |
|---------  |---------  |
| Laravel   |  8.1      |
| php       | 7.4.19    |
| Laragon   | 5.0.0     |
| Vs code   |1.72.0     |
| composer  |2.4.2      |

# Software Method :
Activity diagram

![306351395_637029867888009_1923031057358542847_n](https://user-images.githubusercontent.com/96861429/196728841-af7a93a3-7722-4a3e-b6ad-61f3ba7e2802.jpg)




# Code : 
  <div class="setbut"> 
    <div class="dropdown">
        <span><a class="setbut-1" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
          <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
             </svg></a> </span>
        <div class="dropdown-content">
        <ul> 
          <div class="but">  
          
              <a class="th" href=""><li>Thai</li></a>
              <a class="en" href=""><li>English</li></a> 
                <script>
              if(isset("th")){
    buttomse='th';
                  }
               else(isset("bu")){ 
    buttomse='en';
  } 

  switch( buttomse){

  case 'th':
    tha=<p class="t">{{$arabic->transliteration}}</p>      
    break; 
  case 'eni':
    eng=<p class="t">{{$arabic->thais->Text}}</p>
    break; 
  }
            </script>
             
          </div>
        </ul>
        </div>
      </div>
</div>
 
 
 
 
 .setbut{
  color: #9be2cd;
}

 .buttomset{
  position:static;
  top: 10px;
  right: 10px; 
  left: 10px;
  bottom: 10px; 
  padding: 10px 10px; 
  background-color:gray;
}
.dropdown {
position: relative;
display: inline-block;
}

.dropdown-content {

position: absolute;
background-color: #f9f9f9; 
height: 150px; 
color: black; 

}

.dropdown:hover .dropdown-content {

position: relative;


}
/* */


form.top{  
  position: absolute;
  right: 450px; 
  top: 5px;
 
}

.top{ 
  position: relative;
  align-items: center;
}

description
.
Create an if else statement to create a condition for the switch, and the switch will select the condition that we selected from the if else statement.
In the switch, there is a break statement so that the selected condition will run and other conditions will not work until the user selects that condition.

file location=navuser.blade.php


# User interface : 


![Screenshot 2022-10-19 081400 web page](https://user-images.githubusercontent.com/96861429/196583835-8c01c29b-4d2d-47c9-9440-a8d95e7bb302.png)


We use orange theme because make people feel alert and not lazy . and one the most popular color in the world.





![Screenshot 2022-10-19 082536](https://user-images.githubusercontent.com/96861429/196583846-a8bd4d30-f835-4d52-be89-a251cdffc10a.png)
การเเสดงผลหลังดึงข้อมูลจาก database

.
.
![309445721_677454160465277_5276363645776308690_n](https://user-images.githubusercontent.com/96861429/196705217-49ce8dad-e068-4c28-9279-ece3b255f521.jpg)
![308438527_3292150181072492_6022515477244370567_n](https://user-images.githubusercontent.com/96861429/196705234-af3ffddf-cabc-4654-a5ff-9b2254d8613b.jpg)
icon for using function change languages




