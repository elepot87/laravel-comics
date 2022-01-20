@extends('layouts.main')

@section('head-title', 'Comic Detail | DC Comics' )

@section('main-content')

    <section class="jumbotron">
            <div class="cover">
                <div class="text">
                    {{$comic['type']}}
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
            <div class="container-info mt-20">
                <div class="info-price-availability">
                    <div class="col-sx">
                        <span class="valuta">U.S. Price:</span>
                         {{$comic['price']}}
                    </div>
                    <div class="col-dx">
                        <div class="availability">
                            Available  
                        </div>
                    </div>
                </div>
                <div class="check">
                    Check availability
                    <i class="fas fa-caret-down icon-toggle"></i>
                </div>
            </div>
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