@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3 mb-3">Lista dei prodotti presenti sullo shop:</h3>
                <a href="{{route ('products.create')}}" class="btn btn-info">Inserisci nuovo prodotto</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Dettaglio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->type }}</td>
                                <td>{{ $product->brand }}</td>
                                <td>{{ $product->price }}€</td>
                                <td>
                                    <a href="{{ route('products.show', ['product' => $product->id ] ) }}" class="btn btn-info">
                                        Dettagli
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
