@extends('layouts.main')
@section('content')
<div class="row justify-content-center ">

   <div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="card-title text-center border-bottom">
                <h2 class="text-blue">AI Image generator</h2>
            </div>
            @include('error')
            <form action="{{ route('image')}}" method="POST">
                 {{ csrf_field() }}
                <div class="mb-3 text-center">
                    <label for="text" class="form-label">insert a description for image</label>
                    <input type="text" class="form-control" name="text" id="text" value="{{ old('text')}}" placeholder="Example:a fox driving car" autofocus>
                </div>
                <div class="mb-3 text-center">
                    <label for="size" class="form-label">select image size</label>

                    <select class="form-select" id="size" name="size">
                        <option selected>select image size</option>
                        <option value="sm">small</option>
                        <option value="md">medium</option>
                        <option value="lg">lg</option>
                      </select>
                </div>
                <input type="submit" class="btn w-100 btn-primary" value="Generate Image">
            </form>
        </div>
    </div>
   </div>
</div>
@endsection
