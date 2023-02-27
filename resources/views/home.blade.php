<x-header>
    <x-slot name="page">Blog.io | Home</x-slot>
    <x-slot name="search">
        <x-search></x-search>    
    </x-slot>    
</x-header>
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
        <x-section-title>
            <x-slot name="title">Populares</x-slot>
            <x-slot name="icon">
                <i class="fa fa-fire"></i>
            </x-slot>
        </x-section-title>
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
                <x-button>
                    <x-slot name="class">primary-button load-more</x-slot>
                    <x-slot name="title">Carregar mais</x-slot>
                </x-button>
            </main>
            <aside>
                <div class="stay-informed">
                    <h3>Esteja informado</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <x-button>
                        <x-slot name="class">secondary-button</x-slot>
                        <x-slot name="title">Saiba mais</x-slot>
                    </x-button>
                </div>
                <div class="weather">
                    <h3>Clima</h3>
                    <div class="container-weather">
                        <div class="weather-icon-area">
                            <img src="" alt="">
                        </div>
                        <div class="weather-info-area">
                            <div class="weather-appearence">Ensolarado</div>
                            <div class="city-name">Mogi Mirim</div>
                            <div class="weather-date">Qua, 11 de Jan 11h27</div>
                        </div>
                        <div class="weather-other-info-area">
                            <div class="temperature"><p>26</p>ºC</div>
                            <div class="wind">10 km/h</div>
                        </div>
                    </div>
                </div>
                <script src="http://localhost/blog-laravel/public/assets/js/weatherWidget.js"></script>
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
<x-footer>
    <x-slot name="script">
        http://localhost/blog-laravel/public/assets/js/renderNewsHome.js
    </x-slot>
</x-footer>
