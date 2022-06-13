@include('layouts.header')
@include('layouts.nav')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1>Registrar Usuário</h1>
        <form action="{{ route('confirm.register') }}" method="POST" class="form-group">
            @csrf
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control my-3">

            <label for="email">Email</label>
            <input type="text" name="email" class="form-control my-3">

            <label for="age">Idade</label>
            <input type="number" name="age" class="form-control my-3">

            <label for="country">País</label>
            <input type="text" name="country" class="form-control my-3">

            <input type="submit" value="Cadastrar" class="btn btn-dark my-3">
        </form>
    </div>
</div>

@include('layouts.footer')
