@extends('layouts.main')

@section('main-content')
    <div class="products">
        <div class="container flex">
            <ul class="container-comics flex no-list-style">
                @foreach ($comics as $comic)
                <li>
                    <div class="card">
                        <div class="container-img">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                        </div>
                        <div class="title-comics">
                            {{$comic['title']}}
                        </div>
                    </div>      
                </li>                            
                   @endforeach            
            </ul>
            <button class="loader">Load more</button>
        </div>
    </div>
  
@endsection
