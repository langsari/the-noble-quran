        //##############################  Start Fetch All Surah Name From External API And Show In Home Page ############################## //


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
                            <li class="hover-change-color-alq" id=${suarh.number} data-surah=${suarh.number} data-title=${suarh.name.transliteration.en}>
                                <a href='alquran/surah/${suarh.number}'>
                                    <div class='item'>
                                        <div class='item-id'><span>${suarh.number}</span></div>
                                        <div class='item-right'>
                                            <div class='arabic'>${suarh.name.long}</div>
                                            <div class='verses'>${suarh.numberOfVerses} Verses</div>
                                        </div>
                                        <div class='item-left'>
                                            <div class='title'>${suarh.name.transliteration.en}</div>
                                            <div class='translate'>${suarh.name.translation.en}</div>
                                        </div>
                                        <div class='clear'></div>
                                    </div>
                                </a>
                            </li>
                        `
                        });


                        surahList.innerHTML = dataPrint


                    }

                )
        }

        getAllSurah()


        //##############################  End Fetch All Surah Name From External API And Show In Home Page ############################## //

        //##############################  Start GET BookMark From Localstorage ############################## //
        let bookmarkli = document.getElementById('bookmark')
        let mybookMark = JSON.parse(localStorage.getItem('quran-bookmark-store'))
        let bb = "";
        mybookMark.forEach(b => {
            let idd = b.id
            let neww = idd.split(':');
            console.log(neww);
            bb += `

                <a class="btn btn-danger btn-sm my-2" href='alquran/surah/${neww[0]}#${neww[1]}'>Surah ${neww[0]} : ayah ${neww[1]}<a>
            `
        })
        bookmarkli.innerHTML = bb;


        //##############################  End GET BookMark Localstorage  ############################## //


        // ############################## Start Script searh surah ##############################
        const input_search_surah = document.querySelector('#input_search_surah');
        const list_surah = document.querySelector('#list_surah');

        //search from suarah api and filter it by surah name
        const searchSurah = async searchtext => {
            if (searchtext == "") {
                return list_surah.innerHTML = "";
            }
            const res = await fetch("https://api.quran.sutanlab.id/surah");
            const data = await res.json();
            const t = data.data

            const tt = t.map((item) => {
                return item
            })
            // console.log(tt);
            let gg = '';
            //     //get match to current input
            let matches = tt.filter((surah) => {

                const regex = new RegExp(`^${searchtext}`, 'gi');
                return surah.name.short
                    .match(regex) || surah.name.translation.en.match(regex)
            })

            console.log(matches);

            matches.forEach(sss => {

                gg += `<a id="ss" href="/alquran/surah/${sss.number}">
                            <div class=" card-body border-no-padding p-2 my-1">
                                <h6>
                                    ${sss.name.translation.en} - ${sss.name.short}
                                </h6>
                            </div>
                            </a>
                `
            });

            list_surah.innerHTML = gg;

        };

        input_search_surah.addEventListener('input', () => searchSurah(input_search_surah.value));
        // ##############################  End Script searh surah ##############################
