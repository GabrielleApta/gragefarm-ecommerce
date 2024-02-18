@extends('layouts.app')
@section('title', 'GrageFarm - Belanja Sayur dan Bahan Lainnya Lebih Mudah')
@section('content')

    <div class="container">
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                <div class="item-slide">
                    <img src="{{ asset('user/assets/images/bg_3.jpg') }}" alt="" class="img-slide">
                    <div class="slide-info slide-3">
                        <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                        <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                        <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                        <a href="#" class="btn-link">Shop Now</a>
                    </div>
                </div>
                <div class="item-slide">
                    <img src="{{ asset('user/assets/images/bg_2.jpg') }}" alt="" class="img-slide">
                    <div class="slide-info slide-3">
                        <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                        <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                        <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                        <a href="#" class="btn-link">Shop Now</a>
                    </div>
                </div>
                <div class="item-slide">
                    <img src="{{ asset('user/assets/images/bg_1.jpg') }}" alt="" class="img-slide">
                    <div class="slide-info slide-3">
                        <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                        <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                        <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                        <a href="#" class="btn-link">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{ asset('user/assets/images/banner-1.jpg') }}" alt="" width="580"
                            height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{ asset('user/assets/images/banner-2.jpg') }}" alt="" width="580"
                            height="190"></figure>
                </a>
            </div>
        </div>

        <div class="wrap-show-advance-info-box style-1 has-countdown">
            <h3 class="title-box">Kategori</h3>
            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5"
                data-loop="false" data-nav="true" data-dots="false"
                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                @forelse ($categories as $categoryItem)
                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="{{ url('/collections/' . $categoryItem->slug) }}"
                                title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure>
                                    <img src="{{ asset("$categoryItem->image") }}" width="800" height="800"
                                        alt="{{ $categoryItem->name }}">
                                </figure>
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="wrap-price"><span class="product-price">{{ $categoryItem->name }}</span></div>
                        </div>
                    </div>
                @empty
                @endforelse
                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="{{ asset('user/assets/images/products/digital_04.jpg') }}" width="800" height="800"
                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                    </div>
                </div>
                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="{{ asset('user/assets/images/products/digital_04.jpg') }}" width="800" height="800"
                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                    </div>
                </div>


            </div>
        </div>

    </div>


@endsection
{{--
@forelse ($categories as $categoryItem)
    <div class="product product-style-2 equal-elem" style="width: 200px">
        <div class="product-thumnail">
            <a href="{{ url('/collections/' . $categoryItem->slug) }}" style="width: 500px">
                <figure>
                    <img src="{{ asset("$categoryItem->image") }}" width="100" height="100"
                        alt="{{ $categoryItem->name }}">
                </figure>
            </a>
        </div>
        <div class="product-info">
            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                    [White]</span></a>
            <div class="wrap-price"><span class="product-price">$250.00</span></div>
        </div>
    </div>
@empty
@endforelse --}}
