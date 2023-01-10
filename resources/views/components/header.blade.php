
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{$page ?? 'Blog.io'}}</title>
<link rel="stylesheet" href="http://localhost/blog-laravel/public/assets/css/style.css">
<script src="https://use.fontawesome.com/a443ad607e.js"></script>
<script src="http://localhost/blog-laravel/public/assets/js/main.js" defer></script>
</head>
<body>
<header>
    <div class="container-nav">
        <nav>
            <ul>
                <li><a href="http://localhost/blog-laravel/public/">Home</a></li>
                <li><a href="http://localhost/blog-laravel/public/about">Sobre</a></li>
                <li><a href="http://localhost/blog-laravel/public/technologies">Tecnologias</a></li>
                <li><a href="http://localhost/blog-laravel/public/publish">Publicar</a></li>
            </ul>
        </nav>
        <h1>Blog<span>.io</span></h1>
        <nav>
            <div class="search">
                <form action="http://localhost/blog-laravel/public/" method="POST">
                    @csrf
                    <input type="text" name="topic">
                    <button style="border: 0; background-color: var(--shadow-color); "><i class="fa fa-search"></i></button>
                </form>
            </div>
            <ul>
                <li>
                    <a href="">
                        <button class="primary-button">Entrar</button>
                    </a>
                </li>
                <li>
                    <a href="">
                        <button class="secondary-button">Cadastrar-se</button>
                    </a>
                </li>
            </ul>
            <i id="menu-mobile-icon" class="fa fa-bars"></i>
        </nav>
    </div>
</header>

