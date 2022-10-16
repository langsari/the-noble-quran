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


<div class="row mt-2">
    <div class ="col-md-12">
      
      <h2>Show notes</h2>
          <a href ="{{ route('posts.index') }}" class ="btn btn-primary my-3">Back</a>
    </div>      
</div> 

<div class="row">
    <div class ="card p-3"> 
      <div class ="card-title"> 
        <strong>Title : </strong>
          {{ $post->title}}
      </div>

      <div class ="card-text">   
        <strong>Description : </strong>
          {{ $post->description}}
      </div>  
    </div>  
</div>  
@endsection