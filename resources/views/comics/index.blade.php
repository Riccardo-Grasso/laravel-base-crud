@extends('layouts.layout_default')

@section('page-title', 'DC Comics - Comics')

@section('content')
<div class="container pb-3">
    <div class="comics-container">
        <div class="current-series">CURRENT SERIES</div>
            <div class="row row-cols-6 mt-3 w-100">                
                @foreach($comics as $comic)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $comic->thumb ?? 'https://picsum.photos/200' }}"
                            class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic["title"] }}</h5>
                                <p class="card-text">{{ $comic->description }}</p>

                            </div>
                            <div class="comic-info">
                                
                                <hr>
                                <p class="card-text"><strong>Prezzo:</strong>  {{ $comic->price }}$</p>
                                <p class="card-text"><strong>Serie: </strong> {{ $comic->series }}</p>
                                <p class="card-text"><strong>Uscita:</strong> {{ $comic->sale_date }}.</p>
                                <p class="card-text">{{ $comic->type }}</p>
                                <a href="{{ route('comics.show', $comic->id) }}" class="card-link">Dettagli</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>      
    </div>
    <div class="d-flex justify-content-center mb-3">
        <a href="{{route('comics.create')}}">
            <button type="button" class="btn btn-success">+ Add Comic</button>
        </a>
    </div>
    <div class="row">
        <div class="load-more">
          <a href="#">LOAD MORE</a>
        </div>
      </div>  
</div>
@endsection