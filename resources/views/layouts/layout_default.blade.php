<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    @include("partials.head_scripts")

</head>
<body>
    @include("partials.the_header")

    <main class="content-container">
        <div class="jumbotron">
            <img src="{{asset("img/jumbotron.jpg")}}" alt="jumbo-img" />
          </div>
        @yield('content')
    </main>

    @include("partials.the_footer")
</body>
</html>