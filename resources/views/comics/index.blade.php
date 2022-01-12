@extends('layouts.layout_default')

@section('page-title', 'DC Comics - Comics')

@section('content')
<div class="container pb-3">
    <div class="comics-container">
        <div class="current-series">CURRENT SERIES</div>
        <div class="row row-cols-6 mt-3">
           {{--  @foreach ($lista_comics as $comic) --}}
               {{--  <div class="card">
                    <img src="{{ $comic["thumb"]}}" class="card-img-top" alt="comic">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic["title"]}}</h5>
                    </div>
                </div> --}}
{{--                 <div class="col mb-4">
                    <div class="comic-container">
                        <a href="{{ route('comics.details', ["id" => $loop->index])}}">
                            <div class="img-container">
                                 
                                <img src="{{ $comic["thumb"]}}" alt="comic-image" />
                            
                            </div>
                        </a>
                        <h6 class="comic-title">{{ $comic["title"]}}</h6>
                    </div>
                </div>
                
            @endforeach --}}
        </div>
    </div>
    <div class="row">
        <div class="load-more">
          <a href="#">LOAD MORE</a>
        </div>
      </div>  
</div>
@endsection