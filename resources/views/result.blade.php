@component('components.header')

@endcomponent
<section id="searchResult">
    <div class="section-title">
        <div>
            <i class="fa fa-search"></i>
            <h4>Resultado</h4>
        </div>
        <div class="hr"></div>
    </div>
    <div class="container-sr">
        @if($topic->count() === 0)
            @component('components.warning')
                @slot('typed')
                    {{$typed}}
                @endslot
            @endcomponent
        @else
            @foreach ($topic as $t)
                <div class="common-new">
                    <div class="cn-image-area"><img src="" alt=""></div>
                    <div class="cn-content-area">
                        <div class="title"><a href="http://localhost/blog-laravel/public/new/{{$t['id']}}"><h2>{{$t['title']}}</h2></a></div>
                        <div class="subtitle"><p>{{$t['subtitle']}}</p></div>
                        <div class="author"><i class="fa fa-user"></i>{{$t->user['name']}}</div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>

@component('components.footer')
    @slot('script')
        http://localhost/blog-laravel/public/assets/js/searchAdjustment.js
    @endslot
@endcomponent
