@extends('quran.navbar')
@section('content')
<br>
<h3 class="text-center">{{$tafseers->th_name}}</h3>
@foreach($tafseers->tafseer as $tafseer )
  <div class="container hero">
  <div class="row">
      <div class="col-md-8 offset-md-2">
      

      <br><p>{{$tafseer->name}}
      <p><br><br><iframe width="640" height="400" src="https://www.youtube.com/embed/{{$tafseers->youtubeId}}?modestbranding=1" 
              rameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen></iframe><hr><br>
              </div>
              </div>
@endforeach
     
</div>
    </div>
    @endsection

