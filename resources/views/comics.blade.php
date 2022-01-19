@extends('layouts.main')

@section('main-content')
    <div class="products">
        <div class="container flex">
            {{-- <div class="title">
                <h1 class="text-title">Current series</h1>
            </div> --}}
            
            <ul class="container-comics flex no-list-style">
                <li>
                    ciao
          {{-- <Comics :url="comic.thumb" :title="comic.series" /> --}}
                </li>
                <li>ciao</li>
            </ul>
            <button class="loader">Load more</button>
        </div>
    </div>
@endsection
