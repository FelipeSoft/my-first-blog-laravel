<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog.io | Editar Usuário</title>
    <link rel="stylesheet" href="http://localhost/blog-laravel/public/assets/css/style.css">
    <script src="https://use.fontawesome.com/a443ad607e.js"></script>
</head>
<body>
    <a href="http://localhost/blog-laravel/public/users"><i class="fa fa-chevron-circle-left"></i> Voltar</a>
    <div class="container-publish">
        <form action="http://localhost/blog-laravel/public/users/update" method="POST">
            @csrf
            <div>
                <input type="number" name="id" hidden value="{{$user['id']}}">

                <label>Nome<span>*</span></label>
                <input type="text" name="name" required maxlength="255" value="{{$user['name']}}">

                <label>Email<span> *</span></label>
                <input type="text" name="email" required maxlength="255" value="{{$user['email']}}">

                <label>Permissão<span> *</span></label>
                
                <select name="is_admin">
                    @if($user['is_admin'] === 1)
                        <option value="Administrador">Administrador</option>
                        <option value="Comum">Comum</option>
                    @else
                        <option value="Comum">Comum</option>
                        <option value="Administrador">Administrador</option>
                    @endif
                </select>
            </div>

            <button class="primary-button">Atualizar</button>
        </form>
    </div>
</body>
</html>
