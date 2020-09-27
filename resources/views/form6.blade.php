{{-- imported style --}}
@extends("style")

{{-- header --}}
@section("title")

    @include("partials/header")

@endsection

{{-- warning and form for 6 --}}
@section("content")
   
    @include("partials/warning")

   @include("partials/form6players")
   
@endsection