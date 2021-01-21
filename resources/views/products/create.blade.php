@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3 mb-3">Inserimento nuovo prodotto:</h3>
                <form class="" action="{{ route('products.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                            <label for="exampleInputEmail1">Tipo</label>
                            <input type="text" name="type" class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputPassword1">Brand</label>
                            <input type="text" name="brand" class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Pigmento</label>
                            <input type="text" name="pigment" class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputPassword1">Quantità</label>
                            <input type="text" name="quantity" class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Descrizione</label>
                            <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputPassword1">Prezzo</label>
                            <input type="text" name="price" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-info">
                        Inserisci dati
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
