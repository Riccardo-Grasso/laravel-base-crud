@extends('layouts.layout_default')

@section('page-title', 'DC Comics - Create Comic')

@section('content')
<div class="container py-5" style="background-color: #3c7bf8">
    <h2 class="">Nuovo Fumetto</h2> 

    <form action="{{route('comics.store')}}" method="post" class="w-50 mx-auto">
        @csrf

        <div class="mb-4">
            <label for="field_title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="field_title" name="title">
        </div>

        <div class="mb-4">
            <label for="field_description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="field_description" name="description">
        </div>

        <div class="mb-4">
            <label for="field_thumb" class="form-label">Copertina</label>
            <input type="text" class="form-control" id="field_thumb" name="thumb">
        </div>

        <div class="mb-4">
            <label for="field_price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="field_price" name="price">
        </div>

        <div class="mb-4">
            <label for="field_series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="field_series" name="series">
        </div>

        <div class="mb-4">
            <label for="field_sale_date" class="form-label">Data di uscita</label>
            <input type="date" class="form-control" id="field_sale_date" name="sale_date">
        </div>

        <div class="mb-4">
            <label for="field_type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="field_type" name="type">
        </div>

        <div>
            <button class="btn btn-danger" type="reset">Cancella</button>
            <button class="btn btn-success" type="submit">Invia</button>
        </div>
    </form>

</div>

@endsection