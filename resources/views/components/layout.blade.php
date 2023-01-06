@component('components.header')

@endcomponent
    <section id="home">
        {{$large ?? null}}
        {{$small ?? null}}
        {{$small ?? null}}
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
@component('components.footer')
    @slot('script')
    http://localhost/blog-laravel/public/assets/js/renderNewsHome.js
    @endslot
@endcomponent
