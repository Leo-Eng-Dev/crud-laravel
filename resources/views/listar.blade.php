@include('layouts.header')

@include('layouts.nav')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div class="">
            @if(session('message'))
                <ul>
                    <li class="text-success">{{ session('message') }}</li>
                </ul>
            @endif
            <form action="{{ route('lista.search') }}" method="post" class="form-group">
                @csrf
                <div class="row mb-3">
                    <div class="col-6">
                    <input class="form-control" type="text" name="search" placeholder="Buscar Usuário" value="">
                </div>
                <div class="col-2">
                    <button class="btn btn-dark" type="submit">Buscar</button>
                </div>
                </div>
            </form>
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
            <hr>
            {{-- Paginação --}}
            <div>
                @if (isset($filter))
                    {{ $users->appends($filter)->links() }}
                @else
                    {{ $users->links() }}
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
            <a href="{{ route('register') }}" class="btn btn-dark my-3">Cadastrar Usuário</a>
        </div>
    </div>
</div>

@include('layouts.footer')
