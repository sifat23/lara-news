@extends ('app.header')

@section ('content')
    <div class="container main-window">
        <div class="row">
            <div class="col-md-3 no-padding-right">
                @include ('includes.sidebar-left')
            </div>
            <div class="col-md-7 no-padding">
                @include('pages.main')
            </div>
            <div class="col-md-2 no-padding-left">
                @include('includes.sidebar-right')
            </div>
        </div>
    </div>
@endsection
