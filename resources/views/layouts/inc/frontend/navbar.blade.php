<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item">
                                <a title="Hotline: (+123) 456 789" href="#"><span
                                        class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        <ul>
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>

                                <li class="menu-item lang-menu menu-item-has-children parent">
                                    <a title="English" href="#"><span
                                            class="img label-before"></span>{{ Auth::user()->name }}<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu lang">
                                        <li class="menu-item">
                                            <a title="hungary" href="#">
                                                <span class="img label-before">Pesanan</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="hungary" href="#">
                                                <span class="img label-before">Pesanan</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="index.html" class="link-to-home"><img
                                src="{{ asset('user/assets/images/gragefarm-logo.png') }}" alt="mercado"></a>
                    </div>

                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="#" id="form-search-top" name="form-search-top">
                                <input type="text" name="search" value="" placeholder="Cari Produk">
                                <button form="form-search-top" type="button"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="wrap-icon right-section">
                        <div class="wrap-icon-section wishlist">
                            <a href="#" class="link-direction">
                                <div class="left-info">
                                    <span class="index" style="background: #fff"></span>
                                    <span class="title"></span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-icon-section minicart">
                            <a href="{{ url('cart') }}" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index" style="display: flex; gap: 2px"><livewire:frontend.cart.cart-count /> Item</span>
                                    <span class="title">CART</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">

                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ '/collections' }}" class="link-term mercado-item-title">Belanja</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ '/collections' }}" class="link-term mercado-item-title">Keranjang</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ '/collections' }}" class="link-term mercado-item-title">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
