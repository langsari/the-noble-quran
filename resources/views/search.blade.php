
@extends('layouts.header-footer')

<main>
    <section class="hidden" data-controller="announcement" data-id="jobs">
    <div id="notification-alert">
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
  
  
    <div class="search-results" data-controller="search-results">
    <form action="https://quran.com/search" accept-charset="UTF-8" data-remote="true" method="get">
      <div class="container-xl search-results__content">
        <div class="search-results__first space-b-32">
          <div class="search-results__space"></div>
          <div class="search-results__input space-x-32">
            <div class="space-y-32">
              <p class="text text--black text--xlarge text--semibold">Search</p>
            </div>
  
            <div class="search-suggestion-">
              <div class="input-wrapper suggestion-input large fluid">
                <input type="search" placeholder="Search for surah, ayah" name="query" value="alnas">
                <button type="submit" class="quran-icon icon-search">
                </button>
              </div>
            </div>
          </div>
        </div>
  
        <div class="search-results__second">
          <div class="search-results__menu space-b-32" data-select2-id="9">
            <div class="search-menu">
              <div class="space-b-32">
                <p class="text text  text--black text--large2 text--semibold">Filter</p>
              </div>
  
              <div class="space-b-32" data-select2-id="8">
                <p class="text text text  text--darkgrey text--medium text--semibold">
                  Language
                </p>
                <div class="simple-select-div">
                  <select class="simple-select select2-hidden-accessible" name="language" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option value="0" data-select2-id="3">All Languages</option>
                      <option value="fi" data-select2-id="11">
                        Finnish
                        (Suomi)
                      </option>
                      <option value="am" data-select2-id="12">
                        Amharic
                        ()
                      </option>
                      <option value="as" data-select2-id="13">
                        Assamese
                        (অসমীয়া)
                      </option>
                      <option value="az" data-select2-id="14">
                        Azeri
                        (Azərbaycan dili)
                      </option>
                      <option value="ku" data-select2-id="15">
                        Kurdish
                        (Kurdî)
                      </option>
                      <option value="de" data-select2-id="16">
                        German
                        (Deutsch)
                      </option>
                      <option value="ja" data-select2-id="17">
                        Japanese
                        (日本語)
                      </option>
                      <option value="mr" data-select2-id="18">
                        Marathi
                        (मराठी)
                      </option>
                      <option value="bg" data-select2-id="19">
                        Bulgarian
                        (Български)
                      </option>
                      <option value="zgh" data-select2-id="20">
                        Amazigh
                        (Tamaziɣt)
                      </option>
                      <option value="it" data-select2-id="21">
                        Italian
                        (Italiano)
                      </option>
                      <option value="ha" data-select2-id="22">
                        Hausa
                        ()
                      </option>
                      <option value="ce" data-select2-id="23">
                        Chechen
                        ()
                      </option>
                      <option value="cs" data-select2-id="24">
                        Czech
                        (Čeština)
                      </option>
                      <option value="dv" data-select2-id="25">
                        Divehi, Dhivehi, Maldivian
                        ()
                      </option>
                      <option value="es" data-select2-id="26">
                        Spanish
                        (Español)
                      </option>
                      <option value="hi" data-select2-id="27">
                        Hindi
                        (हिन्दी)
                      </option>
                      <option value="km" data-select2-id="28">
                        Central Khmer
                        ()
                      </option>
                      <option value="mrn" data-select2-id="29">
                        Maranao
                        ()
                      </option>
                      <option value="ne" data-select2-id="30">
                        Nepali
                        (नेपाली)
                      </option>
                      <option value="bs" data-select2-id="31">
                        Bosnian
                        (Bosanski)
                      </option>
                      <option value="fa" data-select2-id="32">
                        Persian
                        (فارسی)
                      </option>
                      <option value="fr" data-select2-id="33">
                        French
                        (Français)
                      </option>
                      <option value="gu" data-select2-id="34">
                        Gujarati
                        (ગુજરાતી)
                      </option>
                      <option value="he" data-select2-id="35">
                        Hebrew
                        (עברית)
                      </option>
                      <option value="ka" data-select2-id="36">
                        Georgian
                        (ქართული)
                      </option>
                      <option value="kk" data-select2-id="37">
                        Kazakh
                        (Қазақ)
                      </option>
                      <option value="ko" data-select2-id="38">
                        Korean
                        (한국어)
                      </option>
                      <option value="lg" data-select2-id="39">
                        Ganda
                        ()
                      </option>
                      <option value="ml" data-select2-id="40">
                        Malayalam
                        (മലയാളം)
                      </option>
                      <option value="nl" data-select2-id="41">
                        Dutch
                        (Nederlands)
                      </option>
                      <option value="pl" data-select2-id="42">
                        Polish
                        (Polski)
                      </option>
                      <option value="ps" data-select2-id="43">
                        Pashto
                        (پښتو)
                      </option>
                      <option value="pt" data-select2-id="44">
                        Portuguese
                        (Português)
                      </option>
                      <option value="zh" data-select2-id="45">
                        Chinese
                        (中文)
                      </option>
                      <option value="ta" data-select2-id="46">
                        Tamil
                        (தமிழ்)
                      </option>
                      <option value="al" data-select2-id="47">
                        Albanian
                        (Albanian)
                      </option>
                      <option value="ro" data-select2-id="48">
                        Romanian
                        (Română)
                      </option>
                      <option value="ru" data-select2-id="49">
                        Russian
                        (Русский)
                      </option>
                      <option value="uk" data-select2-id="50">
                        Ukrainian
                        (Українська)
                      </option>
                      <option value="so" data-select2-id="51">
                        Somali
                        ()
                      </option>
                      <option value="bn" data-select2-id="52">
                        Bengali
                        (বাংলা)
                      </option>
                      <option value="id" data-select2-id="53">
                        Indonesian
                        (Bahasa Indonesia)
                      </option>
                      <option value="ms" data-select2-id="54">
                        Malay
                        (Bahasa Melayu)
                      </option>
                      <option value="no" data-select2-id="55">
                        Norwegian
                        (Norsk)
                      </option>
                      <option value="om" data-select2-id="56">
                        Oromo
                        ()
                      </option>
                      <option value="sq" data-select2-id="57">
                        Albanian
                        (Shqip)
                      </option>
                      <option value="sv" data-select2-id="58">
                        Swedish
                        (Svenska)
                      </option>
                      <option value="tt" data-select2-id="59">
                        Tatar
                        ()
                      </option>
                      <option value="ur" data-select2-id="60">
                        Urdu
                        (اردو)
                      </option>
                      <option value="uz" data-select2-id="61">
                        Uzbek
                        ()
                      </option>
                      <option value="yo" data-select2-id="62">
                        Yoruba
                        ()
                      </option>
                      <option value="en" data-select2-id="63">
                        English
                        (English)
                      </option>
                      <option value="si" data-select2-id="64">
                        Sinhala, Sinhalese
                        (සිංහල)
                      </option>
                      <option value="sr" data-select2-id="65">
                        Serbian
                        (Српски)
                      </option>
                      <option value="sw" data-select2-id="66">
                        Swahili
                        (Kiswahili)
                      </option>
                      <option value="te" data-select2-id="67">
                        Telugu
                        (తెలుగు)
                      </option>
                      <option value="tg" data-select2-id="68">
                        Tajik
                        ()
                      </option>
                      <option value="th" data-select2-id="69">
                        Thai
                        (ภาษาไทย)
                      </option>
                      <option value="tl" data-select2-id="70">
                        Tagalog
                        ()
                      </option>
                      <option value="tr" data-select2-id="71">
                        Turkish
                        (Türkçe)
                      </option>
                      <option value="ug" data-select2-id="72">
                        Uighur, Uyghur
                        ()
                      </option>
                      <option value="vi" data-select2-id="73">
                        Vietnamese
                        (Tiếng Việt)
                      </option>
                      <option value="sd" data-select2-id="74">
                        Sindhi
                        ()
                      </option>
                  </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-language-qs-container"><span class="select2-selection__rendered" id="select2-language-qs-container" role="textbox" aria-readonly="true" title="All Languages">All Languages</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
              </div>
  
              <div class="space-b-32">
                <p class="text text text  text--darkgrey text--medium text--semibold">Translations</p>
                <div class="simple-select-div">
                  <select class="simple-select select2-hidden-accessible" name="translation" data-select2-id="4" tabindex="-1" aria-hidden="true">
                    <option value="0" data-select2-id="6">All translations</option>
                      <option value="131">
                        Dr. Mustafa Khattab, the Clear Quran
                      </option>
                      <option value="149">
                        Fadel Soliman, Bridges’ translation
                      </option>
                      <option value="20">
                        Saheeh International
                      </option>
                      <option value="167">
                        Maarif-ul-Quran
                      </option>
                      <option value="234">
                        فتح محمد جالندھری
                      </option>
                      <option value="203">
                        Muhammad Taqi-ud-Din al-Hilali &amp; Muhammad Muhsin Khan
                      </option>
                      <option value="78">
                        Ministry of Awqaf, Egypt
                      </option>
                      <option value="75">
                        Alikhan Musayev
                      </option>
                      <option value="76">
                        Muhammad Saleh
                      </option>
                      <option value="85">
                        Abdul Haleem
                      </option>
                      <option value="83">
                        Sheikh Isa Garcia
                      </option>
                      <option value="81">
                        Burhan Muhammad-Amin
                      </option>
                      <option value="86">
                        Divehi
                      </option>
                      <option value="84">
                        Mufti Taqi Usmani
                      </option>
                      <option value="80">
                        Muhammad Karakunnu and Vanidas Elayavoor
                      </option>
                      <option value="79">
                        Abu Adel
                      </option>
                      <option value="17">
                        Dr. Ghali
                      </option>
                      <option value="95">
                        Tafheem-ul-Quran - Abul Ala Maududi
                      </option>
                      <option value="57">
                        Transliteration
                      </option>
                      <option value="19">
                        English Translation (Pickthall)
                      </option>
                      <option value="22">
                        English Translation (Yusuf Ali)
                      </option>
                      <option value="206">
                        Ruwwad Center
                      </option>
                      <option value="207">
                        207-Muhammad Hijab - english
                      </option>
                      <option value="54">
                        مولانا محمد جوناگڑھی
                      </option>
                      <option value="156">
                        Fe Zilal al-Qur'an
                      </option>
                      <option value="151">
                        Shaykh al-Hind Mahmud al-Hasan(with Tafsir E Usmani)
                      </option>
                      <option value="158">
                        بیان القرآن (ڈاکٹر اسرار احمد)
                      </option>
                      <option value="97">
                        تفہیم القرآن - سید ابو الاعلیٰ مودودی
                      </option>
                      <option value="136">
                        Montada Islamic Foundation
                      </option>
                      <option value="135">
                        IslamHouse.com
                      </option>
                      <option value="139">
                        Khawaja Mirof &amp; Khawaja Mir
                      </option>
                      <option value="35">
                        Ryoichi Mita
                      </option>
                      <option value="134">
                        King Fahad Quran Complex
                      </option>
                      <option value="153">
                        Hamza Roberto Piccardo
                      </option>
                      <option value="161">
                        Taisirul Quran
                      </option>
                      <option value="163">
                        Sheikh Mujibur Rahman
                      </option>
                      <option value="162">
                        Rawai Al-bayan
                      </option>
                      <option value="210">
                        Dar Al-Salam Center
                      </option>
                      <option value="211">
                        Dar Al-Salam Center
                      </option>
                      <option value="217">
                        Dr. Mikhailo Yaqubovic
                      </option>
                      <option value="229">
                        Sheikh Omar Sharif bin Abdul Salam
                      </option>
                      <option value="215">
                        Dar Al-Salam Center
                      </option>
                      <option value="55">
                        Muhammad Sodiq Muhammad Yusuf (Latin) 
                      </option>
                      <option value="143">
                        Muhammad Saleh Bamoki
                      </option>
                      <option value="141">
                        The Sabiq company
                      </option>
                      <option value="140">
                        Montada Islamic Foundation
                      </option>
                      <option value="214">
                        Dar Al-Salam Center
                      </option>
                      <option value="227">
                        Maulana Abder-Rahim ibn Muhammad
                      </option>
                      <option value="226">
                        Muhammad Shafi’i Ansari
                      </option>
                      <option value="233">
                        Dar Al-Salam Center
                      </option>
                      <option value="225">
                        Rabila Al-Umry
                      </option>
                      <option value="224">
                        Abdul-Hamid Haidar &amp; Kanhi Muhammad
                      </option>
                      <option value="235">
                        Abdul Islam
                      </option>
                      <option value="232">
                        African Development Foundation
                      </option>
                      <option value="231">
                        Dr. Abdullah Muhammad Abu Bakr and Sheikh Nasir Khamis
                      </option>
                      <option value="230">
                        Society of Institutes and Universities
                      </option>
                      <option value="223">
                        Pioneers of Translation Center
                      </option>
                      <option value="222">
                        Khalifa Altay
                      </option>
                      <option value="220">
                        Ruwwad Center
                      </option>
                      <option value="216">
                        Ruwwad Center
                      </option>
                      <option value="144">
                        Sofian S. Siregar
                      </option>
                      <option value="88">
                        Hasan Efendi Nahi
                      </option>
                      <option value="87">
                        Sadiq and Sani
                      </option>
                      <option value="50">
                        Jan Trust Foundation
                      </option>
                      <option value="49">
                        Ali Muhsin Al-Barwani
                      </option>
                      <option value="48">
                        Knut Bernström
                      </option>
                      <option value="128">
                        Cambodian Muslim Community Development
                      </option>
                      <option value="45">
                        Russian Translation ( Elmir Kuliev )
                      </option>
                      <option value="77">
                        Turkish Translation(Diyanet)
                      </option>
                      <option value="39">
                        Abdullah Muhammad Basmeih
                      </option>
                      <option value="36">
                        Korean
                      </option>
                      <option value="30">
                        Finnish
                      </option>
                      <option value="26">
                        Czech
                      </option>
                      <option value="103">
                        Helmi Nasr
                      </option>
                      <option value="74">
                        Tajik
                      </option>
                      <option value="23">
                        Azerbaijani
                      </option>
                      <option value="101">
                        Alauddin Mansour
                      </option>
                      <option value="53">
                        Tatar
                      </option>
                      <option value="47">
                        Albanian
                      </option>
                      <option value="44">
                        Grigore
                      </option>
                      <option value="42">
                        Józef Bielawski
                      </option>
                      <option value="41">
                        Norwegian
                      </option>
                      <option value="106">
                        Magomed Magomedov
                      </option>
                      <option value="236">
                        Ramdane At Mansour
                      </option>
                      <option value="237">
                        Tzvetan Theophanov
                      </option>
                      <option value="238">
                        Taj Mehmood Amroti
                      </option>
                      <option value="125">
                        Shaykh Abu Rahimah Mikael Aykyuni
                      </option>
                      <option value="124">
                        Muslim Shahin
                      </option>
                      <option value="46">
                        Mahmud Muhammad Abduh
                      </option>
                      <option value="113">
                        Khalifah Altai
                      </option>
                      <option value="112">
                        Shaban Britch
                      </option>
                      <option value="38">
                        Maranao
                      </option>
                      <option value="89">
                        Albanian Translation
                      </option>
                      <option value="56">
                        Chinese Translation (Simplified) - Ma Jain
                      </option>
                      <option value="32">
                        Hausa Translation(Abubakar Gumi)
                      </option>
                      <option value="108">
                        Ahl Al-Hadith Central Society of Nepal
                      </option>
                      <option value="37">
                        Malay Translation(Abdul Hameed and Kunhi)
                      </option>
                      <option value="43">
                        Portuguese Translation( Samir )
                      </option>
                      <option value="28">
                        Spanish Translation(Cortes)
                      </option>
                      <option value="51">
                        Thai Translatio (King Fahad Quran Complex)
                      </option>
                      <option value="111">
                        Ghali Apapur Apaghuna
                      </option>
                      <option value="123">
                        Sabiq
                      </option>
                      <option value="115">
                        Abubakar Mahmood Jummi
                      </option>
                      <option value="31">
                        French Translation(Muhammad Hamidullah)
                      </option>
                      <option value="29">
                        Farsi Translation(Hussein Taji)
                      </option>
                      <option value="208">
                        Abu Reda Muhammad ibn Ahmad
                      </option>
                      <option value="209">
                        Othman al-Sharif
                      </option>
                      <option value="212">
                        Ruwwad Center
                      </option>
                      <option value="133">
                        Abdul Hameed Baqavi
                      </option>
                      <option value="25">
                        Muhamed Mehanović
                      </option>
                      <option value="221">
                        Hasan Abdul-Karim
                      </option>
                      <option value="219">
                        Hamed Choi
                      </option>
                      <option value="52">
                        Elmalili Hamdi Yazir
                      </option>
                      <option value="213">
                        Dr. Abu Bakr Muhammad Zakaria
                      </option>
                      <option value="199">
                        Noor International Center
                      </option>
                      <option value="218">
                        Saeed Sato
                      </option>
                      <option value="228">
                        Ruwwad Center
                      </option>
                      <option value="126">
                        Besim Korkut
                      </option>
                      <option value="122">
                        Maulana Azizul Haque al-Umari
                      </option>
                      <option value="120">
                        Shaykh Rafeequl Islam Habibur-Rahman
                      </option>
                      <option value="127">
                        Muhammad Sodik Muhammad Yusuf
                      </option>
                      <option value="118">
                        Zakaria Abulsalam
                      </option>
                      <option value="109">
                        Muhammad Makin
                      </option>
                      <option value="27">
                        Frank Bubenheim and Nadeem
                      </option>
                      <option value="33">
                        Indonesian Islamic affairs ministry
                      </option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-translation-x5-container"><span class="select2-selection__rendered" id="select2-translation-x5-container" role="textbox" aria-readonly="true" title="All translations">All translations</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
              </div>
  
            </div>
          </div>
  
          <div class="search-results__results space-x-32">
            <div class="search-results__results--header space-b-32">
  
              <p class="text text text--grey text--small text--regular">
                </p><nav class="pagy-nav pagination" role="navigation" aria-label="pager"><span class="page prev disabled">‹&nbsp;Prev</span> <span class="page active">1</span> <span class="page next disabled">Next&nbsp;›</span></nav>
                1-1 OF 1 SEARCH RESULTS
              <p></p>
            </div>
  
            <div class="search-results__results--body">
              <div>
  
                <p class="text  text--grey text--medium text--regular">Results</p>
                <div data-controller="search-result">
    <div class="search-item">
      <div>
        <a class="number" href="https://quran.com/69:32?store=false&amp;translations=48">69:32</a>
      </div>
  
      <div class="search-item--results">
        <div class="search-item--ayah">
          <p class="arabic text_uthmani">
            ثُمَّ فِى سِلْسِلَةٍ ذَرْعُهَا سَبْعُونَ ذِرَاعًا فَٱسْلُكُوهُ
          </p>
        </div>
  
            <div class="search-item--translation ">
              <p class="text text--grey text--medium">
                Kedja därefter ihop honom [med andra syndare] i en kedja vars längd är sjuttio <em class="hlt1">alnar</em>;
              </p>
  
              <p class="text text--green text--medium">
                Knut Bernström
              </p>
            </div>
      </div>
    </div>
  
  </div>
  
              </div>
            </div>
          </div>
        </div>
      </div>
  </form></div>
  
  </main>
  