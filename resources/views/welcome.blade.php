{{-- style imported --}}
@extends("style")

{{-- header sectio  --}}
@section("title")

    @include("partials/header")

@endsection

{{-- content - home and instructions --}}
@section("content")

        @include("partials/home")

        @include("partials/warning")

@endsection