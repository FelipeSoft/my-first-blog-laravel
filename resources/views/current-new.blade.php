@component('components.header')

@endcomponent

<div class="top-area">
    <div class="container-top-area">
        <div class="section-title">
            <div>
                <i class="fa fa-file"></i>
                <h4>Artigo</h4>
            </div>
            <div class="hr"></div>
        </div>
        <h1>{{$new['title']}}</h1>
        <p>{{$new['subtitle']}}</p>
    </div>
</div>

<section id="currentNew">
    <h1>Título do Tipo 1</h1>
    <p class="paragraph">{{$new['body']}}</p>
    <p class="paragraph">{{$new['body']}}</p>

    <h3>Título do Tipo 2</h3>
    <p class="paragraph">{{$new['body']}}</p>

    <div class="authorArea">
        <p>Artigo escrito por: <strong>{{$new->user->name}}</strong></p>
        <p>Email: <em>{{$new->user->email}}</em></p>
    </div>
</section>

@component('components.footer')

@endcomponent
