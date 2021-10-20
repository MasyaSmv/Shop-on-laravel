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
        <form action="{{ route('basket-add', $product) }}" method="POST">
            @if ($product -> isAvailable())
            <button type="submit" role="button" class="btn btn-success">В корзину</button>
            @else
            Не доступен
            @endif
            @csrf
        </form>
    </div>
</div>
</div>



@endsection
