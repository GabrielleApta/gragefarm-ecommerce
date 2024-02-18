@extends('layouts.app')
@section('title', 'GrageFarm - Belanja Sayur dan Bahan Lainnya Lebih Mudah | Kategori')
@section('content')
    <div class="container">
        <div class="wrap-show-advance-info-box style-1 has-countdown">
            <h3 class="title-box">Kategori</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{ asset('user/assets/images/digital-electronic-banner.jpg') }}" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false"
                data-nav="true" data-dots="false"
                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                @forelse ($categories as $categoryItem)
                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="{{ url('/collections/'.$categoryItem->slug) }}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure>
                                    <img src="{{ asset("$categoryItem->image") }}" width="800"
                                        height="800" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name">
                                <span class="mt-2" style="text-align: center; font-size: 17px; font-weight: 500">{{ $categoryItem->name }}</span>
                            </a>
                        </div>
                    </div>
                @empty
                @endforelse

                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="{{ asset('user/assets/images/products/fashion_08.jpg') }}" width="800"
                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
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
                            <figure><img src="{{ asset('user/assets/images/products/digital_17.jpg') }}" width="800"
                                    height="800" alt=""></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><ins>
                                <p class="product-price">$168.00</p>
                            </ins> <del>
                                <p class="product-price">$250.00</p>
                            </del></div>
                    </div>
                </div>

                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="{{ asset('user/assets/images/products/tools_equipment_3.jpg') }}"
                                    width="800" height="800" alt=""></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
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
                            <figure><img src="{{ asset('user/assets/images/products/fashion_05.jpg') }}" width="800"
                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><ins>
                                <p class="product-price">$168.00</p>
                            </ins> <del>
                                <p class="product-price">$250.00</p>
                            </del></div>
                    </div>
                </div>

                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="{{ asset('user/assets/images/products/digital_04.jpg') }}" width="800"
                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
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
                            <figure><img src="{{ asset('user/assets/images/products/kidtoy_05.jpg') }}" width="800"
                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><ins>
                                <p class="product-price">$168.00</p>
                            </ins> <del>
                                <p class="product-price">$250.00</p>
                            </del></div>
                    </div>
                </div>

                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="{{ asset('user/assets/images/products/tools_equipment_7.jpg') }}"
                                    width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            </figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
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
