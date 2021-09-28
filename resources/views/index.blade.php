@extends('layouts.master')

@section('title', 'Главная')

@section('content')

<div class="row">

    @foreach ($products as $product)

    @include('layouts.card', compact('product'))

    @endforeach

</div>

@endsection
