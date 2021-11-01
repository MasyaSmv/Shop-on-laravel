@extends('auth.layouts.master')

@isset($property)
    @section('title', 'Редактировать свойства ' . $property->name)
@else
    @section('title', 'Создать свойство')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($property)
            <h1>Редактировать свойство <b>{{ $property->name }}</b></h1>
                @else
                    <h1>Добавить свойство</h1>
                @endisset

                <form method="POST" enctype="multipart/form-data"
                      @isset($property)
                      action="{{ route('properties.update', $property) }}"
                      @else
                      action="{{ route('properties.store') }}"
                    @endisset
                >
                    <div>
                        @isset($property)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">Название: </label>
                            <div class="col-sm-6">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name" id="name"
                                       value="@isset($property){{ $property->name }}@endisset">
                            </div>
                        </div>

                            <br>
                            <div class="input-group row">
                                <label for="name" class="col-sm-2 col-form-label">Название en: </label>
                                <div class="col-sm-6">
                                    @error('name_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="name_en" id="name_en"
                                           value="@isset($property){{ $property->name_en }}@endisset">
                                </div>
                            </div>

                            {{-- <br>
                        <div class="input-group row">
                            <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                            <div class="col-sm-6">
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
							<textarea name="description" id="description" cols="72"
                                      rows="7">@isset($property){{ $property->description }}@endisset</textarea>
                            </div>
                        </div>
                        <br>

                            <div class="input-group row">
                                <label for="description" class="col-sm-2 col-form-label">Описание en: </label>
                                <div class="col-sm-6">
                                    @error('description_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <textarea name="description_en" id="description_en" cols="72"
                                              rows="7">@isset($property){{ $property->description_en }}@endisset</textarea>
                                </div>
                            </div>
                            <br> --}}

                        {{-- <div class="input-group row">
                            <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                            <div class="col-sm-10">
                                <label class="btn btn-default btn-file">
                                    Загрузить <input type="file" style="display: none;" name="image" id="image">
                                </label>
                            </div>
                        </div> --}}

                        <button class="btn btn-success">Сохранить</button>
                    </div>
                </form>
    </div>
@endsection
