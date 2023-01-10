@component('components.header')
    @slot('page')
        Blog.io | Home
    @endslot
@endcomponent
    <section id="home">
        @foreach ($data as $d)
        <div class="homeNew">
            <div class="l-content-new">
                <div class="date">{{date("d/m/Y H:i", strtotime($d['updated_at']))}}</div>
                <div class="title"><a style=" color: var(--white); " href="http://localhost/blog-laravel/public/new/{{$d['id']}}"><h1>{{$d['title']}}</h1></a></div>
                <div class="author"><i class="fa fa-user"></i>{{$d['user_name']}}</div>
            </div>
        </div>
    @endforeach
    </section>

    <section id="populars">
        <div class="section-title">
            <div>
                <div class="text">
                    <i class="fa fa-fire"></i>
                    <h4>Populares</h4>
                </div>
                <div class="hr"></div>
            </div>
        </div>
        <div class="container-populars">
            <main>
                <div class="cn-container">
                    <div class="common-new">
                        <div class="cn-image-area"><img src="" alt=""></div>
                        <div class="cn-content-area">
                            <div class="title"><a href=""><h2>--</h2></a></div>
                            <div class="subtitle"><p>--</p></div>
                            <div class="author"><i class="fa fa-user"></i>--</div>
                            <div class="date">
                                --/--/-- --:--:--
                            </div>
                        </div>
                    </div>
                </div>
                <button class="primary-button load-more">Carregar mais</button>
            </main>
            <aside>

            </aside>
        </div>
    </section>
    <x-slot name="homeNew">
        @foreach ($data as $d)
            <div class="homeNew">
                <div class="l-content-new">
                    <div class="date">{{date("d/m/Y H:i", strtotime($d['updated_at']))}}</div>
                    <div class="title"><a style=" color: var(--white); " href="http://localhost/blog-laravel/public/new/{{$d['id']}}"><h1>{{$d['title']}}</h1></a></div>
                    <div class="author"><i class="fa fa-user"></i>{{$d['user_name']}}</div>
                </div>
            </div>
        @endforeach
    </x-slot>
@component('components.footer')
    @slot('script')
        http://localhost/blog-laravel/public/assets/js/renderNewsHome.js
    @endslot
@endcomponent
