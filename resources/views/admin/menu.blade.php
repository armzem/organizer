@section('admin-menu')
    @if ( Auth::check() )
        @if ( 'admin' == Auth::user()->role )

        <div class="container">
            <div class="row">
            <div class="col-lg-12 ">
                <div class="admin-panel">
                <a class="btn btn-success" href="{{ url('/admin/product/create') }}">Nauja prekė</a>
                <a class="btn btn-primary" href="{{ url('/admin/category/create') }}">Nauja kategorija</a>
                </div>
            </div>
            </div>
        </div>

        @endif
    @endif
@endsection