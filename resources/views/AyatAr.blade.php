@foreach($ayats as $ayat)

    <div class="Ayah">
     <li>{{$ayat->AyahText}} &emsp;<span class="Number"> {{$ayat->VerseID}}</span> </li>
    </div>


@endforeach
