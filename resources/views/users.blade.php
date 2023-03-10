<x-header>
    <x-slot name="page">Blog.io | Gestão</x-slot>
</x-header>

<section id="management">
    <x-section-title>
        <x-slot name="title">Manejamento</x-slot>
        <x-slot name="icon">
            <i class="fa fa-gears"></i>
        </x-slot>
    </x-section-title>
    <nav>
        <ul>
            <li><a style="color: var(--black);" href="http://localhost/blog-laravel/public/management">Publicações</a></li>
            <li><a style="color: var(--red);" href="http://localhost/blog-laravel/public/users">Usuários</a></li>
        </ul>
    </nav>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Senha</td>
                <td>Permissão</td>
                <td>Execuções</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
                <tr>
                    <td style="text-align:center;">{{$u['id']}}</td>
                    <td>{{$u['name']}}</td>
                    <td>{{$u['email']}}</td>
                    <td>{{$u['password']}}</td>
                    <td>{{$u['is_admin']}}</td>
                    <td>
                        <div>
                            <a href="http://localhost/blog-laravel/public/users/update/{{$u['id']}}"><i class="fa fa-pencil"></i></a>
                            <a href="http://localhost/blog-laravel/public/users/delete/{{$u['id']}}" onclick="return confirm('Deseja realmente excluir esse usuário?')"><i class="fa fa-trash"></i></a>
                        </div>    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<x-footer></x-footer>