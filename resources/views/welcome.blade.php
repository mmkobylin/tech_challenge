@extends("style")
@section("title")

    @include("partials/header")

@endsection

@section("content")

   {{-- @if (count($games) === 1)
        @include("partials/form4players")

    @elseif (count($games) > 1)
        @include("partials/form")

    @else --}}
        @include("partials/home")
        @include("partials/form4players")
    {{-- @endif --}}

@endsection