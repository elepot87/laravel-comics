@extends('layouts.main')

@section('head-title', 'Comic Detail | DC Comics' )

@section('main-content')

    <h1>{{$comic['title']}}</h1>
    <figure>
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    </figure>
    <div class="description">
        {{$comic['description']}}
    </div>
    <div class="writers">
        @foreach ($comic['writers'] as $writer)
            {{$writer}}
        @endforeach     
    </div>

@endsection