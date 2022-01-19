<header>
    <div class="container flex flex-start">
      <a href="{{route('home')}}" class="mr-50">
        <img src="{{asset('images/dc-logo.png')}}" alt="DC logo" />
      </a>
      <nav class="nav-menu">
        <ul class="main-menu flex no-list-style">
            <li class="menu-item active"><a href="{{route('comics')}}">Comics</a></li>
            <li class="menu-item"><a href="{{route('news')}}">News</a></li>
        </ul>
    </nav>
    @dump(Request::route()->getName())
 </div>
</header>