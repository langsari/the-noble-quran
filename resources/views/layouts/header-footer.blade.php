<!DOCTYPE html>
<html>

<head>
 


    <title>The Noble Quran | Quran.com</title>
    <link rel="shortcut icon" type="image" href="{{asset('Images/icons/android-chrome-192x192-6331911b35ae75f9e031df7d5b3cdd6ebd746e6ce29e139b33896c5b162d6e00.png')}}">
  <!---->
   
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
<!---->
    <script src="{{asset('js/app.js')}} defer"></script>
    <script src="{{asset('js/application-33c3ffb37027f82f32b1.chunk.js')}}"></script>   
    <script src="{{asset('js/bootstrap.js')}} defer" ></script>
    <script src="{{asset('js/runtime~application-006109b2f6553db0346e.js')}}"></script>
    <script src="{{asset('js/vendors~application-ab9132ce4363dc9f8e61.chunk.js')}}"></script>   

    <script>




        let url = window.location.href;
 
        let newUrl =url.split('/');
        let id = newUrl[newUrl.length-1]
 
 
 
 
        let ayatList = document.querySelector('.ayat');
 
 function getSurah(){
     fetch(`https://api.quran.sutanlab.id/surah/${id}`)
     .then(res=>res.json())
     .then(data=>{
 
             let verses = data.data.verses ;
             console.log(verses)
             console.log(data.data)
             const thai =[];
             // console.log(verses[1].text.arab)
 
             let ayats = "";
 
             for (let index = 0; index < verses.length; index++) {
                 ayats +=
                         `
 
                         <li>${verses[index].number.inSurah}  ${verses[index].text.arab} </li>
                         <audio controls>
                             <source src="${verses[index].audio.primary}" type="audio/ogg">
 
                             Your browser does not support the audio element.
                         </audio>
 
                         <br>
                         <br>
                         <br>
 
                         `
                         ayatList.innerHTML=ayats;
 
             }
                 
 
 
 
 
 
         }
 
     )
 }
 
 getSurah()
 
 
 
 
 
 
 
     </script>
 
  

   
 <!--   
    <script src="https://cdn.qurancdn.com/packs/js/application-33c3ffb37027f82f32b1.chunk.js" data-turbolinks-track="reload" defer="defer"></script>

    <script src="https://cdn.qurancdn.com/packs/js/vendors~application-ab9132ce4363dc9f8e61.chunk.js" data-turbolinks-track="reload" defer="defer"></script>

    <script src="https://cdn.qurancdn.com/packs/js/runtime~application-006109b2f6553db0346e.js" data-turbolinks-track="reload" defer="defer"></script>

    <link rel="stylesheet" media="all" href="https://cdn.qurancdn.com/packs/css/application-450f3475.chunk.css" data-turbolinks-track="reload" />
    
    <link rel="stylesheet" media="all" href="https://cdn.qurancdn.com/assets/font-faces-4feb8ddb57ccf613e1a4a6447a5326bac4e67e8c74bbf906dc218788ace3bb38.css" data-turbolinks-track="reload" />
    -->

</head>

<body class="home show lang-en" id="home-show" data-controller="setting spinner">
 








    <div class="header header--border">
      <div class="container header-inner">
          <div class="header-inner__firstpart">
              <div class="header-inner__firstpart__menu">



              
                  <!-- TODO add hamburger to fonts -->



                 


                  <img id="site-menu--trigger" class="sidebar-btns" alt="quran.com menu" src="images/icon/hamburger-b328bd84b5f4e6621c239ea54e3511632642ebf56db943aa8b04cce4af6e6f7d.svg" />
              </div>

              <a class="logo" href="/index">
      <strong style="font-weight: bold">Quran</strong>.com</a></div>

   






















      
          <div class="header-theme-switch">
              <div class="theme-language">
                  <div class="language-wrapper" data-controller="choose-locales">
                      <select class="language" name="locale" id="language">
    <option value="en"
            selected>
      English
    </option>
    <option value="ur"
            >
      اردو
    </option>
    <option value="ar"
            >
      العربية
    </option>
    <option value="bn"
            >
      বাংলা
    </option>
    <option value="fa"
            >
      فارسی
    </option>
    <option value="fr"
            >
      Français
    </option>
    <option value="id"
            >
      Indonesia
    </option>
    <option value="it"
            >
      Inglese
    </option>
    <option value="nl"
            >
      Dutch
    </option>
    <option value="pt"
            >
      Português
    </option>
    <option value="sq"
            >
      Shqip
    </option>
    <option value="th"
            >
      ภาษาไทย
    </option>
    <option value="tr"
            >
      Türkçe
    </option>
</select>
                  </div>

                  <div class="theme-switch" data-controller="theme">
                      <div class="theme-switch__buttons">
                          <a class="theme-switch__button dark" data-theme="dark"></a>
                          <a class="theme-switch__button light" data-theme="light"></a>
                      </div>

                      <div class="theme-switch__labels">
                          <p class="theme-switch__label">Mode</p>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>

  <div class="menus hidden" id=menus-wrapper>


      <div class="menus__right-tab hidden side-menu" data-controller="menu" data-trigger="#site-menu--trigger" data-menu=".site-menu">
          <div class="site-menu">
              <div class="site-menu__header">
                  <p class="text text--black text--large2 text--semibold">Menu</p>
                  <div id="close-menu" class="icon-x site-menu__icon-x"></div>
              </div>

              <div class="theme-language">
                  <div class="language-wrapper" data-controller="choose-locales">
                      <select class="language" name="locale" id="language">
    <option value="en"
            selected>
      English
    </option>
    <option value="ur"
            >
      اردو
    </option>
    <option value="ar"
            >
      العربية
    </option>
    <option value="bn"
            >
      বাংলা
    </option>
    <option value="fa"
            >
      فارسی
    </option>
    <option value="fr"
            >
      Français
    </option>
    <option value="id"
            >
      Indonesia
    </option>
    <option value="it"
            >
      Inglese
    </option>
    <option value="nl"
            >
      Dutch
    </option>
    <option value="pt"
            >
      Português
    </option>
    <option value="sq"
            >
      Shqip
    </option>
    <option value="th"
            >
      ภาษาไทย
    </option>
    <option value="tr"
            >
      Türkçe
    </option>
</select>
                  </div>

                  <div class="theme-switch" data-controller="theme">
                      <div class="theme-switch__buttons">
                          <a class="theme-switch__button dark" data-theme="dark"></a>
                          <a class="theme-switch__button light" data-theme="light"></a>
                      </div>

                      <div class="theme-switch__labels">
                          <p class="theme-switch__label">Mode</p>
                      </div>
                  </div>

              </div>

              <div class="site-menu__items">
                  <div class="menu-item">
                      <a class="menu-item__link" href="/">
          <span class="quran-icon icon-home"></span>
          <p class="text text--grey text--large text--semibold">
            <span class='en '>Home</span>
          </p>
</a> </div>

                  <div class="menu-item">
                      <a class="menu-item__link" href="/apps">
          <span class="quran-icon icon-mobile"></span>
          <p class="text text--grey text--large text--semibold">
            <span class='en '>Mobile Apps</span>
          </p>
</a> </div>

                  <div class="menu-item">
                      <a class="menu-item__link" href="/donations">
          <span class="quran-icon icon-contribute"></span>
          <p class="text text--grey text--large text--semibold">
            <span class='en '>Donations</span>
          </p>
</a> </div>

                  <div class="menu-item">
                      <a class="menu-item__link" href="/about-us">
          <span class="quran-icon icon-about"></span>
          <p class="text text--grey text--large text--semibold">
            <span class='en '>About us</span>
          </p>
</a> </div>

                  <div class="menu-item">
                      <a class="menu-item__link" data-controller="ajax-modal" data-url="/popups/feedback" href="#_">
          <span class="quran-icon icon-help"></span>
          <p class="text text--grey text--large text--semibold">
            Feedback
          </p>
