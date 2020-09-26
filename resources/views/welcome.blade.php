@extends("style")

@push('head')
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js')}}"></script>
@endpush

@section("title")

    @include("partials/header")

@endsection

@section("content")

        @include("partials/home")

        @include("partials/warning")

@endsection