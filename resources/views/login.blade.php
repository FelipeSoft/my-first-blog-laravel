<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="http://localhost/blog-laravel/public/assets/css/style.css">
</head>
<body>
    <div class="container-register-form">
        <form action="http://localhost/blog-laravel/public/login" method="POST" id="login-form">
            @csrf
            <h3>LOGIN</h3>
                
            <input type="email" name="email" placeholder="Email" data-rules="required|email">
    
            <input type="password" name="password" placeholder="Senha" data-rules="required|min=6">
    
            <div class="duplicate_email">{{$error ?? null}}</div>

            <button class="primary-button">ENTRAR</button>
        </form>
        <p>Ainda não possui uma conta? <a href="http://localhost/blog-laravel/public/register"><span>Registre-se.</span></a></p>
    </div>
    <script src="http://localhost/blog-laravel/public/assets/js/loginFormValidation.js"></script>
</body>
</html>