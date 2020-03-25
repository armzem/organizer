@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary" href="{{ url('/admin/category/create') }}">Nauja kategorija</a>
            <br><br>
            <div class="card">
                <div class="card-header">
                    Nauja prekė
                </div>
                <div class="card-body">

                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                        {{ $error }}<br/>
                        @endforeach
                        <br/>
                    @endif

                    <form action="{{ url('/admin/product') }}" method="POST">
                        {{ csrf_field() }}
                        <label>Kategorija</label>
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ ucfirst($category->title) }}</option>
                            @endforeach
                        </select>
                        <div class="form-group">
                            <label>Prekės pavadinimas</label>
                            <input type="text" name="name" class="form-control" placeholder="Pavadinimas" required>
                        </div>
                        <div class="form-group">
                            <label>Prekės aprašymas</label>
                            <textarea name="description" class="form-control" placeholder="Prekės aprašymas" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Prekės kaina (€‎)</label>
                            <input type="number" name="price" class="form-control" placeholder="Kaina" step=".01" required>
                        </div>
                        <div class="form-group">
                            <label>Prekės kiekis (vnt).</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Kiekis" required>
                        </div>
                        <button type="submit" class="btn btn-success mb-2">Saugoti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection