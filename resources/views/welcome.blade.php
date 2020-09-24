@extends("style")

{{-- @extends("title")  --}}
{{-- @extends("header") --}}


@section("content")
   
   @include("partials/simple_form")
    @include("partials/formVS3")

   {{-- @include("partials/name_box") --}}

@endsection