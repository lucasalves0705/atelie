
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="{{ asset('/img/icon/search.png') }}" alt="Buscar"></a>
        <a href="#"><img src="{{ asset('/img/icon/heart.png') }}" alt="Desejos"></a>
        <a href="#"><img src="{{ asset('/img/icon/cart.png') }}" alt="Sacola"> <span>0</span></a>
        <div class="price">R$ 0.00</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>Você já está aqui no meu <i class="fa fa-heart-o text-danger" aria-hidden="true"></i> !!</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <h1 class="h2"><a class="text-dark" href="{{ route('index') }}">Ateliê</a></h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ route('index') }}">Inicio</a></li>
                        <li><a href="{{ route('shop.index') }}">Produtos</a></li>
                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li><a href="{{ route('contact.index') }}">Contato</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{ asset('img/icon/search.png') }}" alt="Buscar"></a>
                    <a href="#"><img src="{{ asset('img/icon/heart.png') }}" alt="Desejos"></a>
                    <a href="#"><img src="{{ asset('img/icon/cart.png') }}" alt="Sacola"> <span>1</span></a>
                    <div class="price">R$ 0.00</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
