@extends ('_layout')

@section ('content')
	<form action = "{{ route ('groups.store') }}" method = "POST">
	 	@csrf
	  	<div class="input-group-prepend">
	    	<span class="input-group-text">Добавление группы</span>
	  	</div>
	  	<div style="width: 300px">
	 		<input type="text" aria-label="Название группы" class="form-control" placeholder="Введите название группы" name='title'>
	  		<input type="text" aria-label="Описание группы" class="form-control" placeholder="Введите описание группы" name="description">
	  		<div><button class="btn btn-outline-success" type="submit">Добавить</button></div>
	  	</div>
	</form>
@endsection