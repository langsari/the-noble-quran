@extends('quran.navbar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Search with pagination</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css')}}">
    
</head>
   
<style>
    .highlight{ 
  background:#00FF00; 
  padding:1px; 
  border:#00CC00 dotted 1px; 
}
</style>

<body>
    <div class="container">
       <div class="row">
          <div class="col-md-12" style="margin-top:40px">
          <br>
          <br>
             <h4> ค้นหาในอัลกุรอาน...</h4><hr>
             <body>
             <form action="{{ route('web.find') }}" method="GET">
        
                <div class="form-group">
                   <label for="">ค้นหา</label>
                   <input type="text" class="form-control" name="query" placeholder="ค้นหา....." value="{{ request()->input('query') }}">
                   <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                 <button type="submit" class="btn btn-primary">ค้นหา</button>
                </div>
                
             </form>
           
             <hr>
             <br>
             
             @if(isset($texts))

               <table class="table table table-bordered ">
                   <thead>
                   <tr class="table-success">
       
        <th style="width:10%" scope="col">ผลการค้นหา</th>
      
        
     </tr> 
                   </thead>
                   <tbody>
                       
                   @if(count($texts) > 0)
                           @foreach($texts as $text)
                              <tr>
                            
                              
                                  <td><a href="{{ route('arabic',$text->id) }}" class="link-dark">
                                    {{$text->th_name}}[{{$text->datasurah_id}}:{{ $text->ayat}}] </a>
                                   
                                     <br> {{ $text->text }}
                                  <br> {{ $text->Text }}</td>
                            
                                
                                 
                              </tr>
                           @endforeach
                           @else

                          <tr><td>No result found!</td></tr>
                          @endif

                         
               
                   </tbody>
               </table>
               </body>
               <!-- <script>

var path = "{{ url('web.find') }}";

$('#card-text').typeahead({

    source: function(query, process){

        return $.get(path, {query:query}, function(request){

            return process(request);

        });

    }

});

</script> -->

               <div class="pagination-block">
                   <?php //{{ $texts->links('layouts.paginationlinks') }} ?>
                   {{  $texts->appends(request()->input())->links('layouts.paginationlinks') }}
               </div>

             @endif
          </div>
       </div>
    </div>
</body>
</html>
@endsection