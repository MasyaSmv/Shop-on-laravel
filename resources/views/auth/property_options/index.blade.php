@extends('auth.layouts.master')

@section('title', 'Варианты свойства')

@section('content')
		<div class="row justify-content-center">
			<div class="col-md-12">
				<h1>Варианты свойства</h1>
				<table class="table">
					<tbody>
					<tr>
						<th>
							#
						</th>
						<th>
							Название
						</th>
						<th>
							Действия
						</th>
					</tr>
					@foreach($propertyOptions as $propertyOption)
						<tr>
							<td>{{ $propertyOption -> id }}</td>
							<td>{{ $propertyOption -> name }}</td>
							<td>
								<div class="btn-group" role="group">
									<form action="{{ route('property-option.destroy', $propertyOption) }}" method="POST">
										<a class="btn btn-success" type="button" href="{{ route('property-option.show', $propertyOption) }}">Открыть</a>
										<a class="btn btn-warning" type="button" href="{{ route('property-option.edit', $propertyOption) }}">Редактировать</a>
										@csrf
										@method('DELETE')
										<input class="btn btn-danger" type="submit" value="Удалить"></form>
								</div>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
                {{ $propertyOptions->links() }}
				<a class="btn btn-success" type="button" href="{{ route('property-options.create') }}">Добавить вариант свойств</a>
			</div>
		</div>
@endsection
