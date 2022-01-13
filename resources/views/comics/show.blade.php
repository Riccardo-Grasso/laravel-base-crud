@extends('layouts.layout_default')

@section('page-title', 'DC Comics - Dettagli #' . $comic->id)

@section('content')

<div class="container">
    <h1 class="my-4" style="color: white">{{$comic->title}}</h1>
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