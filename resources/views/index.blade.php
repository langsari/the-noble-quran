@extends('layouts.header-footer')





@section('page-content')
<main>
    <section class="hidden" data-controller="announcement" data-id="jobs">
        <div id=notification-alert>
            <div class="container d-none d-sm-block pt-2">
                <div class="flexx align-items-center flex-wrap">
                    <div class="text--grey">
                        <p class="m-0" style="font-weight: bold">
                            We are hiring product designers and software engineers!
                        </p>
  
                        <p class="m-0">
                            Join us in building the next version of Quran.com.
                        </p>
                    </div>
  
                    <div>
                        <a class="btn btn-primary mr-2 cta" data-controller="track" data-name="jobs" href="https://www.notion.so/QDC-Job-Board-a4478217b79c465ea1d6670ae4e0d645" target="_blank" data-category="apply">
        View positions
      </a>
  
                        <a class="close text--grey cursor-pointer" data-controller="track" data-name="jobs" style="cursor: pointer" data-category="dismiss">
        Dismiss
      </a>
                    </div>
                </div>
            </div>
  
            <div class="container d-block d-sm-none">
                <div class="row">
                    <div class="col-12">
                        <div class="flexx flexx-center">
                            <div style="font-weight: bold">
                                We are hiring!
                            </div>
  
                            <div style="margin-left: auto">
                                <a class="btn btn-primary mr-1 cta" data-controller="track" href="https://www.notion.so/QDC-Job-Board-a4478217b79c465ea1d6670ae4e0d645" target="_blank">
            View positions
          </a>
  
                                <a class="btn close text--grey cursor-pointer" data-controller="track" data-name="jobs" style="cursor: pointer">
            Dismiss
          </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  
    <div class="container content-page">
        <div class="content-page__center col">
            <img class="quran-logo" alt="quran.com logo" src="https://cdn.qurancdn.com/assets/quran-logo-f5d0f128f5aa2a1949a3157d96bbd04a184e4a4ee0e05d464a3f2ae8d0bdcbdf.png" />
  
            <h1 class="black space-y-32">
                <span class='en '>القران الكريم</span>
            </h1>
  
            <div class="space-y-8">
                <div class="input-wrapper large">
  
                    <form action="/search" data-controller="search-form" data-expand=>
                        <input type="search" name="query" value="" placeholder="Search &quot;Noah&quot;" autocapitalize="none" autocomplete="off" autocorrect="off" spellcheck="false" aria-label="Search" aria-haspopup="false" role="combobox" aria-autocomplete="list" />
                        <button type="submit" class="quran-icon icon-search">
  </button>
  
  
  
  
  
                        <div id="suggestions"></div>
                    </form>
  
                </div>
            </div>
        </div>
  
        <div class="container space-y-32">
            <p class="no-margin">
                <span class='en '>Popular Searches</span>
            </p>
  
            <div class="popular-searches">
                <div>
                    <a class="btn btn--lightgreen btn--large" data-controller="track" data-name="popular-search" data-category="/ayatul-kursi" href="/ayatul-kursi"><span class='en '>Ayatul Kursi</span></a>
                    <a class="btn btn--lightgreen btn--large" data-controller="track" data-name="popular-search" data-category="/surah-ya-sin" href="/surah-ya-sin"><span class='en '>Surah Yaseen</span></a>
                    <a class="btn btn--lightgreen btn--large" data-controller="track" data-name="popular-search" data-category="/surah-al-mulk" href="/surah-al-mulk"><span class='en '>Surah Al Mulk</span></a>
                    <a class="btn btn--lightgreen btn--large" data-controller="track" data-name="popular-search" data-category="/surah-ar-rahman" href="/surah-ar-rahman"><span class='en '>Surah Ar-Rahman</span></a>
                    <a class="btn btn--lightgreen btn--large" data-controller="track" data-name="popular-search" data-category="/surah-al-waqiah" href="/surah-al-waqiah"><span class='en '>Surah Al Waqi'ah</span></a>
                    <a class="btn btn--lightgreen btn--large" data-controller="track" data-name="popular-search" data-category="/surah-al-kahf" href="/surah-al-kahf"><span class='en '>Surah Al Kahf</span></a>
                    <a class="btn btn--lightgreen btn--large" data-controller="track" data-name="popular-search" data-category="/surah-al-muzzammil" href="/surah-al-muzzammil"><span class='en '>Surah Al Muzzammil</span></a>
                </div>
            </div>
        </div>
  
        <div class="container space-y-32 hidden" data-controller="bookmarks">
            <p class="no-margin">
                <span class='en '>Your Bookmarks</span>
            </p>
  
            <div class="popular-searches">
                <div id=bookmark-list>
                </div>
            </div>
        </div>
  
  
        <div class="container content-page__center col">
            <div class="">
                <div class="tabs" data-controller="tabs">
                    <a id="tab--surah" class="tabs__item tabs__item--selected show-surah" data-target="#surah-list" data-tab="home-tabs" role="tab" aria-controls="surah-list" aria-selected="true">
      <span class='en '>Show Surah</span>
    </a>
  
                    <a id="tab--juz" class="tabs__item show-juz" data-target="#juz-list" data-tab="home-tabs" role="tab" aria-controls="juz-list" aria-selected="false">
      <span class='en '>Show Juz</span>
    </a>
                </div>
            </div>
        </div>
    </div>
  
    <div class="container space-y-32">
        <div class="surah-section" data-tab-group="home-tabs" id="surah-list">
            <a data-controller="track" data-name="chapters" data-category="1-Al-Fatihah" href="/1">
                <div class="surah-card">
                    <div class="surah-card__number">
                        1
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Fatihah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Opener</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah1"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                    <div class="surah-card__number">
                        2
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Baqarah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Cow</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah2"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="3-Ali &#39;Imran" href="/3">
                <div class="surah-card">
                    <div class="surah-card__number">
                        3
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ali &#39;Imran</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Family of Imran</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah3"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="4-An-Nisa" href="/4">
                <div class="surah-card">
                    <div class="surah-card__number">
                        4
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>An-Nisa</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Women</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah4"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="5-Al-Ma&#39;idah" href="/5">
                <div class="surah-card">
                    <div class="surah-card__number">
                        5
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Ma&#39;idah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Table Spread</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah5"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="6-Al-An&#39;am" href="/6">
                <div class="surah-card">
                    <div class="surah-card__number">
                        6
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-An&#39;am</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Cattle</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah6"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="7-Al-A&#39;raf" href="/7">
                <div class="surah-card">
                    <div class="surah-card__number">
                        7
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-A&#39;raf</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Heights</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah7"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="8-Al-Anfal" href="/8">
                <div class="surah-card">
                    <div class="surah-card__number">
                        8
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Anfal</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Spoils of War</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah8"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="9-At-Tawbah" href="/9">
                <div class="surah-card">
                    <div class="surah-card__number">
                        9
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>At-Tawbah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Repentance</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah9"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="10-Yunus" href="/10">
                <div class="surah-card">
                    <div class="surah-card__number">
                        10
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Yunus</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Jonah</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah10"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="11-Hud" href="/11">
                <div class="surah-card">
                    <div class="surah-card__number">
                        11
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Hud</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Hud</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah11"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="12-Yusuf" href="/12">
                <div class="surah-card">
                    <div class="surah-card__number">
                        12
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Yusuf</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Joseph</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah12"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="13-Ar-Ra&#39;d" href="/13">
                <div class="surah-card">
                    <div class="surah-card__number">
                        13
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ar-Ra&#39;d</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Thunder</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah13"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="14-Ibrahim" href="/14">
                <div class="surah-card">
                    <div class="surah-card__number">
                        14
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ibrahim</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Abraham</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah14"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="15-Al-Hijr" href="/15">
                <div class="surah-card">
                    <div class="surah-card__number">
                        15
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Hijr</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Rocky Tract</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah15"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="16-An-Nahl" href="/16">
                <div class="surah-card">
                    <div class="surah-card__number">
                        16
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>An-Nahl</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Bee</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah16"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="17-Al-Isra" href="/17">
                <div class="surah-card">
                    <div class="surah-card__number">
                        17
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Isra</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Night Journey</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah17"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="18-Al-Kahf" href="/18">
                <div class="surah-card">
                    <div class="surah-card__number">
                        18
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Kahf</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Cave</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah18"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="19-Maryam" href="/19">
                <div class="surah-card">
                    <div class="surah-card__number">
                        19
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Maryam</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Mary</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah19"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="20-Taha" href="/20">
                <div class="surah-card">
                    <div class="surah-card__number">
                        20
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Taha</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Ta-Ha</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah20"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="21-Al-Anbya" href="/21">
                <div class="surah-card">
                    <div class="surah-card__number">
                        21
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Anbya</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Prophets</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah21"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="22-Al-Hajj" href="/22">
                <div class="surah-card">
                    <div class="surah-card__number">
                        22
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Hajj</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Pilgrimage</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah22"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="23-Al-Mu&#39;minun" href="/23">
                <div class="surah-card">
                    <div class="surah-card__number">
                        23
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Mu&#39;minun</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Believers</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah23"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="24-An-Nur" href="/24">
                <div class="surah-card">
                    <div class="surah-card__number">
                        24
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>An-Nur</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Light</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah24"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="25-Al-Furqan" href="/25">
                <div class="surah-card">
                    <div class="surah-card__number">
                        25
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Furqan</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Criterion</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah25"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="26-Ash-Shu&#39;ara" href="/26">
                <div class="surah-card">
                    <div class="surah-card__number">
                        26
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ash-Shu&#39;ara</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Poets</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah26"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="27-An-Naml" href="/27">
                <div class="surah-card">
                    <div class="surah-card__number">
                        27
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>An-Naml</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Ant</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah27"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="28-Al-Qasas" href="/28">
                <div class="surah-card">
                    <div class="surah-card__number">
                        28
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Qasas</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Stories</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah28"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="29-Al-&#39;Ankabut" href="/29">
                <div class="surah-card">
                    <div class="surah-card__number">
                        29
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-&#39;Ankabut</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Spider</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah29"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="30-Ar-Rum" href="/30">
                <div class="surah-card">
                    <div class="surah-card__number">
                        30
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ar-Rum</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Romans</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah30"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="31-Luqman" href="/31">
                <div class="surah-card">
                    <div class="surah-card__number">
                        31
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Luqman</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Luqman</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah31"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="32-As-Sajdah" href="/32">
                <div class="surah-card">
                    <div class="surah-card__number">
                        32
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>As-Sajdah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Prostration</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah32"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="33-Al-Ahzab" href="/33">
                <div class="surah-card">
                    <div class="surah-card__number">
                        33
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Ahzab</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Combined Forces</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah33"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="34-Saba" href="/34">
                <div class="surah-card">
                    <div class="surah-card__number">
                        34
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Saba</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Sheba</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah34"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="35-Fatir" href="/35">
                <div class="surah-card">
                    <div class="surah-card__number">
                        35
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Fatir</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Originator</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah35"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="36-Ya-Sin" href="/36">
                <div class="surah-card">
                    <div class="surah-card__number">
                        36
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ya-Sin</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Ya Sin</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah36"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="37-As-Saffat" href="/37">
                <div class="surah-card">
                    <div class="surah-card__number">
                        37
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>As-Saffat</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Those who set the Ranks</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah37"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="38-Sad" href="/38">
                <div class="surah-card">
                    <div class="surah-card__number">
                        38
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Sad</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Letter &quot;Saad&quot;</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah38"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="39-Az-Zumar" href="/39">
                <div class="surah-card">
                    <div class="surah-card__number">
                        39
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Az-Zumar</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Troops</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah39"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="40-Ghafir" href="/40">
                <div class="surah-card">
                    <div class="surah-card__number">
                        40
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ghafir</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Forgiver</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah40"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="41-Fussilat" href="/41">
                <div class="surah-card">
                    <div class="surah-card__number">
                        41
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Fussilat</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Explained in Detail</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah41"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="42-Ash-Shuraa" href="/42">
                <div class="surah-card">
                    <div class="surah-card__number">
                        42
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ash-Shuraa</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Consultation</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah42"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="43-Az-Zukhruf" href="/43">
                <div class="surah-card">
                    <div class="surah-card__number">
                        43
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Az-Zukhruf</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Ornaments of Gold</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah43"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="44-Ad-Dukhan" href="/44">
                <div class="surah-card">
                    <div class="surah-card__number">
                        44
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ad-Dukhan</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Smoke</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah44"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="45-Al-Jathiyah" href="/45">
                <div class="surah-card">
                    <div class="surah-card__number">
                        45
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Jathiyah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Crouching</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah45"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="46-Al-Ahqaf" href="/46">
                <div class="surah-card">
                    <div class="surah-card__number">
                        46
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Ahqaf</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Wind-Curved Sandhills</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah46"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="47-Muhammad" href="/47">
                <div class="surah-card">
                    <div class="surah-card__number">
                        47
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Muhammad</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Muhammad</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah47"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="48-Al-Fath" href="/48">
                <div class="surah-card">
                    <div class="surah-card__number">
                        48
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Fath</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Victory</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah48"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="49-Al-Hujurat" href="/49">
                <div class="surah-card">
                    <div class="surah-card__number">
                        49
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Hujurat</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Rooms</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah49"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="50-Qaf" href="/50">
                <div class="surah-card">
                    <div class="surah-card__number">
                        50
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Qaf</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Letter &quot;Qaf&quot;</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah50"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="51-Adh-Dhariyat" href="/51">
                <div class="surah-card">
                    <div class="surah-card__number">
                        51
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Adh-Dhariyat</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Winnowing Winds</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah51"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="52-At-Tur" href="/52">
                <div class="surah-card">
                    <div class="surah-card__number">
                        52
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>At-Tur</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Mount</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah52"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="53-An-Najm" href="/53">
                <div class="surah-card">
                    <div class="surah-card__number">
                        53
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>An-Najm</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Star</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah53"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="54-Al-Qamar" href="/54">
                <div class="surah-card">
                    <div class="surah-card__number">
                        54
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Qamar</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Moon</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah54"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="55-Ar-Rahman" href="/55">
                <div class="surah-card">
                    <div class="surah-card__number">
                        55
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ar-Rahman</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Beneficent</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah55"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="56-Al-Waqi&#39;ah" href="/56">
                <div class="surah-card">
                    <div class="surah-card__number">
                        56
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Waqi&#39;ah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Inevitable</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah56"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="57-Al-Hadid" href="/57">
                <div class="surah-card">
                    <div class="surah-card__number">
                        57
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Hadid</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Iron</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah57"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="58-Al-Mujadila" href="/58">
                <div class="surah-card">
                    <div class="surah-card__number">
                        58
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Mujadila</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Pleading Woman</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah58"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="59-Al-Hashr" href="/59">
                <div class="surah-card">
                    <div class="surah-card__number">
                        59
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Hashr</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Exile</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah59"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="60-Al-Mumtahanah" href="/60">
                <div class="surah-card">
                    <div class="surah-card__number">
                        60
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Mumtahanah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">She that is to be examined</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah60"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="61-As-Saf" href="/61">
                <div class="surah-card">
                    <div class="surah-card__number">
                        61
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>As-Saf</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Ranks</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah61"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="62-Al-Jumu&#39;ah" href="/62">
                <div class="surah-card">
                    <div class="surah-card__number">
                        62
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Jumu&#39;ah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Congregation, Friday</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah62"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="63-Al-Munafiqun" href="/63">
                <div class="surah-card">
                    <div class="surah-card__number">
                        63
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Munafiqun</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Hypocrites</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah63"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="64-At-Taghabun" href="/64">
                <div class="surah-card">
                    <div class="surah-card__number">
                        64
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>At-Taghabun</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Mutual Disillusion</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah64"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="65-At-Talaq" href="/65">
                <div class="surah-card">
                    <div class="surah-card__number">
                        65
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>At-Talaq</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Divorce</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah65"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="66-At-Tahrim" href="/66">
                <div class="surah-card">
                    <div class="surah-card__number">
                        66
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>At-Tahrim</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Prohibition</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah66"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="67-Al-Mulk" href="/67">
                <div class="surah-card">
                    <div class="surah-card__number">
                        67
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Mulk</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Sovereignty</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah67"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="68-Al-Qalam" href="/68">
                <div class="surah-card">
                    <div class="surah-card__number">
                        68
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Qalam</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Pen</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah68"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="69-Al-Haqqah" href="/69">
                <div class="surah-card">
                    <div class="surah-card__number">
                        69
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Haqqah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Reality</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah69"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="70-Al-Ma&#39;arij" href="/70">
                <div class="surah-card">
                    <div class="surah-card__number">
                        70
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Ma&#39;arij</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Ascending Stairways</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah70"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="71-Nuh" href="/71">
                <div class="surah-card">
                    <div class="surah-card__number">
                        71
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Nuh</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Noah</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah71"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="72-Al-Jinn" href="/72">
                <div class="surah-card">
                    <div class="surah-card__number">
                        72
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Jinn</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Jinn</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah72"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="73-Al-Muzzammil" href="/73">
                <div class="surah-card">
                    <div class="surah-card__number">
                        73
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Muzzammil</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Enshrouded One</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah73"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="74-Al-Muddaththir" href="/74">
                <div class="surah-card">
                    <div class="surah-card__number">
                        74
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Muddaththir</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Cloaked One</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah74"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="75-Al-Qiyamah" href="/75">
                <div class="surah-card">
                    <div class="surah-card__number">
                        75
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Qiyamah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Resurrection</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah75"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="76-Al-Insan" href="/76">
                <div class="surah-card">
                    <div class="surah-card__number">
                        76
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Insan</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Man</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah76"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="77-Al-Mursalat" href="/77">
                <div class="surah-card">
                    <div class="surah-card__number">
                        77
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Mursalat</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Emissaries</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah77"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="78-An-Naba" href="/78">
                <div class="surah-card">
                    <div class="surah-card__number">
                        78
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>An-Naba</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Tidings</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah78"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="79-An-Nazi&#39;at" href="/79">
                <div class="surah-card">
                    <div class="surah-card__number">
                        79
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>An-Nazi&#39;at</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Those who drag forth</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah79"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="80-&#39;Abasa" href="/80">
                <div class="surah-card">
                    <div class="surah-card__number">
                        80
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>&#39;Abasa</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">He Frowned</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah80"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="81-At-Takwir" href="/81">
                <div class="surah-card">
                    <div class="surah-card__number">
                        81
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>At-Takwir</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Overthrowing</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah81"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="82-Al-Infitar" href="/82">
                <div class="surah-card">
                    <div class="surah-card__number">
                        82
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Infitar</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Cleaving</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah82"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="83-Al-Mutaffifin" href="/83">
                <div class="surah-card">
                    <div class="surah-card__number">
                        83
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Mutaffifin</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Defrauding</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah83"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="84-Al-Inshiqaq" href="/84">
                <div class="surah-card">
                    <div class="surah-card__number">
                        84
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Inshiqaq</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Sundering</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah84"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="85-Al-Buruj" href="/85">
                <div class="surah-card">
                    <div class="surah-card__number">
                        85
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Buruj</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Mansions of the Stars</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah85"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="86-At-Tariq" href="/86">
                <div class="surah-card">
                    <div class="surah-card__number">
                        86
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>At-Tariq</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Nightcommer</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah86"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="87-Al-A&#39;la" href="/87">
                <div class="surah-card">
                    <div class="surah-card__number">
                        87
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-A&#39;la</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Most High</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah87"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="88-Al-Ghashiyah" href="/88">
                <div class="surah-card">
                    <div class="surah-card__number">
                        88
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Ghashiyah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Overwhelming</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah88"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="89-Al-Fajr" href="/89">
                <div class="surah-card">
                    <div class="surah-card__number">
                        89
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Fajr</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Dawn</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah89"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="90-Al-Balad" href="/90">
                <div class="surah-card">
                    <div class="surah-card__number">
                        90
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Balad</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The City</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah90"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="91-Ash-Shams" href="/91">
                <div class="surah-card">
                    <div class="surah-card__number">
                        91
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ash-Shams</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Sun</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah91"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="92-Al-Layl" href="/92">
                <div class="surah-card">
                    <div class="surah-card__number">
                        92
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Layl</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Night</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah92"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="93-Ad-Duhaa" href="/93">
                <div class="surah-card">
                    <div class="surah-card__number">
                        93
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ad-Duhaa</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Morning Hours</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah93"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="94-Ash-Sharh" href="/94">
                <div class="surah-card">
                    <div class="surah-card__number">
                        94
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Ash-Sharh</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Relief</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah94"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="95-At-Tin" href="/95">
                <div class="surah-card">
                    <div class="surah-card__number">
                        95
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>At-Tin</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Fig</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah95"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="96-Al-&#39;Alaq" href="/96">
                <div class="surah-card">
                    <div class="surah-card__number">
                        96
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-&#39;Alaq</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Clot</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah96"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="97-Al-Qadr" href="/97">
                <div class="surah-card">
                    <div class="surah-card__number">
                        97
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Qadr</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Power</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah97"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="98-Al-Bayyinah" href="/98">
                <div class="surah-card">
                    <div class="surah-card__number">
                        98
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Bayyinah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Clear Proof</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah98"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="99-Az-Zalzalah" href="/99">
                <div class="surah-card">
                    <div class="surah-card__number">
                        99
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Az-Zalzalah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Earthquake</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah99"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="100-Al-&#39;Adiyat" href="/100">
                <div class="surah-card">
                    <div class="surah-card__number">
                        100
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-&#39;Adiyat</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Courser</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah100"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="101-Al-Qari&#39;ah" href="/101">
                <div class="surah-card">
                    <div class="surah-card__number">
                        101
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Qari&#39;ah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Calamity</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah101"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="102-At-Takathur" href="/102">
                <div class="surah-card">
                    <div class="surah-card__number">
                        102
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>At-Takathur</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Rivalry in world increase</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah102"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="103-Al-&#39;Asr" href="/103">
                <div class="surah-card">
                    <div class="surah-card__number">
                        103
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-&#39;Asr</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Declining Day</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah103"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="104-Al-Humazah" href="/104">
                <div class="surah-card">
                    <div class="surah-card__number">
                        104
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Humazah</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Traducer</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah104"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="105-Al-Fil" href="/105">
                <div class="surah-card">
                    <div class="surah-card__number">
                        105
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Fil</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Elephant</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah105"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="106-Quraysh" href="/106">
                <div class="surah-card">
                    <div class="surah-card__number">
                        106
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Quraysh</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Quraysh</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah106"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="107-Al-Ma&#39;un" href="/107">
                <div class="surah-card">
                    <div class="surah-card__number">
                        107
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Ma&#39;un</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Small kindnesses</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah107"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="108-Al-Kawthar" href="/108">
                <div class="surah-card">
                    <div class="surah-card__number">
                        108
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Kawthar</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Abundance</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah108"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="109-Al-Kafirun" href="/109">
                <div class="surah-card">
                    <div class="surah-card__number">
                        109
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Kafirun</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Disbelievers</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah109"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="110-An-Nasr" href="/110">
                <div class="surah-card">
                    <div class="surah-card__number">
                        110
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>An-Nasr</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Divine Support</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah110"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="111-Al-Masad" href="/111">
                <div class="surah-card">
                    <div class="surah-card__number">
                        111
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Masad</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Palm Fiber</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah111"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="112-Al-Ikhlas" href="/112">
                <div class="surah-card">
                    <div class="surah-card__number">
                        112
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Ikhlas</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Sincerity</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah112"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="113-Al-Falaq" href="/113">
                <div class="surah-card">
                    <div class="surah-card__number">
                        113
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>Al-Falaq</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">The Daybreak</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah113"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a data-controller="track" data-name="chapters" data-category="114-An-Nas" href="/114">
                <div class="surah-card">
                    <div class="surah-card__number">
                        114
                    </div>
  
                    <div class="surah-card__text">
                        <div class="surah-card__latin">
                            <h5>An-Nas</h5>
                            <div class="ayah-number-wrapper">
                                <p class="english">Mankind</p>
                            </div>
                        </div>
  
                        <div class="surah-card__arabic">
                            <p>
                                <span class="icon-surah icon-surah114"></span>
                                <span class="icon-surah icon-surah-surah"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
  
        <div class="juz-section hidden" data-tab-group="home-tabs" id="juz-list">
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/1">1</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="1-Al-Fatihah" href="/1/1-7">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Fatihah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-7</p>
                                    <p class="english">The Opener</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah1"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="2-Al-Baqarah" href="/2/1-141">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Baqarah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-141</p>
                                    <p class="english">The Cow</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah2"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/2">2</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="2-Al-Baqarah" href="/2/142-252">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Baqarah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">142-252</p>
                                    <p class="english">The Cow</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah2"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/3">3</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="2-Al-Baqarah" href="/2/253-286">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Baqarah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">253-286</p>
                                    <p class="english">The Cow</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah2"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="3-Ali &#39;Imran" href="/3/1-92">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ali &#39;Imran</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-92</p>
                                    <p class="english">Family of Imran</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah3"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/4">4</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="3-Ali &#39;Imran" href="/3/93-200">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ali &#39;Imran</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">93-200</p>
                                    <p class="english">Family of Imran</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah3"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="4-An-Nisa" href="/4/1-23">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Nisa</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-23</p>
                                    <p class="english">The Women</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah4"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/5">5</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="4-An-Nisa" href="/4/24-147">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Nisa</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">24-147</p>
                                    <p class="english">The Women</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah4"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/6">6</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="4-An-Nisa" href="/4/148-176">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Nisa</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">148-176</p>
                                    <p class="english">The Women</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah4"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="5-Al-Ma&#39;idah" href="/5/1-81">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Ma&#39;idah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-81</p>
                                    <p class="english">The Table Spread</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah5"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/7">7</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="5-Al-Ma&#39;idah" href="/5/82-120">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Ma&#39;idah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">82-120</p>
                                    <p class="english">The Table Spread</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah5"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="6-Al-An&#39;am" href="/6/1-110">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-An&#39;am</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-110</p>
                                    <p class="english">The Cattle</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah6"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/8">8</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="6-Al-An&#39;am" href="/6/111-165">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-An&#39;am</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">111-165</p>
                                    <p class="english">The Cattle</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah6"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="7-Al-A&#39;raf" href="/7/1-87">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-A&#39;raf</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-87</p>
                                    <p class="english">The Heights</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah7"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/9">9</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="7-Al-A&#39;raf" href="/7/88-206">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-A&#39;raf</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">88-206</p>
                                    <p class="english">The Heights</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah7"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="8-Al-Anfal" href="/8/1-40">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Anfal</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-40</p>
                                    <p class="english">The Spoils of War</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah8"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/10">10</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="8-Al-Anfal" href="/8/41-75">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Anfal</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">41-75</p>
                                    <p class="english">The Spoils of War</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah8"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="9-At-Tawbah" href="/9/1-92">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>At-Tawbah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-92</p>
                                    <p class="english">The Repentance</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah9"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/11">11</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="9-At-Tawbah" href="/9/93-129">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>At-Tawbah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">93-129</p>
                                    <p class="english">The Repentance</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah9"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="10-Yunus" href="/10/1-109">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Yunus</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-109</p>
                                    <p class="english">Jonah</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah10"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="11-Hud" href="/11/1-5">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Hud</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-5</p>
                                    <p class="english">Hud</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah11"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/12">12</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="11-Hud" href="/11/6-123">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Hud</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">6-123</p>
                                    <p class="english">Hud</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah11"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="12-Yusuf" href="/12/1-52">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Yusuf</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-52</p>
                                    <p class="english">Joseph</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah12"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/13">13</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="12-Yusuf" href="/12/53-111">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Yusuf</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">53-111</p>
                                    <p class="english">Joseph</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah12"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="13-Ar-Ra&#39;d" href="/13/1-43">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ar-Ra&#39;d</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-43</p>
                                    <p class="english">The Thunder</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah13"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="14-Ibrahim" href="/14/1-52">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ibrahim</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-52</p>
                                    <p class="english">Abraham</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah14"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/14">14</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="15-Al-Hijr" href="/15/1-99">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Hijr</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-99</p>
                                    <p class="english">The Rocky Tract</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah15"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="16-An-Nahl" href="/16/1-128">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Nahl</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-128</p>
                                    <p class="english">The Bee</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah16"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/15">15</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="17-Al-Isra" href="/17/1-111">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Isra</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-111</p>
                                    <p class="english">The Night Journey</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah17"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="18-Al-Kahf" href="/18/1-74">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Kahf</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-74</p>
                                    <p class="english">The Cave</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah18"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/16">16</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="18-Al-Kahf" href="/18/75-110">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Kahf</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">75-110</p>
                                    <p class="english">The Cave</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah18"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="19-Maryam" href="/19/1-98">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Maryam</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-98</p>
                                    <p class="english">Mary</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah19"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="20-Taha" href="/20/1-135">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Taha</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-135</p>
                                    <p class="english">Ta-Ha</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah20"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/17">17</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="21-Al-Anbya" href="/21/1-112">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Anbya</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-112</p>
                                    <p class="english">The Prophets</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah21"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="22-Al-Hajj" href="/22/1-78">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Hajj</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-78</p>
                                    <p class="english">The Pilgrimage</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah22"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/18">18</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="23-Al-Mu&#39;minun" href="/23/1-118">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Mu&#39;minun</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-118</p>
                                    <p class="english">The Believers</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah23"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="24-An-Nur" href="/24/1-64">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Nur</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-64</p>
                                    <p class="english">The Light</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah24"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="25-Al-Furqan" href="/25/1-20">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Furqan</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-20</p>
                                    <p class="english">The Criterion</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah25"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/19">19</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="25-Al-Furqan" href="/25/21-77">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Furqan</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">21-77</p>
                                    <p class="english">The Criterion</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah25"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="26-Ash-Shu&#39;ara" href="/26/1-227">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ash-Shu&#39;ara</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-227</p>
                                    <p class="english">The Poets</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah26"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="27-An-Naml" href="/27/1-55">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Naml</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-55</p>
                                    <p class="english">The Ant</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah27"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/20">20</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="27-An-Naml" href="/27/56-93">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Naml</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">56-93</p>
                                    <p class="english">The Ant</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah27"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="28-Al-Qasas" href="/28/1-88">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Qasas</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-88</p>
                                    <p class="english">The Stories</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah28"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="29-Al-&#39;Ankabut" href="/29/1-45">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-&#39;Ankabut</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-45</p>
                                    <p class="english">The Spider</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah29"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/21">21</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="29-Al-&#39;Ankabut" href="/29/46-69">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-&#39;Ankabut</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">46-69</p>
                                    <p class="english">The Spider</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah29"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="30-Ar-Rum" href="/30/1-60">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ar-Rum</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-60</p>
                                    <p class="english">The Romans</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah30"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="31-Luqman" href="/31/1-34">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Luqman</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-34</p>
                                    <p class="english">Luqman</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah31"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="32-As-Sajdah" href="/32/1-30">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>As-Sajdah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-30</p>
                                    <p class="english">The Prostration</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah32"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="33-Al-Ahzab" href="/33/1-30">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Ahzab</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-30</p>
                                    <p class="english">The Combined Forces</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah33"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/22">22</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="33-Al-Ahzab" href="/33/31-73">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Ahzab</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">31-73</p>
                                    <p class="english">The Combined Forces</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah33"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="34-Saba" href="/34/1-54">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Saba</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-54</p>
                                    <p class="english">Sheba</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah34"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="35-Fatir" href="/35/1-45">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Fatir</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-45</p>
                                    <p class="english">Originator</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah35"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="36-Ya-Sin" href="/36/1-27">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ya-Sin</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-27</p>
                                    <p class="english">Ya Sin</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah36"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/23">23</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="36-Ya-Sin" href="/36/28-83">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ya-Sin</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">28-83</p>
                                    <p class="english">Ya Sin</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah36"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="37-As-Saffat" href="/37/1-182">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>As-Saffat</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-182</p>
                                    <p class="english">Those who set the Ranks</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah37"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="38-Sad" href="/38/1-88">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Sad</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-88</p>
                                    <p class="english">The Letter &quot;Saad&quot;</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah38"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="39-Az-Zumar" href="/39/1-31">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Az-Zumar</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-31</p>
                                    <p class="english">The Troops</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah39"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/24">24</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="39-Az-Zumar" href="/39/32-75">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Az-Zumar</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">32-75</p>
                                    <p class="english">The Troops</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah39"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="40-Ghafir" href="/40/1-85">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ghafir</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-85</p>
                                    <p class="english">The Forgiver</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah40"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="41-Fussilat" href="/41/1-46">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Fussilat</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-46</p>
                                    <p class="english">Explained in Detail</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah41"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/25">25</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="41-Fussilat" href="/41/47-54">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Fussilat</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">47-54</p>
                                    <p class="english">Explained in Detail</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah41"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="42-Ash-Shuraa" href="/42/1-53">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ash-Shuraa</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-53</p>
                                    <p class="english">The Consultation</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah42"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="43-Az-Zukhruf" href="/43/1-89">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Az-Zukhruf</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-89</p>
                                    <p class="english">The Ornaments of Gold</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah43"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="44-Ad-Dukhan" href="/44/1-59">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ad-Dukhan</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-59</p>
                                    <p class="english">The Smoke</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah44"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="45-Al-Jathiyah" href="/45/1-37">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Jathiyah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-37</p>
                                    <p class="english">The Crouching</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah45"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/26">26</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="46-Al-Ahqaf" href="/46/1-35">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Ahqaf</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-35</p>
                                    <p class="english">The Wind-Curved Sandhills</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah46"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="47-Muhammad" href="/47/1-38">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Muhammad</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-38</p>
                                    <p class="english">Muhammad</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah47"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="48-Al-Fath" href="/48/1-29">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Fath</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-29</p>
                                    <p class="english">The Victory</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah48"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="49-Al-Hujurat" href="/49/1-18">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Hujurat</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-18</p>
                                    <p class="english">The Rooms</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah49"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="50-Qaf" href="/50/1-45">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Qaf</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-45</p>
                                    <p class="english">The Letter &quot;Qaf&quot;</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah50"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="51-Adh-Dhariyat" href="/51/1-30">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Adh-Dhariyat</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-30</p>
                                    <p class="english">The Winnowing Winds</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah51"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/27">27</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="51-Adh-Dhariyat" href="/51/31-60">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Adh-Dhariyat</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">31-60</p>
                                    <p class="english">The Winnowing Winds</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah51"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="52-At-Tur" href="/52/1-49">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>At-Tur</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-49</p>
                                    <p class="english">The Mount</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah52"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="53-An-Najm" href="/53/1-62">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Najm</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-62</p>
                                    <p class="english">The Star</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah53"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="54-Al-Qamar" href="/54/1-55">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Qamar</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-55</p>
                                    <p class="english">The Moon</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah54"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="55-Ar-Rahman" href="/55/1-78">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ar-Rahman</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-78</p>
                                    <p class="english">The Beneficent</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah55"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="56-Al-Waqi&#39;ah" href="/56/1-96">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Waqi&#39;ah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-96</p>
                                    <p class="english">The Inevitable</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah56"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="57-Al-Hadid" href="/57/1-29">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Hadid</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-29</p>
                                    <p class="english">The Iron</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah57"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/28">28</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="58-Al-Mujadila" href="/58/1-22">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Mujadila</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-22</p>
                                    <p class="english">The Pleading Woman</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah58"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="59-Al-Hashr" href="/59/1-24">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Hashr</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-24</p>
                                    <p class="english">The Exile</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah59"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="60-Al-Mumtahanah" href="/60/1-13">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Mumtahanah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-13</p>
                                    <p class="english">She that is to be examined</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah60"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="61-As-Saf" href="/61/1-14">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>As-Saf</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-14</p>
                                    <p class="english">The Ranks</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah61"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="62-Al-Jumu&#39;ah" href="/62/1-11">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Jumu&#39;ah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-11</p>
                                    <p class="english">The Congregation, Friday</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah62"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="63-Al-Munafiqun" href="/63/1-11">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Munafiqun</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-11</p>
                                    <p class="english">The Hypocrites</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah63"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="64-At-Taghabun" href="/64/1-18">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>At-Taghabun</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-18</p>
                                    <p class="english">The Mutual Disillusion</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah64"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="65-At-Talaq" href="/65/1-12">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>At-Talaq</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-12</p>
                                    <p class="english">The Divorce</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah65"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="66-At-Tahrim" href="/66/1-12">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>At-Tahrim</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-12</p>
                                    <p class="english">The Prohibition</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah66"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/29">29</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="67-Al-Mulk" href="/67/1-30">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Mulk</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-30</p>
                                    <p class="english">The Sovereignty</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah67"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="68-Al-Qalam" href="/68/1-52">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Qalam</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-52</p>
                                    <p class="english">The Pen</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah68"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="69-Al-Haqqah" href="/69/1-52">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Haqqah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-52</p>
                                    <p class="english">The Reality</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah69"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="70-Al-Ma&#39;arij" href="/70/1-44">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Ma&#39;arij</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-44</p>
                                    <p class="english">The Ascending Stairways</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah70"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="71-Nuh" href="/71/1-28">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Nuh</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-28</p>
                                    <p class="english">Noah</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah71"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="72-Al-Jinn" href="/72/1-28">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Jinn</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-28</p>
                                    <p class="english">The Jinn</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah72"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="73-Al-Muzzammil" href="/73/1-20">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Muzzammil</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-20</p>
                                    <p class="english">The Enshrouded One</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah73"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="74-Al-Muddaththir" href="/74/1-56">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Muddaththir</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-56</p>
                                    <p class="english">The Cloaked One</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah74"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="75-Al-Qiyamah" href="/75/1-40">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Qiyamah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-40</p>
                                    <p class="english">The Resurrection</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah75"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="76-Al-Insan" href="/76/1-31">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Insan</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-31</p>
                                    <p class="english">The Man</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah76"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="77-Al-Mursalat" href="/77/1-50">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Mursalat</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-50</p>
                                    <p class="english">The Emissaries</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah77"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="juz-card">
                <h5 class="juz-card__title">
                    <a href="/juz/30">30</a>
                </h5>
  
  
                <a data-controller="track" data-name="juz" data-category="78-An-Naba" href="/78/1-40">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Naba</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-40</p>
                                    <p class="english">The Tidings</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah78"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="79-An-Nazi&#39;at" href="/79/1-46">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Nazi&#39;at</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-46</p>
                                    <p class="english">Those who drag forth</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah79"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="80-&#39;Abasa" href="/80/1-42">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>&#39;Abasa</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-42</p>
                                    <p class="english">He Frowned</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah80"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="81-At-Takwir" href="/81/1-29">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>At-Takwir</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-29</p>
                                    <p class="english">The Overthrowing</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah81"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="82-Al-Infitar" href="/82/1-19">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Infitar</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-19</p>
                                    <p class="english">The Cleaving</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah82"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="83-Al-Mutaffifin" href="/83/1-36">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Mutaffifin</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-36</p>
                                    <p class="english">The Defrauding</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah83"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="84-Al-Inshiqaq" href="/84/1-25">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Inshiqaq</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-25</p>
                                    <p class="english">The Sundering</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah84"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="85-Al-Buruj" href="/85/1-22">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Buruj</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-22</p>
                                    <p class="english">The Mansions of the Stars</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah85"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="86-At-Tariq" href="/86/1-17">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>At-Tariq</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-17</p>
                                    <p class="english">The Nightcommer</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah86"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="87-Al-A&#39;la" href="/87/1-19">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-A&#39;la</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-19</p>
                                    <p class="english">The Most High</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah87"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="88-Al-Ghashiyah" href="/88/1-26">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Ghashiyah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-26</p>
                                    <p class="english">The Overwhelming</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah88"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="89-Al-Fajr" href="/89/1-30">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Fajr</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-30</p>
                                    <p class="english">The Dawn</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah89"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="90-Al-Balad" href="/90/1-20">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Balad</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-20</p>
                                    <p class="english">The City</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah90"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="91-Ash-Shams" href="/91/1-15">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ash-Shams</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-15</p>
                                    <p class="english">The Sun</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah91"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="92-Al-Layl" href="/92/1-21">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Layl</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-21</p>
                                    <p class="english">The Night</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah92"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="93-Ad-Duhaa" href="/93/1-11">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ad-Duhaa</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-11</p>
                                    <p class="english">The Morning Hours</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah93"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="94-Ash-Sharh" href="/94/1-8">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Ash-Sharh</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-8</p>
                                    <p class="english">The Relief</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah94"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="95-At-Tin" href="/95/1-8">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>At-Tin</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-8</p>
                                    <p class="english">The Fig</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah95"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="96-Al-&#39;Alaq" href="/96/1-19">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-&#39;Alaq</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-19</p>
                                    <p class="english">The Clot</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah96"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="97-Al-Qadr" href="/97/1-5">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Qadr</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-5</p>
                                    <p class="english">The Power</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah97"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="98-Al-Bayyinah" href="/98/1-8">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Bayyinah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-8</p>
                                    <p class="english">The Clear Proof</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah98"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="99-Az-Zalzalah" href="/99/1-8">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Az-Zalzalah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-8</p>
                                    <p class="english">The Earthquake</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah99"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="100-Al-&#39;Adiyat" href="/100/1-11">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-&#39;Adiyat</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-11</p>
                                    <p class="english">The Courser</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah100"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="101-Al-Qari&#39;ah" href="/101/1-11">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Qari&#39;ah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-11</p>
                                    <p class="english">The Calamity</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah101"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="102-At-Takathur" href="/102/1-8">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>At-Takathur</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-8</p>
                                    <p class="english">The Rivalry in world increase</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah102"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="103-Al-&#39;Asr" href="/103/1-3">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-&#39;Asr</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-3</p>
                                    <p class="english">The Declining Day</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah103"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="104-Al-Humazah" href="/104/1-9">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Humazah</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-9</p>
                                    <p class="english">The Traducer</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah104"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="105-Al-Fil" href="/105/1-5">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Fil</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-5</p>
                                    <p class="english">The Elephant</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah105"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="106-Quraysh" href="/106/1-4">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Quraysh</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-4</p>
                                    <p class="english">Quraysh</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah106"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="107-Al-Ma&#39;un" href="/107/1-7">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Ma&#39;un</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-7</p>
                                    <p class="english">The Small kindnesses</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah107"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="108-Al-Kawthar" href="/108/1-3">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Kawthar</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-3</p>
                                    <p class="english">The Abundance</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah108"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="109-Al-Kafirun" href="/109/1-6">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Kafirun</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-6</p>
                                    <p class="english">The Disbelievers</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah109"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="110-An-Nasr" href="/110/1-3">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Nasr</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-3</p>
                                    <p class="english">The Divine Support</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah110"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="111-Al-Masad" href="/111/1-5">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Masad</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-5</p>
                                    <p class="english">The Palm Fiber</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah111"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="112-Al-Ikhlas" href="/112/1-4">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Ikhlas</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-4</p>
                                    <p class="english">The Sincerity</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah112"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="113-Al-Falaq" href="/113/1-5">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>Al-Falaq</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-5</p>
                                    <p class="english">The Daybreak</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah113"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a data-controller="track" data-name="juz" data-category="114-An-Nas" href="/114/1-6">
                    <div class="surah-card">
                        <div class="surah-card__text">
                            <div class="surah-card__latin">
                                <h5>An-Nas</h5>
                                <div class="ayah-number-wrapper">
                                    <p class="ayah-number">1-6</p>
                                    <p class="english">Mankind</p>
                                </div>
                            </div>
                            <div class="surah-card__arabic">
                                <p>
                                    <span class="icon-surah icon-surah114"></span>
                                    <span class="icon-surah icon-surah-surah"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
  
        </div>
    </div>
  
  
  
  
  
    <div class="container space-y-16 green-images-wrapper">
        <a class="green-image-link" data-controller="track" data-name="related-sizes" data-category="#" href="#">
            <div class="green-image ">
                <div class="content">
                    <h5><span class='en '>Salah</span></h5>
                    <p><span class='en '>Search prayer times for any location</span></p>
                </div>
            </div>
        </a>
        <a class="green-image-link" data-controller="track" data-name="related-sizes" data-category="#" href="#">
            <div class="green-image ">
                <div class="content">
                    <h5><span class='en '>Sunnah</span></h5>
                    <p><span class='en '>The Hadith of Prophet Muhammad (ﷺ)</span></p>
                </div>
            </div>
        </a>
        <a class="green-image-link" data-controller="track" data-name="related-sizes" data-category="#" href="#">
            <div class="green-image ">
                <div class="content">
                    <h5><span class='en '>Noble Quran in audio</span></h5>
                    <p><span class='en '>Learning & listening at the same time</span></p>
                </div>
            </div>
        </a>
    </div>
  
  </main>

@endsection