require('./bootstrap');







// {{-- Start Script searh surah --}}
// <script>
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

            gg += `<a id="ss" href="/surah/${sss.number}">
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
// </script>
// {{-- End Script searh surah --}}
