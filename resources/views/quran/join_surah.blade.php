@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Surah</th>
                       
                    </tr>
                </thead>
                <tbody>
                @foreach($daftarsurah as $row)
                    <tr>
                       
                        <td>{{ $row->index}}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('detail') }}">{{$row->surah_indonesia}}</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>
</div>

@endsection


            
