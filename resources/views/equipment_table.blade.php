@extends('layouts.app')
@include('admin.menu')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-lg-12">
        @if ($categories->count() > 0)
        <div class="btn-group align-items-center category-btn-group">
          <span>Rinktis kategoriją: </span>
          <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle choose-category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kategorija
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ url('/home') }}">Visos prekės</a>
              @foreach ($categories as $category)
                <a class="dropdown-item" href="{{ url('/home/' . $category->category_url ) }}">{{ ucfirst($category->title) }}</a>
              @endforeach
          </div>
        </div>
        @endif
      </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">Kategorija</th>
                  <th scope="col">Pavadinimas</th>
                  <th scope="col">Aprašymas</th>
                  <th scope="col">Kaina</th>
                  <th scope="col">Kiekis</th>
                </tr>
              </thead>
              <tbody>
                @if ($equipment->count() > 0)
                  @foreach ($equipment as $singleProduct)
                  <tr>
                    <th><a href="{{ url('/home/' . $singleProduct->category_url ) }}">{{ ucfirst($singleProduct->category) }}</a></th>
                    <th><a href="{{ url('/home/product/' . $singleProduct->id ) }}">{{ $singleProduct->name }}</a></th>
                    <td>{{ $singleProduct->description }}</td>
                    <td>{{ $singleProduct->price }} €‎</td>
                    <td>{{ $singleProduct->quantity }} vnt.</td>
                  </tr>
                  @endforeach
                @else
                <tr>
                  <td>Duomenų nėra.</td>
                </tr>
                @endif
              </tbody>
            </table>
      </div>
  </div>
</div>
@endsection