</a> </div>

                  <div class="menu-item">
                      <a class="menu-item__link" href="/support">
          <span class="quran-icon icon-help"></span>
          <p class="text text--grey text--large text--semibold">
            <span class='en '>Help</span></p></a></div>


                  <div class="menu-item">
                      <a class="menu-item__link" href="/developers">
          <span class="quran-icon icon-dev"></span>
          <p class="text text--grey text--large text--semibold">
            <span class='en '>Developers</span></p></a></div>

                  <div class="menu-item">
                      <a class="menu-item__link" href="/privacy">
          <span class="quran-icon icon-about"></span>
          <p class="text text--grey text--large text--semibold">
            <span class='en '>Privacy</span></p></a></div></div>

              <div class="site-menu__sites">
                  <p class="text text--large2 text--black text--semibold">
                      <span class='en '>Related Sites</span>
                  </p>

                  <div class="menu-item">
                      <a class="menu-item__link" href="https://quranicaudio.com/" rel="noopener">
                          <p class="text text--grey text--large text--semibold">Quranaudio.com</p>
                      </a>
                  </div>

                  <div class="menu-item">
                      <a class="menu-item__link" href="https://sunnah.com/" rel="noopener">
                          <p class="text text--grey text--large text--semibold">Sunnah.com</p>
                      </a>
                  </div>

                  <div class="menu-item">
                      <a class="menu-item__link" href="https://salah.com/" rel="noopener">
                          <p class="text text--grey text--large text--semibold">Salah.com</p>
                      </a>
                  </div>

                  <div class="menu-item">
                      <a class="menu-item__link" href="https://legacy.quran.com/" rel="noopener">
                          <p class="text text--grey text--large text--semibold">Legacy Quran.com</p>
                      </a>
                  </div>

                  <div class="menu-item">
                      <a class="menu-item__link" href="https://corpus.quran.com/wordbyword.jsp" rel="noopener">
                          <p class="text text--grey text--large text--semibold">Corpus.Quran.com</p>
                      </a>
                  </div>

                  <div class="menu-item">
                      <a class="menu-item__link" href="https://quranreflect.com" target="_blank" rel="noopener">
                          <p class="text text--grey text--large text--semibold">QuranReflect.com</p>
                      </a>
                  </div>
              </div>

          </div>
      </div>
  </div>



















<!-- main start -->

@yield('page-content')

<!-- main end -->

    <!-- Starting of the footer-->

    <div class="footer">
      <div class="container">
          <div class="content-page">
              <div class="footer-links">
                  <div>
                      <h5><span class='en '>Navigate</span></h5>
                      <a href="/about-us"><span class='en '>About us</span></a>
                      <a href="#"><span class='en '>Donations</span></a>
                      <a href="/support"><span class='en '>Help</span></a>
                      <a data-controller="ajax-modal" data-url="/popups/feedback" href="#_"><span class='en '>Feedback</span></a>
                      <a href="/developers"><span class='en '>Developers</span></a>
                      <a href="/apps"><span class='en '>Download</span></a>
                      <a href="/privacy"><span class='en '>Privacy</span></a>
                  </div>

                  <div>
                      <h5><span class='en '>Useful sites</span></h5>
                      <a href="#" target="_blank" rel="noopener">Quranicaudio.com</a>
                      <a href="#" target="_blank" rel="noopener">Salah.com</a>
                      <a href="#" target="_blank" rel="noopener">Sunnah.com</a>
                      <a href="#" target="_blank" rel="noopener"> Legacy Quran.com</a>
                      <a href="#" target="_blank" rel="noopener">Corpus.Quran.com</a>
                      <a href="#" target="_blank" rel="noopener">QuranReflect.com</a>
                  </div>
                  <div>
                      <h5><span class='en '>Other links</span></h5>
                      <a href="#" target="_blank" rel="noopener"> We're hiring</a>
                      <a href="#" target="_blank">Sitemap</a>
                      <a href="/surah-ya-sin">Surah Yaseen (يس)</a>
                      <a href="/ayatul-kursi">Ayat Al-Kursi (آية الكرسي)</a>
                      <a href="/surah-al-kahf">Surah Al-Kahf (الكهف)</a>
                  </div>

                  <div style="max-width: 345px;">
                      <p>
                          <span class='en '>القرآن الكريم هو صدقة جارية. نأمل أن نسهل على الجميع قراءة القرآن الكريم ودراسته وتعلمه. القرآن الكريم له أسماء عديدة منها القرآن الكريم والكتاب والفرقان والموؤثة والذكر والنور.</span>
                      </p>

                      <p>
                          &copy; 2021
                          <a href="#" style="display: inline;">Quran.com</a>. <span class='en '>All Rights Reserved</span>
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Ending of the footer-->

</body>

</html>