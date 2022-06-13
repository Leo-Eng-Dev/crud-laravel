@include('layouts.header')

@include('layouts.nav')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div class="">
            <table class="table table-striped">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>País</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->country }}</td>
                    <td><a href="{{ route('edit.id', ['id' => $user->id]) }}"><i class="fa fa-pen-to-square"></i>Editar</a></td>
                    <td><a href="{{ route('delete', ['id' => $user->id]) }}"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@include('layouts.footer')
