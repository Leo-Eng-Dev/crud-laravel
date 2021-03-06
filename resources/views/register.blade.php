@include('layouts.header')
@include('layouts.nav')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1>Registrar Usuário</h1>
        @if(session('message'))
            <ul>
                <li class="text-success">{{ session('message') }}</li>
            </ul>
        @endif
        <form action="{{ route('confirm.register') }}" method="POST" class="form-group">
            @csrf
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control my-3" value="{{ old('name') }}">

            <label for="email">Email</label>
            <input type="text" name="email" class="form-control my-3" value="{{ old('email') }}">

            <label for="age">Idade</label>
            <input type="text" name="age" class="form-control my-3" value="{{ old('age') }}">

            <label for="country">País</label>
            <input type="text" name="country" class="form-control my-3" value="{{ old('country') }}">

            <input type="submit" value="Cadastrar" class="btn btn-dark my-3">
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
