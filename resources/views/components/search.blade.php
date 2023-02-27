<div class="search">
    <form action="http://localhost/blog-laravel/public/" method="POST">
        @csrf
        <input type="text" name="topic">
        <button style="border: 0; background-color: var(--shadow-color); "><i class="fa fa-search"></i></button>
    </form>
</div>