@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Dettagli prodotto {{ $product->id }} </h3>
                <ul>
                    <li>Tipo: {{ $product->type }}</li>
                    <li>Brand: {{ $product->brand }}</li>
                    <li>Pigmento: {{ $product->pigment }}</li>
                    <li>Quantità: {{ $product->quantity }}</li>
                    <li>Descrizione: {{ $product->description }}</li>
                    <li>Prezzo: {{ $product->price }}€</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
