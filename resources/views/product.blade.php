@extends('layouts.master')

@section('title', 'Товар')

@section('content')

<h1>{{$product -> name }}</h1>
<div class="container">
<div class="product-item">
    <img src="{{ Storage::url($product -> image) }}">
    <div class="product-list">
        <h3>{{ $product -> description }}</h3>
        <p class="price">{{ $product -> price }}</p>
        @if ($product -> isAvailable())
        <a href="{{ route('basket-add', $product) }}" class="btn btn-success">В корзину</a>
        @else
        Не доуступен
        @endif
    </div>
</div>
</div>



@endsection
