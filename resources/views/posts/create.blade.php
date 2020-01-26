@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/posts" enctype="multipart/form-data" method="post">
        @csrf 

        <div class="row">
            <div class="col-6 offset-3">
                <div class="row">
                    <h3>
                        Make new Post
                    </h3>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption:</label>
                    <input id="caption" 
                    type="text" 
                    class="form-control @error('caption') is-invalid @enderror" 
                    name="caption" value="{{ old('caption') }}" 
                    autocomplete="caption">

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Post image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror 
                </div>


                <div class="form-group row">
                    <button type="submit" class="btn btn-primary">Add New Post</button>
                </div>          
            </div>
        </div>
    </form>
</div>

<style>
</style>
@endsection
