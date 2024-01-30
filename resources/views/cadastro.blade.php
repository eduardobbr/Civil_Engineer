<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Civil Enginner</title>

    <!-- links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro.css">
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
            <!-- Adicione esta parte para exibir mensagens de sucesso ou erro -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
        <form method="post" action="{{ route('cadastro.cadastrar') }}">
            @csrf
            <h2>CADASTRO</h2>
            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Cadastrar</button>
            <p class="no-account">Já tem uma conta? <a href="{{ route('login') }}" style="font-size: 15px; color:rgb(255, 115, 0)">Fazer login</a></p>
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
