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

*{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   }
.insearch{
    max-width: 50rem;
    margin-inline: auto;
   
   }
.infosearch{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
   }
.highlight{ 
  background:#00FF00; 
  padding:1px; 
  border:#00CC00 dotted 1px; 
}
.insearch{
  padding: 6px;
  font-size: 23px;
  border: none;
}
.infosearch{
  width: 100%;
  max-width: 700px;
  
  display: flex;
  align-items: center;
  border: 1px solid #91740c3d;
  border-radius: 4px;
  padding: 6px 10px;
  backdrop-filter: blur(4px) saturate(180%);
  color: initial;
   
}
.infosearch:hover{
      background-color: #e4cb6821;
      box-shadow: 0 4px 21px -3px rgba(51,51,51,.15);
      border-color: #EAFAF1;
    }
.infosearch input{
  background: transparent;
  flex: 1;
  border: none;
  outline: none;
  font-size: 20px;
  color: #000;
}
.infosearch button{
   background: transparent;
   width: 25px;
   border: none;
   outline: none;
  color: #666;
}
.thead{
   border: none; 
}
.table {
    border-spacing: 0 10px;
    
}
.boxs{
   height: 100%;
   align-items: center;
   padding: 0 20px 0 20px;   
}
.tbody tr {
    border-top: 0px solid transparent;
    border-bottom: 12px solid transparent;
}
.surahn{
   font-size: 17px;
   justify-content: start;
   color: #48b749;
   font-weight: 600;
   padding-right: 20px;
   font-family: 'Uthmani', serif;
}
.arb{
   font-family: 'Uthmani', serif;
   display: block;
   font-size: 15px;
   font-weight: normal;
   direction: rtl;
   margin-bottom: 6px;
   float: right;
   padding: 0;
   margin: 0 5px 0px 20px;  
}
.tha{
   display: block;
   font-size: 17px;
   color: #959494;
   direction: ltr;
   float: left;  
}
.pagination{
   display: flex;
   text-align: center;
}
</style>

<body>
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-md-10" style=" margin-top:40px">
          <br>
          <br>
             <body>
             <form action="{{ route('web.find') }}" method="GET"> <!-- navbar -->
        
                <div class="insearch form-group">
                  <div class="infosearch">
                   <input type="text"  name="query" placeholder="ค้นหา....." value="{{ request()->input('query') }}">
                   <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                   <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
                  </div>
                </div>
                <!--
                <div class="form-group">
                 <button type="submit" class="btn btn-primary">ค้นหา</button>
                </div>
               -->
             </form>
           
            
             <br>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
             
   @if(isset($texts))

               <table class="table " >
                   <thead>
                   <tr >
       
                <th style="width:10%" scope="col">ผลการค้นหา</th>
                   </tr> 
                </thead>
                
                <tbody>
                       
                   @if(count($texts) > 0)
                           @foreach($texts as $text)
                              <tr class="boxs">
                                    <td>
                                    <br>
                                    <div class="surahn">
                                    {{$text->th_name}}[{{$text->datasurah_id}}:{{ $text->ayat}}] <!-- surah name --> 
                                    </div>
                                    <br>
                                    <div class="arb">
                                    {{ $text->text }} <!-- arbic -->
                                    </div>
<br>
<br>
<br>
                                    <div class="tha">
                                   {{ $text->Text }} <!-- thai -->
                                   </div>
                                 
                                 </td> 
                                    
                             </tr>
                           @endforeach
                           @else

                          <tr><td>No result found!</td></tr>
                          @endif
                        </tbody>
               </table>
               </body>

               
               <div class="pagination-block" >
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