@extends('style')

    
    @section("title")
    
    @section("content")
    
        <form method="get" class="form card">
                    @csrf
                        <div class="form-group @error('title') is-invalid @enderror>
                            @error("first_name")
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                            @enderror
                            <label for="first_name">Player's Name</label>
                            <input id="first_name" name="first_name" class="form-control" value="{{ old("first_name") }}" />
                        </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>
    @endsection