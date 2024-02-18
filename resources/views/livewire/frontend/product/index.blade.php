<div>
    @forelse ($products as $productItem)
        <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
            <div class="product product-style-3 equal-elem ">
                <div class="product-thumnail">
                    <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}"
                        title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        @if ($productItem->productImages->count() > 0)
                            <figure>
                                <img src="{{ asset($productItem->productImages[0]->image) }}"
                                    alt="{{ $productItem->name }}">
                            </figure>
                        @endif
                    </a>
                </div>
                <div class="product-info">
                    <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}"
                        class="product-name"><span style="font-size: 14px">{{ $productItem->name }}</span></a>
                    <a href="#" class="product-name">
                        <span style="font-size: 16px">{{ $productItem->brand }}</span>
                    </a>
                    <div class="wrap-price">
                        <span class="product-price" style="font-size: 14px">Rp.{{ $productItem->selling_price }}</span>
                    </div>
                </div>
            </div>
        </li>
    @empty
        <div style="display: flex; justify-content: center; position: relative; top: 25px;">
            <h4>Tidak ada data {{ $category->name }}</h4>
        </div>
    @endforelse
</div>
