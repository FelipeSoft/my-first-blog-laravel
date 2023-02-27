<x-header>
    <x-slot name="search">
        <x-search></x-search>    
    </x-slot>
</x-header>
<section id="searchResult">
    <div class="section-title">
        <div>
            <div class="text">
                <i class="fa fa-search"></i>
                <h4>Pesquisa</h4>
            </div>
            <div class="hr"></div>
        </div>
        <x-result-message>
            <x-slot name="typed">{{$typed}}</x-slot>
        </x-result-message>
    </div>
    <div class="container-sr">
        @if($topic->count() !== 0)
            @foreach ($topic as $t)
                <div style="display: flex;" class="common-new">
                    <div class="cn-image-area"><img src="" alt=""></div>
                    <div class="cn-content-area">
                        <div class="title"><a href="http://localhost/blog-laravel/public/new/{{$t['id']}}"><h2>{{$t['title']}}</h2></a></div>
                        <div class="subtitle"><p>{{$t['subtitle']}}</p></div>
                        <div class="author"><i class="fa fa-user"></i>{{$t->user['name']}}</div>
                        <div class="date">{{date("d/m/Y H:i", strtotime($t['updated_at']))}}</div>
                    </div>
                </div>
            @endforeach
        @else
            <x-warning>
                <x-slot name="typed">
                    {{$typed}}
                </x-slot>
            </x-warning>
        @endif
    </div>
</section>

<x-footer>
    <x-slot name="script">
        http://localhost/blog-laravel/public/assets/js/searchAdjustment.js
    </x-slot>
</x-footer>
