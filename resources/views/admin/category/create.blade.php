@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Nauja kategorija
                </div>
                <div class="card-body">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                        {{ $error }}<br/>
                        @endforeach
                        <br/>
                    @endif
                    <form action="{{ url('/admin/category') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Kategorijos pavadinimas</label>
                            <input type="text" name="title" class="form-control" placeholder="Kategorijos pavadinimas" required>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Saugoti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection