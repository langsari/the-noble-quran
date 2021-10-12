
let url = window.location.href;
let newUrl = url.split('/');
let id = newUrl[newUrl.length - 1]
// console.log(id)

//############################## Start make Bookmark ##############################///



    let mybookMark = JSON.parse(localStorage.getItem('quran-bookmark-store')) // fetch all bookmark in the localstorage

    if(mybookMark==null){ // if  bookmark in the localstorage
        mybookMark=[]
    }

    let bookfun = function() {

        let bookMarkBtn = document.querySelectorAll(".bookmark");
        // let bookMarkObj=[]
        bookMarkBtn.forEach((Btn) => {
            Btn.addEventListener('click', (e) => { // when user click the bookmark button

                let searchResult = 0
                mybookMark.forEach(book=>{ //check if the bookmark exist in local storage if found the searchResult will be 1 and not add the bookmark

                    if(book.id == e.currentTarget.dataset.bookmark){
                        //e.currentTarget.dataset.bookmark will get the value of the bookmark
                        searchResult = 1
                        //   console.log(mybookMark.indexOf(book.id))
                        mybookMark.splice(book.id, 1);
                        localStorage.setItem('quran-bookmark-store', JSON.stringify(mybookMark))
                        alert('Deleted')
                    }
                })

                if(searchResult == 0){ // if not doblecate bookmark it will add
                    let myBook = {
                        "id": e.currentTarget.dataset.bookmark,
                    }
                    mybookMark.push(myBook)
                    localStorage.setItem('quran-bookmark-store', JSON.stringify(mybookMark))
                    alert('Bookmark Added Successfully')
                }else{  // if  doblecate bookmark it will fail
                }

            })

        })
    }

    // whit to feth suah form api
    setTimeout(bookfun, 500)

//############################## End make Bookmark ##############################///




// ############################## Start GET BookMark Of Specific surah From local storage ##############################

            let bookmarkli = document.getElementById('bookmark')
            let mybookMark1 = JSON.parse(localStorage.getItem('quran-bookmark-store'))
            let bb = "";

            mybookMark.forEach(b => {
                let idd = b.id // get id of surah from localstorage
                let neww = idd.split(':');
                console.log(neww[0]);// print id of surah from localstorage

                let idaftersplit = id.split('#')// get id of surah from url
                console.log(idaftersplit[0]);// get id of surah from url

                if (idaftersplit[0] == neww[0]) {
                    bb += `
                        <a class="btn btn-danger btn-sm my-2" href='#${neww[1]}' >Ayah : ${neww[1]}<a>
                    `
                }


            })
            if (bb == "") {
                bb = '<h6 aletr>No Bookmark yet</h6>'
            }

            bookmarkli.innerHTML = bb;

// ############################## End GET BookMark Of Specific surah From local storage ##############################



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

        const tt = t.map((item) => { //got all surah names in tt
            return item //return surah name
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

            gg += `<a id="ss" href="${sss.number}">
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






    ///##################### Start Add Note #####################///

    let addBtn = document.getElementById("add-btn");
    let addTitle = document.getElementById("note-title")
    let addTxt = document.getElementById("note-text")



    addBtn.addEventListener("click", (e) => {
        if (addTitle.value == "" || addTxt.value == "") {
            return alert("Please add note title and details");
        }

        let notes = localStorage.getItem("notes");
        if (notes == null) {
            notesObj = []
        } else {
            notesObj = JSON.parse(notes);
        }
        let myObj = {
            title: addTitle.value,
            text: addTxt.value
        }
        notesObj.push(myObj);
        localStorage.setItem("notes", JSON.stringify(notesObj));
        addTitle.value = "";
        addTxt.value = "";

        showNotes();
    })


    // show notes on the page
    function showNotes() {
        let notes = localStorage.getItem("notes");
        if (notes == null) {
            notesObj = []
        } else {
            notesObj = JSON.parse(notes);
        }

        let html = "";
        notesObj.forEach(function(element, index) {
            html += `
<div id="note" class="m-3">
    <div class="card">
        <h5 class="card-header">Note ${index + 1}</h5>
        <div class="card-body">
            <h5 class="card-title">${element.title}</h5>
            <p class="card-text">${element.text}.</p>

            <button id="${index}" onclick= "deleteNote(this.id)" class="btn btn-sm btn-danger">Delete Note</button>
            <button id="${index}" onclick= "editNote(this.id)" class="btn btn-sm btn-info">Edit Note</button>
        </div>
    </div>

</div>
        `
        });

        let noteElm = document.getElementById("notes");
        if (notesObj.length != 0) {
            noteElm.innerHTML = html;
        } else {
            noteElm.innerHTML = "Not Notes Yet! Add a note using the form above";
        }
    }

    // Function to delete notes
    function deleteNote(index) {
        let confirmDel = confirm("You are deleting this note!!");

        if (confirmDel == true) {
            let notes = localStorage.getItem("notes");
            if (notes == null) {
                notesObj = [];
            } else {
                notesObj = JSON.parse(notes);
            }

            notesObj.splice(index, 1);
            localStorage.setItem("notes", JSON.stringify(notesObj));
            showNotes();
        }
    }


    // function to edit the notes
    function editNote(index) {
        let notes = localStorage.getItem("notes");
        if (addTitle.value !== "" || addTxt.value !== "") {
            return alert("Please clear the form before editting a not");
        }
        if (notes == null) {
            notesObj = [];
        } else {
            notesObj = JSON.parse(notes);
        }
        // console.log(notesObj);
        notesObj.findIndex((element, index) => {
            addTitle.value = element.title;
            addTxt.value = element.text;
        })
        notesObj.splice(index, 1);
        localStorage.setItem("notes", JSON.stringify(notesObj));
        showNotes();
    }

    showNotes();


//      ///##################### End Add Note #####################///




