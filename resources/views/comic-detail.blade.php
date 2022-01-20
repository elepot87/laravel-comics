@extends('layouts.main')

@section('head-title', 'Comic Detail | DC Comics' )

@section('main-content')

    <section class="jumbotron">
            <div class="cover">
                <div class="text">
                    Comic Book
                </div>
                <figure>
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            </figure>
            <div class="cta">
                <a href="{{route('comics')}}">
                    View Gallery
                </a>
                </div>
            </div>
    </section>
    <section class="container-cover">
        <div class="info">
            <h1 class="title-comic">{{$comic['title']}}</h1>
        </div>
        <div class="adv">
            ciao adv
        </div>
    </section>

    {{-- <h1>{{$comic['title']}}</h1>
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
    </div> --}}

@endsection