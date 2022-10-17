@extends('notes.layout')


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
      <h2>Edit</h2>
          <a href ="{{ route('notes.index') }}" class ="btn btn-success my-3">Back</a>
    </div>      
</div> 

@if ($errors->any())
 <div class="alert alert-danger">
     <strong>Ops!</strong>
     Something Wrong! <br><br>
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('notes.update', $note->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="row">
    <div class ="col-md-12">
        <div class="form-group">
            <strong>Title : </strong>
            <input type="text" name="title" value="{{ $note->title }}" class="form-control" placeholder="Input Title">
        </div>
    </div>   

    <div class ="col-md-12">
        <div class="form-group">
            <strong>Discriptions : </strong>
            <textarea class="form-control" style="height: 150px" name="description" placeholder="Input Discriptions">{{ $note->description }}</textarea>
        </div>
    </div>

    <div class ="col-md-12">
     <button type="submit" class ="btn btn-success my-3">Edit</button> 
   </div>
</div>
</form>

@endsection