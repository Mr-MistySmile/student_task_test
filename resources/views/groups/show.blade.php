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
                <label for="disabledTextInput">Номер группы</label>
                <input type="text" value="{{$group->title}}" placeholder="{{$group->title}}" name="title">
              </div>
              <div>
                <label for="disabledTextInput">Название</label>
                <input type="text" value="{{$group->description}}" placeholder="{{$group->description}}" name="description">
              </div>
              <div>
                  <label for="disabledTextInput">Описание группы</label>
                  <input type="text" value="{{$group->average_math}}" placeholder="{{$group->average_math}}" name="average_math">
                </div>
                <div>
                    <label for="disabledTextInput">Куратор</label>
                    <input type="text" value="{{$group->average_rus}}" placeholder="{{$group->average_rus}}" name="average_rus">
                  </div>
                  <div>
                      <label for="disabledTextInput">Номер телефона куратора</label>
                      <input type="text" value="{{$group->average_eng}}" placeholder="{{$group->average_eng}}" name="average_eng">
                    </div>
            <div class="input-group-prepend">
             
              <button class="btn btn-outline-info" type="submit">Принять изменения</button></div>
            </div>
          </td>
        </form>
      </tr>
    </tbody>
</table>

@endsection