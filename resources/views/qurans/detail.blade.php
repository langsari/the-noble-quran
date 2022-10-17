@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Surah</th>
                        <th>Id</th>
                        <th>Ayah</th>
                        <th>Text</th>
                        <th>Audio</th>
                    </tr>
                </thead>
                <tbody>
                  
             
                   @foreach($arabics->arabic as $arabic )
                   <tr>
                   <td> {{$arabics->surah_name}}</td>
                   <td> {{$arabic->thais->datasurah_id}}</td>
                    <td> {{$arabic->ayat}}</td>
                    
                    <td> {{$arabic->text}}</td>
                    <td> {{$arabic->thais->text}}</td>
                    <td> {{$arabic->thais->audio}}</td>
                   
                   </tr>
                   @endforeach
                </tbody>

            </table>
           
         

        </div>
    </div>
</div>

@endsection
