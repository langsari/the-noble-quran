@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    if(auth()->attempt(array('email' => $input['email'],'password' => $input['password']))){
        if (auth()->user()->is_admin ==1 ){
            return redirect()->route('adminhome');
        }else if (auth()->user()->is_admin ==2 ){
            return redirect()->route('approvalhome');
        }else if (auth()->user()->is_admin ==3 ){
            return redirect()->route('staffhome');
        }else {
            return redirect()->route('homeuser');
        }
    }else {
            return redirect()->route('login')->with('error','Invalid email or password');
        }
    }
<div class="row mt-2">
    <div class ="col-md-12">
    <center>
      <h2>Your note</h2>
</center>
          <a href ="{{ route('posts.create')}}" class ="btn btn-dark my-3"> Create a new note </a>
          <a href ="{{ route('homeuser')}}" class ="btn btn-dark my-3"> Al-Quran </a>
    </div>      
</div> 

@if($message = Session::get('success'))
    <div class ="alert alert-success">
        {{$message}}
</div>

@endif

<table class="table table-bordered">

 <tr>
    <th>At</th>
    <th>Section</th>
    <th>Description</th>
    <th width="280px">Action</th>
 </tr>

 @foreach ($data as $key => $value)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->title }}</td>
        <td>{{ Str::limit($value->description, 100) }}</td>
        <td>
          <form action="{{ route('posts.destroy', $value->id) }}" method="post">
             <a href="{{ route('posts.show', $value->id) }}" class="btn btn-primary">Watch</a>
             <a href="{{ route('posts.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
             @csrf
             @method('DELETE')
             <button type="บันทึก" class ="btn btn-danger">Delete</button> 
          </form>
        </td>
    </tr>    
 @endforeach

</table>   

{!! $data->links() !!}

@endsection