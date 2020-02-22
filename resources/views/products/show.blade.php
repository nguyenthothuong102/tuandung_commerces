<div class="tab-pane fade show active" id="Fashion" role="tabpanel">
    <div class="product_carousel product_style product_column5 owl-carousel feature owl-loaded owl-drag">
    @foreach($products as $product)
        <div class="owl-item cloned" style="width: 264.2px;"><article class="single_product">
            <figure>
                <div class="product_thumb">
                    <a class="primary_img" href="{{route('products.show',$product->id)}}"><img src="assets/img/product/product7.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('products.show',$product->id)}}"><img src="assets/img/product/product8.jpg" alt=""></a>
                    <div class="action_links">
                         <ul>
                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="product-countdown.html">{{ $product->description }}</a></h4>
                        <div class="price_box">
                            <span class="current_price">$ {{ $product->price }}</span>
                        </div>
                        <div class="product_timing">
                            <div data-countdown="2021/11/15"><div class="countdown_area"><div class="single_countdown"><div class="countdown_number">634</div><div class="countdown_title">days</div></div><div class="single_countdown"><div class="countdown_number">09</div><div class="countdown_title">hours</div></div><div class="single_countdown"><div class="countdown_number">00</div><div class="countdown_title">mins</div></div><div class="single_countdown"><div class="countdown_number">44</div><div class="countdown_title">secs</div></div></div></div>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="" title="" data-original-title="Add to cart">Add to cart</a>
                    </div>
                </div>
            </figure>
        </article></div>
        @endforeach
    </div>
</div>
