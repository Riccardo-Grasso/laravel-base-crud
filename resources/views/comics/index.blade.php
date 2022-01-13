@extends('layouts.layout_default')

@section('page-title', 'DC Comics - Comics')

@section('content')
<div class="container pb-3">
    <div class="comics-container">
        <div class="current-series">CURRENT SERIES</div>
        @if(session("msg"))
        <div class="alert alert-success">{{session("msg")}}</div>
        @endif
            <div class="row row-cols-3 mt-3 w-100">                
                @foreach($comics as $comic)
                        <div class="col">
                        <div class="card">
                            <div class="img-comic-container">
                                <img src="{{ $comic->thumb ?? 'https://picsum.photos/200' }}" class="card-img-top" alt="...">
                            </div>
                            
                            <div class="card-body border-bottom">
                                <h5 class="card-title mb-0">{{ $comic["title"] }}</h5>
                                {{-- <p class="card-text">{{ mb_strimwidth( $comic->description , 0, 150, "...") }}</p> --}}

                            </div>
                            <div class="comic-info">
                                <div class="p-2">
                                    <p class="card-text"><strong>Prezzo:</strong>  {{ $comic->price }}$</p>
                                    <p class="card-text"><strong>Serie: </strong> {{ $comic->series }}</p>
                                    <p class="card-text"><strong>Uscita:</strong> {{ $comic->sale_date }}</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <a href="{{ route('comics.show', $comic->id) }}" class="card-link text-decoration-none">Dettagli</a>
                                            <a href="{{ route('comics.edit', $comic->id) }}" class="card-link text-decoration-none">Modifica</a>
                                        </div>
                                        
                                        @include('partials.delete_btn')
                                    </div>
                                    
                                </div>

                            </div>

                        </div>
                    </div>
{{--                     <div class="col mb-4">
                        <div class="comic-container">
                                <div class="img-container">
                                     
                                    <img src="{{ $comic["thumb"]}}" alt="comic-image" />
                                
                                </div>
                            
                            <h6 class="comic-text">{{ $comic["title"]}}</h6>
                            <p class="comic-text"><strong>Prezzo:</strong>  {{ $comic->price }}$</p>
                            <p class="comic-text"><strong>Serie: </strong> {{ $comic->series }}</p>
                            <p class="comic-text"><strong>Uscita:</strong> {{ $comic->sale_date }}.</p>
                            <a href="{{ route('comics.show', $comic->id) }}" class="card-link">Dettagli</a>
                        </div>
                    </div> --}}
                @endforeach
            </div>      
    </div>
    <div class="d-flex justify-content-center mb-3">
        <a href="{{route('comics.create')}}">
            <button type="button" class="btn btn-success">+ Add Comics</button>
        </a>
    </div>
    <div class="row">
        <div class="load-more">
          <a href="#">LOAD MORE</a>
        </div>
      </div>  
</div>
@endsection