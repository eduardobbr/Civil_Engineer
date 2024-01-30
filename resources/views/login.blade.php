<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Civil Enginner</title>

    <!-- links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <header>
        <nav>
            <ul>
                <a href="{{ route('dashboard') }}">Home</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('cadastro') }}">Cadastro</a>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <!-- Adicione esta parte para exibir mensagens de erro -->
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            
    <form method="post" action="{{ route('login.authenticate') }}">
            @csrf
            <h2>LOGIN</h2>
            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Entrar</button>
            <p class="no-account">Ainda não tem uma conta? <a href="{{ route('cadastro') }}" style="font-size: 15px; color:rgb(255, 115, 0)">Registre-se</a></p>
        </form>
    </main>


    <footer>
        <p class="rodape-direitos">&copy;2023 - Todos os Direitos Reservados.</p>
    </footer>


    <script>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


</body>

</html>
