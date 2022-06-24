@include('layouts.header')
@include('layouts.nav')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1>Editar Usuário</h1>
        @if(session('message'))
            <ul>
                <li class="text-success">{{ session('message') }}</li>
            </ul>
        @endif
        <form action="{{ route('form.edit.id', ['id' => $userId->id]) }}" method="POST" class="form-group">
            @csrf
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control my-3" value="{{ $userId->name }}">

            <label for="email">Email</label>
            <input type="text" name="email" class="form-control my-3" value="{{ $userId->email }}">

            <label for="age">Idade</label>
            <input type="number" name="age" class="form-control my-3" value="{{ $userId->age }}">

            <label for="country">País</label>
            <input type="text" name="country" class="form-control my-3" value="{{ $userId->country }}">

            <input type="submit" value="Confirmar" class="btn btn-dark my-3">
        </form>
        @if($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <ul>
                        <li class="text-danger">{{ $error }}</li>
                    </ul>
                @endforeach
            </div>
        @endif
    </div>
</div>

@include('layouts.footer')
