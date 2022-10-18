@extends('quran.nav')
@section('content')

<br>
<br>
<br>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Dua</title>
</head>
<body>
    <h1>ดูอาจากอัลกุรอาน</h1>
    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ซูเราะห์ที่</th>
                            <th scope="col">ชื่อซูเราะห์</th>
                            <th scope="col">อายัตที่</th>
                            <th scope="col">ดูอา</th>
                            <th scope="col">ความหมาย</th>
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
    {{$dua->links()}}
</body>
</html>