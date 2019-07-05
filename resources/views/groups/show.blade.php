@extends ('_layout')

@section ('content')

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" width="">Данные группы</th>
      </tr>
    </thead>
    <tbody>
      <tr  width="120">
        <form action = "{{ route ('groups.edit', $group) }}" method = "GET">
          <td width="400">
            <div>
              <div>
                <label for="disabledTextInput">Название группы</label>
                <input type="text" value="{{$group->title}}" placeholder="{{$group->title}}" name="title">
              </div>
              <div>
                <label for="disabledTextInput">Описание группы</label>
                <input type="text" value="{{$group->description}}" placeholder="{{$group->description}}" name="description">
              </div>
            <div class="input-group-prepend">
              <span class="input-group-text">Принять изменения</span>
              <button class="btn btn-outline-info" type="submit">~</button></div>
            </div>
          </td>
        </form>
      </tr>
    </tbody>
</table>

@endsection