@extends('layouts.master')

@section('title', __('main.category') . $category->__('name'))

@section('content')
<h1>
    {{$category->__('name')}} {{ $category -> products -> count()}}
</h1>
<p class="lead text-muted">{{$category->__('description')}}</p>
<p>
    <a href="#" class="btn btn-primary my-2">Main call to action</a>
    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
</p>
</div>
</section>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach ($category -> products as $product)

            @include('layouts.card', compact('product'))

            @endforeach
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


@endsection
