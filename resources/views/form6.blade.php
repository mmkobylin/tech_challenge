{{-- imported style --}}
@extends("style")

{{-- header --}}
@section("title")

    @include("partials/header")

@endsection

{{-- form for 6 --}}
@section("content")
   
   @include("partials/form6players")
   
@endsection