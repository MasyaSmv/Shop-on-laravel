@extends('master')

@section('title', 'Главная')

@section('content')

<div class="row">

    @foreach ($products as $product)

    @include('card', compact('product'))

    @endforeach

</div>

@endsection
