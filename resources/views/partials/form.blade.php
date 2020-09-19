@extends('style')

    
    @section("title")
    
    @section("content")
        <h1>Player's name</h1>
    
        <form method="post" class="form card">
                <h2 class="card-header">Join us</h2>
                    <fieldset class="card-body">
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
                    </fieldset>
                    <div class="card-footer text-right">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>
    @endsection