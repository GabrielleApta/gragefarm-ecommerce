<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="#" class="link">home</a></li>
            <li class="item-link"><span>Keranjang</span></li>
        </ul>
    </div>
    <div class=" main-content-area">

        @if ($cartMessage)
            <div class="alert alert-success">
                {{ $cartMessage }}
            </div>
        @endif
        <div class="wrap-iten-in-cart">
            <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                <div class="row" style="background: #dedede">
                    <div class="col-md-6">
                        <h4>Produk</h4>
                    </div>
                    <div class="col-md-2">
                        <h4>Harga Satuan</h4>
                    </div>
                    <div class="col-md-2">
                        <h4>Kuantitas</h4>
                    </div>
                    <div class="col-md-2">
                        <h4>Total Harga</h4>
                    </div>
                </div>
            </div>
            <ul class="products-cart">
                @forelse ($cart as $cartItem)
                    @if ($cartItem->product)
                        <li class="pr-cart-item">
                            <div class="product-image">
                                <figure><img src="{{ asset($cartItem->product->productImages[0]->image) }}"
                                        alt=""></figure>
                            </div>
                            <div class="product-name">
                                <a class="link-to-product"
                                    href="{{ url('collections/' . $cartItem->product->category->slug . '/' . $cartItem->product->slug) }}">{{ $cartItem->product->name }}</a>
                            </div>
                            <div class="price-field produtc-price">
                                <p class="price" style="font-weight: 500; text-align: left">Rp
                                    {{ number_format($cartItem->product->selling_price, 0, ',', '.') }}</p>
                            </div>
                            <div class="quantity">
                                <div class="quantity-input">
                                    <input type="text" name="product-quatity" value="{{ $cartItem->quantity }}"
                                        readonly>
                                    <a class="btn btn-increase" wire:click="incrementQuantity({{ $cartItem->id }})"
                                        href="#"></a>
                                    <a class="btn btn-reduce" wire:click="decrementQuantity({{ $cartItem->id }})"
                                        href="#"></a>
                                </div>
                            </div>
                            <div class="price-field sub-total">
                                <p class="price" style="font-weight: 500; text-align: left; padding-left: 70px">Rp
                                    {{ number_format($cartItem->quantity * $cartItem->product->selling_price, 0, ',', '.') }}
                                </p>
                                @php
                                    $totalPrice += $cartItem->quantity * $cartItem->product->selling_price;
                                @endphp
                            </div>
                            <div class="delete">
                                <a href="#" wire:click="removeCartItem({{ $cartItem->id }})"
                                    class="btn btn-delete" title="">
                                    <i wire:loading.remove wire:target="removeCartItem({{ $cartItem->id }})"
                                        class="fa fa-times-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                        </li>
                    @endif
                @empty
                    <div class="alert alert-warning">Keranjang belanja kosong.</div>
                @endforelse
            </ul>
        </div>


        <div class="summary">
            <div class="order-summary">
                <p class="summary-info total-info "><span class="title-box">Total</span>
                    <b class="index">Rp {{ number_format($totalPrice, 0, ',', '.') }}</b>
                </p>
            </div>
            <div class="checkout-info">
                <a class="btn btn-checkout" href="{{ url('/checkout') }}">Check out</a>
            </div>
        </div>
    </div><!--end main content area-->
</div><!--end container-->
