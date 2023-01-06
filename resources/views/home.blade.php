<x-layout page="Blog.io | Home">
    <x-slot name="btn_primary">
        <button class="primary-button">Entrar</button>
    </x-slot>
    <x-slot name="btn_secondary">
        <button class="secondary-button load">Cadastrar-se</button>
    </x-slot>

    <section id="home">
        <div class="largeNew">
            <div class="l-content-new">
                <div class="date">{{date("d/m/Y H:i", strtotime($data[0]['updated_at']))}}</div>
                <div class="title"><h1>{{$data[0]['title']}}</h1></div>
                <div class="author"><i class="fa fa-user"></i>{{$data[0]->user['name']}}</div>
            </div>
        </div>
        <div class="smallNew">
            <div class="l-content-new">
                <div class="date">{{date("d/m/Y H:i", strtotime($data[1]['updated_at']))}}</div>
                <div class="title"><h2>{{$data[1]['title']}}</h2></div>
                <div class="author"><i class="fa fa-user"></i>{{$data[1]->user['name']}}</div>
            </div>
        </div>
    </section>

    <section id="populars">
        <div class="section-title">
            <div>
                <i class="fa fa-fire"></i>
                <h4>Populares</h4>
            </div>
            <div class="hr"></div>
        </div>
        <div class="container-populars">
            <main>
                <div class="cn-container">
                    {{$common ?? null}}
                </div>
                <button class="primary-button load-more">Carregar mais</button>
            </main>
            {{$aside ?? null}}
        </div>
    </section>

    <x-slot name="large">
        <div class="largeNew">
            <div class="l-content-new">
                <div class="date">{{date("d/m/Y H:i", strtotime($data[0]['updated_at']))}}</div>
                <div class="title"><h1>{{$data[0]['title']}}</h1></div>
                <div class="author"><i class="fa fa-user"></i>{{$data[0]->user['name']}}</div>
            </div>
        </div>
    </x-slot>
    <x-slot name="small">
        <div class="smallNew">
            <div class="l-content-new">
                <div class="date">{{date("d/m/Y H:i", strtotime($data[1]['updated_at']))}}</div>
                <div class="title"><h2>{{$data[1]['title']}}</h2></div>
                <div class="author"><i class="fa fa-user"></i>{{$data[1]->user['name']}}</div>
            </div>
        </div>
    </x-slot>
    <x-slot name="small">
        <div class="smallNew">
            <div class="l-content-new">
                <div class="date">{{date("d/m/Y H:i", strtotime($data[2]['updated_at']))}}</div>
                <div class="title"><h2>{{$data[2]['title']}}</h2></div>
                <div class="author"><i class="fa fa-user"></i>{{$data[2]->user['name']}}</div>
            </div>
        </div>
    </x-slot>

    <x-slot name='common'>
        <div class="common-new">
            <div class="cn-image-area"><img src="" alt=""></div>
            <div class="cn-content-area">
                <div class="title"><h2>--</h2></div>
                <div class="subtitle"><p>--</p></div>
                <div class="author"><i class="fa fa-user"></i>--</div>
                <div class="date">
                    --/--/-- --:--:--
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="aside">
        <aside>

        </aside>
    </x-slot>
</x-layout>
