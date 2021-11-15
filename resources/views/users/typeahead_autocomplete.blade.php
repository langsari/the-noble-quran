<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Typeahead JS Live Autocomplete Search in Laravel 8</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>
    </head>
    <body>
        <div class="container">    
            <br />
            <h1 class="text-center text-primary">Typeahead JS Live Autocomplete Search in Laravel 8</h1>
            <br />
            <input type="text" name="title" id="title" class="form-control-lg" placeholder="Enter User Name..." />
        </div>
    </body>
</html>

<script>

var path = "{{ url('typeahead_autocomplete/action') }}";

$('#title').typeahead({

    source: function(query, process){

        return $.get(path, {query:query}, function(data){

            return process(data);

        });

    }

});

</script>
