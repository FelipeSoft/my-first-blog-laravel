<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="http://localhost/blog-laravel/public/assets/css/style.css">
</head>
<body>
    <div class="container-register-form">
        <form action="http://localhost/blog-laravel/public/register" method="POST" id="register-form">
            @csrf
            <h3>REGISTRO</h3>
            
            <input type="text" name="name" placeholder="Nome de usuário" data-rules="required|name|min=2">
    
            <input type="email" name="email" placeholder="Email" data-rules="required|email">
    
            <input type="password" placeholder="Senha" data-rules="required|password|min=6">
    
            <input type="password" name="password" placeholder="Confirme a senha" data-rules="required|password|min=6">
            <div class="passwordConfirmErrorArea"></div>
            <div class="duplicate_email">{{$error ?? null}}</div>

            <button class="primary-button">REGISTRAR</button>
        </form>
    </div>
    <script src="http://localhost/blog-laravel/public/assets/js/registerFormValidation.js"></script>
</body>
</html>