<div>
    <ul class="ayat">
    </ul>
</div>





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

