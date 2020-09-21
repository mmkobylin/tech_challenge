@extends("style")

{{-- @extends("title")  --}}
{{-- @extends("header") --}}

@section("title")

    @include("partials/header")

@endsection

@section("content")
   
   @include("partials/form._logic")
   @include("partials/name_box")

@endsection