@extends('layouts.main')
@section('content')
<section class="text-center text-white">
    <h3>heres your image</h3>
    <figure>
    <img src="{{ $url }}" alt="{{ $text }}"  class="img-thumbnail img-fluid">
      <figcaption class="h5 mt-3">{{ $text }}</figcaption>
   </figure>
   <div>
    <a class="btn btn-secondary" href="{{ route('api')}}">back to home</a>
    <button onclick="window.location.reload()" class="btn btn-warning">re generate</button>
   </div>
</section>
@endsection
