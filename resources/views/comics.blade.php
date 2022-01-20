@extends('layouts.main')

@section('head-title', 'Comics | DC Comics' )

@section('main-content')
    <div class="products">
        <div class="container flex">
            <ul class="container-comics flex no-list-style">
                @foreach ($comics as $index => $comic)
                <li>             
                        <div class="card"> 
                              {{-- Aggiunta link --}}
                              <a href="{{route('comic-detail', ['id' => $index])}}">
                                  <div class="container-img">
                                      <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                                  </div>
                                  <div class="title-comics">
                                      {{$comic['series']}}
                                  </div>  
                              </a>
                        </div>                        
                </li>                            
                   @endforeach            
            </ul>
            <button class="loader">Load more</button>
        </div>
    </div>
  
@endsection
