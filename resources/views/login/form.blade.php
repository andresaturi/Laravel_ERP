@if($mensagem = Session::get('erro'))
<p class="msg">{{ $mensagem }}</p>
@endif

@if($errors->any())
    @foreach ($errors as $error)
        <p>{{ $error }}</p>    <br>
    @endforeach
@endif
<form action="{{ route('login.auth') }}" method="POST">
    @csrf
    Email: <br> <input type="email" name="email">
    Senha: <br> <input type="password" name="password">
    <input type="checkbox" name="remember">Lembrar-me
    <button type="submit">Entrar</button>
</form>