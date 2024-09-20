<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
</head>
<body>
    <h1>Registrar Usuário</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name') {{ $message }} @enderror
        <br />
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        @error('email') {{ $message }} @enderror
        <br />
        <label for="password">Senha</label>
        <input type="password" name="password" id="password">
        @error('password') {{ $message }} @enderror
        <br />
        <label for="confirmation_password">Confirme a senha</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br />
        <input type="submit" value="Registrar">
    </form>
</body>
</html>