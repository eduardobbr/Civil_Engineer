<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Civil Enginner</title>

    <!-- links -->
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Trade+Winds&display=swap" rel="stylesheet">
</head>

<body>



    <!-- IMAGEM FUNDO -->
    <img src="img\arranjo-de-vista-superior-com-itens-de-construcao.jpg" alt="background">

    <!-- MAIN -->

    <main>

        <h2>Civil Engineer</h2>

        <form action="{{ url('/login') }}" id="loginUsuario" method="post">
            @csrf
            <h3>Login</h3>
            <br>
            <label for="email">Email:</label>
            <input id="email" type="email" name="email" placeholder="Informe seu email" required>

            <label for="senha">Senha:</label>
            <input id="senha" type="password" name="senha" placeholder="Informe sua senha" required>

            <input type="submit" id="EnviarLogin" value="Login">
        </form>

    </main>


    <!-- FOOTER -->

    <footer>
        <p>&copy;2024 - Todos os direitos reservados</p>
    </footer>

</body>

</html>
