<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="https://www.al-quran.cc/favicon.ico"> --}}
    <link rel="stylesheet" type="text/css" href="https://www.al-quran.cc/css/layout.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Droid+Serif">
    <title>The Holy Quran | Quran Translate</title>
</head>

    <body>

       <div id="main">
            <div id="content">
                <div style="text-align: center"><img src="https://www.al-quran.cc/images/system/al-quran.png" width="200" />
                </div>
                <h1 class="content-title">Surah / Chapter</h1>
                <div class="content-body">

                   <ul class="surah-list">
                        {{-- Here Will Display All Surahs Name  --}}
                    </ul>

                </div>
            </div>
        </div>

    </body>

</html>




<script>
    let surahList = document.querySelector('.surah-list');
    function getAllSurah() {
        fetch("https://api.quran.sutanlab.id/surah")
            .then(res => res.json())
            .then(data => {
                    let dataPrint = '';
                    let suarhs = data.data;
                    // console.log(data.data)
                    suarhs.forEach(suarh => {
                        // console.log(suarh.name.long)
                        dataPrint += `
                        
                        <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="QuranText/${suarh.number}">
                <div class="surah-card">
                  <div class="surah-card__number">
                     Surah ${suarh.number}
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>A${suarh.name.transliteration.en}</h5></div>
                      <div class="surah-card__english">
                        <p>${suarh.name.translation.en}</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>${suarh.name.long}</h2>
                    </div>
                  </div>
                </div>
              </a>

                                
                            `
                    });
                    surahList.innerHTML = dataPrint
                }
            )
    }
    getAllSurah()
</script>