@extends('layouts.master')

@section('title', __('main.all_categories'))

@section('content')

<div class="row">
@foreach ($categories as $category)
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <img src="{{ Storage::url($category->image) }}" height="225" >
        <h5 x="50%" y="50%" fill="#eceeef" dy=".3em">{{$category -> name}}</h5>
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
