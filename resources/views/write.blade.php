<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog.io | Publicar</title>
    <link rel="stylesheet" href="http://localhost/blog-laravel/public/assets/css/style.css">
    <script src="https://use.fontawesome.com/a443ad607e.js"></script>
</head>
<body>
    <a href="http://localhost/blog-laravel/public/"><i class="fa fa-chevron-circle-left"></i> Voltar</a>
    <div class="container-publish">
        <form action="http://localhost/blog-laravel/public/publish" method="POST">
            @csrf
            <div>
                <label>Título do Artigo<span>*</span></label>
                <input type="text" name="title" required maxlength="255">

                <label>Subtítulo do Artigo<span> *</span></label>
                <input type="text" name="subtitle" required maxlength="400">

                <label>Corpo do Artigo<span> *</span></label>
                <textarea name="body" required></textarea>
            </div>

            <button class="primary-button">Publicar</button>
        </form>
    </div>
</body>
</html>
