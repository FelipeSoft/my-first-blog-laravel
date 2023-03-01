<x-header>
    <x-slot name="page">Blog.io | Gestão</x-slot>
</x-header>

<section id="management">
    <x-section-title>
        <x-slot name="title">Publicações</x-slot>
        <x-slot name="icon">
            <i class="fa fa-file"></i>
        </x-slot>
    </x-section-title>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Título</td>
                <td>Subtítulo</td>
                <td>Autor</td>
                <td>Execuções</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td style="text-align:center;">{{$p['id']}}</td>
                    <td>{{$p['title']}}</td>
                    <td>{{$p['subtitle']}}</td>
                    <td>{{$p['author']}}</td>
                    <td>
                        <div>
                            <a href="http://localhost/blog-laravel/public/management/update/{{$p['id']}}"><i class="fa fa-pencil"></i></a>
                            <a href="http://localhost/blog-laravel/public/management/delete/{{$p['id']}}" onclick="return confirm('Deseja realmente excluir essa publicação?')"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<x-footer></x-footer>