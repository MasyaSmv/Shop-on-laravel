@extends('layouts.master')

@section('title', 'Товар')

@section('content')

<h1>{{$product}}</h1>
<p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make
    it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
<p>
    <a href="#" class="btn btn-primary my-2">Main call to action</a>
    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
</p>
</div>
</section>

<div class="container">
<div class="product-item">
    <img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg">
    <div class="product-list">
        <h3>Маленькое черное платье</h3>
        <span class="price">₽ 1999</span>
        <a href="" class="button">В корзину</a>
    </div>
</div>
</div>



@endsection
