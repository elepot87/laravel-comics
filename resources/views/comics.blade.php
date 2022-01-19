@extends('layouts.main')

@section('main-content')
    <div class="products">
        <div class="container flex">
            {{-- <div class="title">
                <h1 class="text-title">Current series</h1>
            </div> --}}
            <ul class="container-comics flex no-list-style">
               <li>
                   @foreach ($comics as $comic)
                   <div class="card">
                        <div class="container-img">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                        </div>
                        <div class="title-comics">
                            {{$comic['title']}}
                        </div>
                    </div>                    
                   @endforeach
               </li>
            </ul>
            <button class="loader">Load more</button>
        </div>
    </div>
  
@endsection
