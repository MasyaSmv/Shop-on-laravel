@extends('layouts.master')

@section('title', 'Оформить заказ')

@section('content')

<div class="starter-template">
    <h1>Podtverdite zakaz</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p>общая стоимость заказа: <b>{{ $order -> getFullPrice() }}</b></p>
            <form action=" {{ route('basket-confirm') }}" method="POST">
                <div>
                    <br>
                    <p>Укажите имя и номер телефона, что бы наш менеджер мог с вами связаться</p>
                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lgoffset-3 col-lg-2">Имя: </label>
                            <div class="col-lg-4">
                                 <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер телефона: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="hidden" name="_token" value="egheiorhgoergkoenk">
                    <br>
                    @csrf
                    <input type="submit" class="btn btn-success" value="Подтвердите заказ">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
