@extends('quran.nav')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Doa Daily life</title>
</head>
<body>
    <h1>Doa daily life</h1>
    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">surah number</th>
                            <th scope="col">surah name</th>
                            <th scope="col">ayat number</th>
                            <th scope="col">dua</th>
                            <th scope="col">meaning</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dua as $row)
                        <tr>
                            <th>{{$row->id}}</th>
                            <td>{{$row->surah_num}}</td>
                            <td>{{$row->surah_name}}</td>
                            <td>{{$row->ayat_num}}</td>
                            <td>{{$row->ayat_text}}</td>
                            <td>{{$row->ayat_meaning}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>