 <!-- Navigation-->


 
 <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-dark" id="mainNav">
    <div class="container px-4 px-lg-5">


        <a class="navbar-brand" href="/"><img src="{{ ('img/icons/favicon-170d7b1c223954449682042ea88d28d5f5668e5a5244507d6807ba635645f766.ico') }}" width="30" height="30" alt="">The-Nobal-Quran</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        
        
        
        
        <div class="navbar-nav">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">


                <li class="nav-item"><a class="nav-link me-3 {{ request()->is('/') ? ' active' : '' }}" data-aos="fade-down"
                    data-aos-duration="1000" href="/">Home</a></li>



                <li class="nav-item"><a class="nav-link me-2 " href="/quran">Quran</a></li>


              
                <li class="nav-item"><a class="nav-link me-3 " href="/salawat">Salawat</a></li>


                <li class="nav-item"><a class="nav-link me-2" href="/hadith">Hadith</a></li>


                <li class="nav-item"><a class="nav-link me-3" href="/about">About</a></li>


                <li> <select class="language" name="locale" id="language">
                    <option value="en"selected>English</option>
                    <option value="ur">  اردو</option>
                    <option value="ar">العربية</option>
                    <option value="bn"> বাংলা</option>
                    <option value="fa">فارسی</option>
                    <option value="fr">Français</option>
                    <option value="id">Indonesia</option>
                    <option value="it">Inglese</option>
                    <option value="nl">Dutch</option>
                    <option value="pt">Português</option>
                    <option value="sq">Shqip</option>
                    <option value="th">ภาษาไทย</option>
                    <option value="tr">Türkçe</option>
                    </select>
                </li>
            </ul>
            
              {{-- Start Display Search Surah --}}




              
              <form class="pos-rel">

                <input id="input_search_surah" class="form-control" type="search" aria-label="Search" placeholder="Enter Surah Name">
                <div class="search-result-box text-center">

                    <div id="list_surah" class="text-center">
                    </div>
                </div>
            </form>

            {{-- End Search Surah --}}


            </div>
        </div>
    </div>
</nav>