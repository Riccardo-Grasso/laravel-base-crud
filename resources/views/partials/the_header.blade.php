@php
    $navbar_links = [
[
        "link" => "CHARACTERS",
        "route_name" => "characters.index"
],
[
        "link" => "COMICS",
        "route_name" => "comics.index"
],
[
        "link" => "MOVIES",
        "route_name" => "movies.index"
],
[
        "link" => "TV",
        "route_name" => "tv.index"
],
[
        "link" => "GAMES",
        "route_name" => "games.index"
],
[
        "link" => "COLLECTIBLES",
        "route_name" => "collectibles.index"
],
[
        "link" => "VIDEOS",
        "route_name" => "videos.index"
],
[
        "link" => "FANS",
        "route_name" => "fans.index"
],
[
        "link" => "NEWS",
        "route_name" => "news.index"
],
[
        "link" => "SHOP",
        "route_name" => "shop.index"
],
];
$route_name = Request::route()->getName();
@endphp


<div class="upper-nav">
  <div class="container">
    <div class="elements d-flex justify-content-end">
      <div class="element px-3 py-1 fw-bold">DC POWER VISA</div>
      <div class="element px-3 py-1 fw-bold">ADDITIONAL DC SITES</div> 
    </div>
  </div>
</div>

<header>
  <nav class="navbar ">
    <div class="container-fluid">
    <div class="navbar-logo">
      <a class="" href="{{route("home.index")}}">
        <img src= {{asset("img/dc-logo.png")}} alt="DC_Logo" />
      </a>
    </div>
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <ul class="mx-auto mb-2 mb-lg-0">
        @foreach ($navbar_links as $item)
          <li class="navbar-item">
            <a class="nav-link {{$route_name === $item['route_name'] ? 'active' : ''}}"  href="{{route($item["route_name"])}}">{{ $item["link"]}}</a>
          </li> 
        @endforeach
      </ul> 
    </div>
  </nav>
</header>