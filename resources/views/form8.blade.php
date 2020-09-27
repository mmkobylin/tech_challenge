{{-- import syle --}}
@extends("style")

{{-- header --}}
@section("title")

    @include("partials/header")
    
@endsection

{{-- form for 8 --}}
@section("content")
   
    @include("partials/form8players")
   
@endsection