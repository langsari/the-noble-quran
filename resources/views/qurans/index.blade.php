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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datasurahs as $datasurah)
                    <tr>
                        <td scope="row">{{ $datasurah->id }}</td>
                        <td>{{ $datasurah->surah_name }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('alls', $datasurah) }}">view</a>
                        </td>
                    </tr>

                    
                    @endforeach

                </tbody>
            </table>

            {{$datasurahs->links()}}

        </div>
    </div>
</div>

@endsection
