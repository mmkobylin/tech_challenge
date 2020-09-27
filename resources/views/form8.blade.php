{{-- import syle --}}
@extends("style")

{{-- header --}}
@section("title")

    @include("partials/header")
    
@endsection

{{-- warning and form for 8 --}}
@section("content")

    @include("partials/warning")
   
    @include("partials/form8players")
   
@endsection