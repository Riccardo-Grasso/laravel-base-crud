@extends('layouts.layout_default')

@section('page-title', 'DC Comics - Dettagli #' . $comic->id)

@section('content')

<div class="container">
    @if(session("msg"))
    <div class="alert alert-success">{{session("msg")}}</div>
    @endif
    <div class="nav d-flex align-items-center justify-content-between">
        <div>
            <h1 class="my-4" style="color: white" id="comicTitle">{{$comic->title}}</h1>
        </div>
        <div class="d-flex">
            <div class="me-3">
                <a href="{{ route('comics.edit', $comic->id) }}" class="card-link"><button type="button" class="btn btn-primary">Modifica</button></a>
            {{-- <a href="{{ route('comics.edit', $comic->id) }}" class="card-link"><button type="button" class="btn btn-danger">Elimina</button></a> --}}
            </div>
            <div>
                @include('partials.delete_btn')

            </div>
        </div>
        
    </div>
    
    <div class="comic-container row">
        <div class="col">
            <img src="{{$comic->thumb}}" alt="comic-cover" class="w-100">
        </div>
        <div class="col">
            <p style="color: white">{{$comic->description}}</p>
            <p style="color: white"><strong>Prezzo:</strong> {{ $comic->price }} $</p>
            <p style="color: white"><strong>Serie: </strong> {{ $comic->series }}</p>
            <p style="color: white"><strong>Uscita:</strong> {{ $comic->sale_date}}</p>
            <p style="color: white"><strong>Tipo:</strong> {{ $comic->type}}</p>

        </div>
      
    </div>
    
</div>
    
@endsection