@extends('layouts.master')

@section('title', 'Все категории')

@section('content')

<div class="row">
@foreach ($categories as $category)
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>{{$category -> name}}</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$category -> name}}</text></svg>
      <div class="card-body">
        <p class="card-text">{{$category -> description}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="{{ route('category', $category -> code) }}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
            <a type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endforeach
</div>
@endsection
