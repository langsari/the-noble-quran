

<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container py-3">
        <a class="navbar-brand" data-aos="fade-down" href="/">
            
                <img src="{{ ('img/bg-img.png') }}" width="30" height="30" alt=""> The-Nobal-Quran
            
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <a class="nav-link me-5 {{ request()->is('/') ? ' active' : '' }}" data-aos="fade-down"
                    data-aos-duration="1000" href="/">Home</a>
                <a class="nav-link me-5 {{ request()->is('surah') ? ' active' : '' }}" data-aos="fade-down"
                    data-aos-duration="1500" href="/surah">List surah</a>
                <a class="nav-link me-5 {{ request()->is('jadwalSholat') ? ' active' : '' }}" data-aos="fade-down"
                    data-aos-duration="2000" href="/jadwalSholat">Jadwal Sholat</a>
            
                <a class="nav-link me-5 text-bold text-danger {{ request()->is('about') ? ' active' : '' }}" data-aos="fade-down"
                    data-aos-duration="1500" href="/about">About</a>
                    

    
                        <input type="search" class=" rounded" placeholder="Search" aria-label="Search"
                          aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                          <i class="fas fa-search"></i>
                        </span>
                      
                     
            </div>
        </div>
    </div>
</nav>



