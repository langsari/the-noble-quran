<nav class="navbar navbar-expand-lg navbar-light bg-transparant">
    <div  class="container py-3">
        <a class="navbar-brand" data-aos="fade-down" href="/">
            <h5 style="color: white;">
              المصحف الشريف
            </h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a style="color: white;" class="nav-link me-5 {{ request()->is('/') ? ' active' : '' }}" data-aos="fade-down"
                    data-aos-duration="1000" href="/">Home</a>
                <a style="color: white;" class="nav-link me-5 {{ request()->is('surah') ? ' active' : '' }}" data-aos="fade-down"
                    data-aos-duration="1500" href="/#">List surah</a>
                <a style="color: white;" class="nav-link me-5 {{ request()->is('jadwalSholat') ? ' active' : '' }}" data-aos="fade-down"
                    data-aos-duration="2000" href="/time-pray">Time Pray</a>
                <a style="color: white;" class="nav-link" data-aos="fade-down" data-aos-duration="2500" href="#">About us</a>
            </div>
        </div>
    </div>
</nav>