@section('header')

    <header class="site-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <div class="site-logo">
                        <a href="/">
                            <img src="/img/logo-test.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-8">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbar-main" aria-controls="navbar-main"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-main">
                            <ul class="navbar-nav main-menu">
                                @foreach($menus as $menu)
                                <li class="menu-item">
                                    <a class="yellow" href="{{$menu->slug}}"><i class="{{$menu->favicon}}"></i>{{$menu->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-2">
                    <div class="top-contacts">
                        <p class="white">Пн-Пт с 9.00 до 18.00</p>
                        <a class="top-number" href="tel:+380671234567">
                            +38 (067) <span class="yellow">123-45-67</span>
                        </a>
                        <button type="button" class="btn top-callback" data-toggle="modal"
                                data-target="#callBack-modal">
                            Обратный звонок
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

@endsection