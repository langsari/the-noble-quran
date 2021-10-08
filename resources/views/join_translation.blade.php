<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>How to Join Table in Laravel 8 using Eloquent Model</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">    
            <br />
            <h1 class="text-center text-primary">How to Join Multiple Table in Laravel 8 using Eloquent Model</h1>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>State</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarsurah as $row)
                            <tr>
                                <td>{{ $row->surah_indonesia }}</td>
                                <td>{{ $row->surah_arab }}</td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>



