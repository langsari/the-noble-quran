/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

// -----------------START----------------
//  Javascript For Fetch All Surah Name From External API And Show In Home Page
///Surah container
// -----------------START----------------
//  Javascript For Fetch All Surah Name From External API And Show In Home Page
   
///Surah container
let SurahsContainer = document.querySelector('.surahsContainer')

getSurahs()
function getSurahs()
{
    ///fetch surahs meta data {Name of Surahs}
    fetch(`http://api.alquran.cloud/v1/meta`)
    .then(response => response.json())
    .then(data=>{
        let surahs = data.data.surahs.references;
        let numberOfSurahs = 114;
        SurahsContainer.innerHTML = "";
        for (let i = 0; i < numberOfSurahs; i++) {
            SurahNum= i+1;
            SurahsContainer.innerHTML += 
            `   
           
            <div class="surah"> 
            <a href="/surah/${SurahNum}">
            <br>
            <div class="SurahNum"><span>${SurahNum}</span></div>
            <p class="SurahName">${surahs[i].name}</p>
            <p>${surahs[i].englishName}</p>
            <br>
            </a>
            </div>
           
            ` 
    }})}
    
 
        /*
        surahs.forEach(sura => {

            SurahNum= sura.length;
            SurahsContainer.innerHTML += 
            `   
            <div class="surah"> 
            <br><a href='surah/${SurahNum}'>
            <div class="SurahNum"><span>${SurahNum}</span></div>
            <p class="SurahName">${sura[i].name}</p>
            <p>${sura[i].englishName}</p>
            <br></a>
            </div>
            `
        });*/

 
     
        

// -----------------END----------------





    
    

            
            

                   
  



         


    


      



// -----------------END----------------



/*let transButt = document.getElementById("TranslateSurah");
transButt.addEventListener('click',()=>{   
                        let id = document.getElementById("idT");
                        let en = document.getElementById("enT");
                        let arb = document.getElementById("arbT"); 
                        id.classList.add('active');
                        en.classList.add('active');
                        arb.classList.add('active');
        
                        })*/ // -----------------END----------------

/*let transButt = document.getElementById("TranslateSurah");
transButt.addEventListener('click',()=>{   
                        let id = document.getElementById("idT");
                        let en = document.getElementById("enT");
                        let arb = document.getElementById("arbT"); 
                        id.classList.add('active');
                        en.classList.add('active');
                        arb.classList.add('active');
        
                        })*/

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/css-loader/dist/cjs.js):\nError: Can't resolve './img/Play.png' in 'C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\resources\\sass'\n    at finishWithoutResolve (C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\enhanced-resolve\\lib\\Resolver.js:293:18)\n    at C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\enhanced-resolve\\lib\\Resolver.js:362:15\n    at C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\enhanced-resolve\\lib\\Resolver.js:410:5\n    at eval (eval at create (C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\enhanced-resolve\\lib\\Resolver.js:410:5\n    at eval (eval at create (C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:27:1)\n    at C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\enhanced-resolve\\lib\\DescriptionFilePlugin.js:87:43\n    at C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\enhanced-resolve\\lib\\Resolver.js:410:5\n    at eval (eval at create (C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\enhanced-resolve\\lib\\Resolver.js:410:5\n    at processResult (C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\webpack\\lib\\NormalModule.js:713:19)\n    at C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\webpack\\lib\\NormalModule.js:819:5\n    at C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (C:\\xampp\\htdocs\\GITHUB\\the-noble-quran-New\\node_modules\\css-loader\\dist\\index.js:155:5)\n    at processTicksAndRejections (internal/process/task_queues.js:95:5)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/sass/app.scss"]();
/******/ 	
/******/ })()
;