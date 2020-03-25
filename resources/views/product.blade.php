@extends('layouts.app')

@section('content')
<div class="container product-card">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Prekės kortelė</h5>
                </div>
                <div class="card-body">
                    <h6 class="category-title">Kategorija: </h6><a href="{{ url('/home/' . $product->category_url ) }}">{{ ucfirst($product->category) }}</a>
                    <hr>
                    <div class="product-data">
                        <h5>Pavadinimas:</h5>
                        <span>{{ $product->name }}</span>
                    </div>
                    <div class="product-data">
                        <h5>Aprašymas:</h5>
                        <span>{{ $product->description }}</span>
                    </div>
                    <div class="product-data">
                        <h5>Kaina:</h5><span>{{ $product->price }} €‎</span>
                    </div>
                    <div class="product-data">
                        <h5>Likutis:</h5>
                        <span>{{ $product->quantity }} vnt.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection