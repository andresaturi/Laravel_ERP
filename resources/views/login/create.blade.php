@if($errors->any())
    @foreach ($errors as $error)
        <p>{{ $error }}</p>    <br>
    @endforeach
@endif
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    nome: <br> <input type="text" name="name">
    Email: <br> <input type="email" name="email">
    Senha: <br> <input type="password" name="password">
    <button type="submit">Cadastrar</button>
</form>