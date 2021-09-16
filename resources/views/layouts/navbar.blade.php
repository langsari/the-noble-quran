<nav class="navbar navbar-expand-lg navbar-light bg-transparant">
    <div class="container py-3">
        <a class="navbar-brand" data-aos="fade-down" href="/">
            <h5>
                The-Nobal-Quran
            </h5>
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
                <a class="nav-link" data-aos="fade-down" data-aos-duration="2500" href="#">About</a>
            </div>
        </div>
    </div>
</nav>