<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Sidebar</title>
    
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxl-c-plus-plus'></i>
                <div class="logo_name">The Noble Quran</div>
            </div>
            <i class='bx bx-menu' id='btn' ></i>
        </div>
        <ul class="nev_list">
            <li>
                <i class='bx bx-search' ></i>
                 <input type="text" placeholder="Search...">
                 <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#">
                  <i class='bx bx-grid-alt'></i>
                  <span class="links_name">Dashboard</span>
                </a>
                 <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                  <i class='bx bx-user'></i>
                  <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span> 
            </li>
            <li>
                <a href="#">
                  <i class='bx bx-chat'></i>
                  <span class="links_name">Messages</span>
                </a>
                 <span class="tooltip">Messages</span> 
            </li>
            <li>
                <a href="#">
                <i class='bx bx-pie-chart-alt-2' ></i>
                  <span class="links_name">Analytics</span>
                </a>
                 <span class="tooltip">Analytics</span> 
            </li>
            <li>
                <a href="#">
                <i class='bx bx-folder' ></i>
                  <span class="links_name">File Manager</span>
                </a>
                 <span class="tooltip">File Manager</span> 
            </li>
            <li>
                <a href="#">
                <i class='bx bx-cart' ></i>
                  <span class="links_name">Order</span>
                </a>
                 <span class="tooltip">Order</span>
            </li>
            <li>
                <a href="#">
                <i class='bx bx-bookmark-heart'></i>
                  <span class="links_name">Saved</span>
                </a>
                 <span class="tooltip">Saved</span> 
            </li>
            <li>
                <a href="#">
                <i class='bx bx-cog' ></i>
                  <span class="links_name">Setting</span>
                </a>
                 <span class="tooltip">Setting</span> 
            </li>
        </ul>
        <div class="profile_content">
          <div class="profile">
            <div class="profile_details">
               <img src="img/GOOFY.png" alt="">
              <div class="name_job">
                <div class="name">Charif Damuso</div>
                <div class="job">Web Designer</div>
              </div>
            </div>
            <i class='bx bx-log-out' id="log_out" ></i>

          </div>
        </div>
    </div>
    
    <!--<div class="backdrop">-->
        <div class="home_content">
           <div class="text">Home Content</div>

           <div class="surah_card">
              <div class="surah-card__number">
                 1
              </div>
              <div class="surah_card__text">
                    
                    <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"   type="buttom" class="btn btn-outline-info" >
                    <span class="text_name">Al-Fatihah</span> 
                    (The openner)
                     <h4>ٱلْفَاتِحَة</h4>
                    </button>
                  </a>
               </div>
               <div class="col-sm">
                    <a href="Al-baqarah.html"><button style="height: 120px; width:320px;"  type="button" class="btn btn-outline-info"> <span>Al-Baqarah</span> (The cow,the cow) 
                    <h4>ٱلْبَقَرَة</h4></button></a>
               </div>
               <div class="col-sm">
                   <a href="tranlate.html"><button style="height: 120px; width:320px;"  type="button" class="btn btn-outline-info"><span>Al-Imran</span> (The family of imran)
               <h4>آلِ عِمْرَان</h4></button></a>
               </div>
          </div>

          
          
          
        </div>
    <!--</div>-->


    <script>
      let btn = document.querySelector("#btn");
      let sidebar = document.querySelector(".sidebar");
      let searchBtn = document.querySelector(".bx-search");
      /*let home_content = document.querySelector(".home_content");*/

      /*const backdrop = document.querySelector('.backdrop')*/
  
      btn.onclick = function() {
        sidebar.classList.toggle("active")
      }
      searchBtn.onclick = function() {
        sidebar.classList.toggle("active")
      }


      /*const btn = document.querySelector('#btn')
      const home_content = document.querySelector('.home_content')
      const sidebar = document.querySelector('.sidebar')
      
      btn.addEventListener('click' , () => {
        home_content.classList.toggle('.sidebar.active')
        sidebar.classList.toggle('sidebar.active')
      });*/
     
     



    </script>
    
</body>
</html>