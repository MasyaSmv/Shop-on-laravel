@extends('layouts.master')

@section('title', 'Товар')

@section('content')
<h1>{{ $product->__('name') }}</h1>
<h2>{{ $product->category->name }}</h2>
<p>Цена: <b>{{ $product->price }} руб.</b></p>
<img src="{{ Storage::url($product->image) }}">
<p>{{ $product->description }}</p>

@if($product->isAvailable())
<form action="{{ route('basket-add', $product) }}" method="POST">
    <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
    @csrf
</form>
@else
<span>Не доступен</span>
<br>
<span>Сообщить мне о постоуплении товара</span>
<div class="warning"></div>
@if ($errors->get('email'))
{!! $errors->get('email')[0] !!}
@endif
<form action="{{ route('subscription', $product) }}" method="POST">
    @csrf
    <input type="text" name="email">
    <button type="submit" class="btn btn-warning">Отправить</button>
</form>
@endif
@endsection
