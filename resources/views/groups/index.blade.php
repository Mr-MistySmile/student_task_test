@extends ('_layout')

@section ('content')
    <table class="table table-sm">
        <thead>
            <th>Название</th>
            <th>Описание</th>
            <th>Оценка по русскому</th>
            <th>Оценка по математике</th>
            <th>Оценка по английскому</th>
        </thead>
        <tbody>
            <tr>
                @foreach ($groups as $group)
                    <tr>
                        <td><div class="body"> {{ $group->title }}</div></td>
                        <td><div class="body"> {{ $group->description }}</div></td>
                        <td><div class="body"> {{ $group->average_math }}</div></td>
                        <td><div class="body"> {{ $group->average_rus }}</div></td>
                        <td><div class="body"> {{ $group->average_eng }}</div></td>
                        <td>
                            <form action="{{ route('groups.show', $group) }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-id-card"></i>
                                </button>

                            </form>
                        </td>
                        <td>
                            <form action="{{ route('groups.destroy', $group) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('groups.create') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-user-plus"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tr>

        </tbody>
    </table>

@endsection