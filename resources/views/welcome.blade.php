@extends("style")
@section("title")

    @include("partials/header")

@endsection

@section("content")

   {{-- @if (count($games) === 1)
        @include("partials/form4playeres")

    @elseif (count($games) > 1)
        @include("partials/form")

    @else --}}
        @include("partials/home")
        @include("partials/form")
    {{-- @endif --}}

@endsection