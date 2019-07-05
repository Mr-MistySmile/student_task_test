@extends ('_layout')

@section ('content')
	<form action = "{{ route ('groups.store') }}" method = "POST">
	 	@csrf
	  	<div class="input-group-prepend">
	    	<span class="input-group-text">Добавление группы</span>
	  	</div>
	  	<div style="width: 300px">
	 		<input type="text" aria-label="Номер группы" class="form-control" placeholder="Введите номер группы" name='title'>
              <input type="text" aria-label="Название группы" class="form-control" placeholder="Введите название группы" name="description">
              <input type="text" aria-label="Описание группы" class="form-control" placeholder="Введите описание группы" name="average_math">
              <input type="text" aria-label="Куратор группы" class="form-control" placeholder="Введите куратора группы" name="average_rus">
              <input type="text" aria-label="Номер телефона куратора" class="form-control" placeholder="Введите номер телефона куратора" name="average_eng">
	  		<div><button class="btn btn-outline-success" type="submit">Добавить</button></div>
	  	</div>
	</form>
@endsection