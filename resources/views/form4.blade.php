{{-- importing style --}}
@extends("style")

{{-- header --}}
@section("title")

    @include("partials/header")

@endsection

{{-- form for 4 players --}}
@section("content")
   
   @include("partials/form4players")
   
@endsection