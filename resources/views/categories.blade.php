@extends('layouts.master')

@section('title', __('main.all_categories'))

@section('content')

<div class="row">
    @foreach ($categories as $category)
    <div class="col-md-4 ml-1">
        <div class="card mb-5 shadow-sm">
            <a href="{{ route('category', $category -> code) }}" type="button"
                class="btn btn-sm btn-outline-secondary"><img src="{{ Storage::url($category->image) }}"
                    height="200px"></a>
            <h5 x="50%" y="50%" fill="#eceeef">{{$category->__('name')}}</h5>
            <div class="card-body">
                <p class="card-text">{{$category->__('description') }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
