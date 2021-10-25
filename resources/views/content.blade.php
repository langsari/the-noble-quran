@extends('layouts.master')
@section('content')

@foreach($qurans as $quran)
{{$quran->AyahText}}

@endforeach
555555+
@endsection
