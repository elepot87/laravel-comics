<header>
    <div class="container flex flex-start">
      <a href="{{route('home')}}" class="mr-50 link-logo">
        <img src="{{asset('images/dc-logo.png')}}" alt="DC logo" class="img-logo"/>
      </a>
      <nav class="nav-menu">
        <ul class="main-menu flex no-list-style">
            <li class="menu-item">
                <a href="{{route('comics')}}" 
                @if (Request::route()->getName() === 'comics')
                    class="item-active"
                @endif
                >
                    Comics
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('news')}}"
                @if (Request::route()->getName() === 'news')
                    class="item-active"
                @endif
                >
                    News
                </a>
            </li>
        </ul>
    </nav>
    {{-- @dump(Request::route()->getName()) --}}
 </div>
</header>