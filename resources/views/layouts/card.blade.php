<div class="product-item">
    <img src="{{ Storage::url($product->image) }}">
    <div class="product-list">
      <h2>{{ $product -> name }}</h2>
      <h3>{{ $product -> category -> name }}</h3>
        <span class="price">{{ $product -> price }}</span>
        <form action="{{ route('basket-add', $product) }}" method="POST">
            <button type="submit" role="button" class="btn btn-danger">В корзину</button>
            <a href="{{ route('product', [$product -> category -> code, $product -> code]) }}" class="button">Подробнее</a>
            @csrf
        </form>
    </div>
  </div>
