
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
        <a href="http://localhost/blog-laravel/public/"><h1>Blog<span>.io</span></h1></a>
        <nav>
            {{$search ?? null}}
        <ul>
            @if(Auth::user() !== null)
                <li>
                    <p style="color:var(--white);">Olá, {{Auth::user()->name;}}!</p>
                </li>
                <li>
                    <a href="http://localhost/blog-laravel/public/publish">
                        <x-button>
                            <x-slot name="class">
                                primary-button
                            </x-slot>
                            <x-slot name="title">Nova Publicação</x-slot>
                        </x-button>
                    </a>
                </li>
                @if(Auth::user()->is_admin === 1)
                        <li>
                            <a href="http://localhost/blog-laravel/public/management">
                                <x-button>
                                    <x-slot name="class">
                                        primary-button
                                    </x-slot>
                                    <x-slot name="title">Área do Administrador</x-slot>
                                </x-button>
                            </a>
                        </li>
                    @endif
                <li>
                    <a href="http://localhost/blog-laravel/public/logout">
                        <x-button>
                            <x-slot name="class">
                                secondary-button
                            </x-slot>
                            <x-slot name="title">Sair</x-slot>
                        </x-button>
                    </a>
                </li>
                @else
                <li>
                    <a href="http://localhost/blog-laravel/public/register">
                        <x-button>
                            <x-slot name="class">
                                secondary-button
                            </x-slot>
                            <x-slot name="title">Registrar-se</x-slot>
                        </x-button>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/blog-laravel/public/login">
                        <x-button>
                            <x-slot name="class">
                                primary-button
                            </x-slot>
                            <x-slot name="title">Entrar</x-slot>
                        </x-button>
                    </a>
                </li>
            @endif
        </ul>
            <i id="menu-mobile-icon" class="fa fa-bars"></i>
        </nav>
    </div>
</header>

