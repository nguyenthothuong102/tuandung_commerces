@extends('layouts.app')
@section('content')
    <div class="product_details_wrapper mb-55">
    <div class="product_details">
        <form action="{{ route('cart.add',$product->id) }}" method="POST" >
        @csrf
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="product-details-tab">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="assets/img/product/productbig5.jpg" data-zoom-image="assets/img/product/productbig5.jpg" alt="big-1">
                        </a>
                    </div>
                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active owl-loaded owl-drag" id="gallery_01">
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-471px, 0px, 0px); transition: all 0s ease 0s; width: 1413px;"><div class="owl-item cloned" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig4.jpg" data-zoom-image="assets/img/product/productbig4.jpg">
                                    <img src="assets/img/product/productbig4.jpg" alt="zo-th-1">
                                </a>

                            </li></div><div class="owl-item cloned" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig1.jpg" data-zoom-image="assets/img/product/productbig1.jpg">
                                    <img src="assets/img/product/productbig1.jpg" alt="zo-th-1">
                                </a>
                            </li></div><div class="owl-item cloned" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig2.jpg" data-zoom-image="assets/img/product/productbig2.jpg">
                                    <img src="assets/img/product/productbig2.jpg" alt="zo-th-1">
                                </a>
                            </li></div><div class="owl-item cloned" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig3.jpg" data-zoom-image="assets/img/product/productbig3.jpg">
                                    <img src="assets/img/product/productbig3.jpg" alt="zo-th-1">
                                </a>
                            </li></div><div class="owl-item active" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig4.jpg" data-zoom-image="assets/img/product/productbig4.jpg">
                                    <img src="assets/img/product/productbig4.jpg" alt="zo-th-1">
                                </a>
                            </li></div><div class="owl-item active" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig1.jpg" data-zoom-image="assets/img/product/productbig1.jpg">
                                    <img src="assets/img/product/productbig1.jpg" alt="zo-th-1">
                                </a>

                            </li></div><div class="owl-item active" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig2.jpg" data-zoom-image="assets/img/product/productbig2.jpg">
                                    <img src="assets/img/product/productbig2.jpg" alt="zo-th-1">
                                </a>
                            </li></div><div class="owl-item active" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig3.jpg" data-zoom-image="assets/img/product/productbig3.jpg">
                                    <img src="assets/img/product/productbig3.jpg" alt="zo-th-1">
                                </a>

                            </li></div><div class="owl-item cloned" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig4.jpg" data-zoom-image="assets/img/product/productbig4.jpg">
                                    <img src="assets/img/product/productbig4.jpg" alt="zo-th-1">
                                </a>
                            </li></div><div class="owl-item cloned" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig1.jpg" data-zoom-image="assets/img/product/productbig1.jpg">
                                    <img src="assets/img/product/productbig1.jpg" alt="zo-th-1">
                                </a>

                            </li></div><div class="owl-item cloned" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig2.jpg" data-zoom-image="assets/img/product/productbig2.jpg">
                                    <img src="assets/img/product/productbig2.jpg" alt="zo-th-1">
                                </a>

                            </li></div><div class="owl-item cloned" style="width: 102.75px; margin-right: 15px;"><li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig3.jpg" data-zoom-image="assets/img/product/productbig3.jpg">
                                    <img src="assets/img/product/productbig3.jpg" alt="zo-th-1">
                                </a>

                            </li></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="product_d_right">
                   <form action="#">

                        <h3><a href="#">{{ $product->name }}</a></h3>
                        <div class="product_nav">
                            <ul>
                                <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                       <div class="product_rating">
                           <ul>
                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                               <li class="review"><a href="#">(1 customer review )</a></li>
                           </ul>
                        </div>
                        <div class="price_box">
                            <span class="current_price">$ {{ $product-> price }}</span>
                        </div>
                        <div class="product_desc">
                            <p>{{ $product-> description }} </p>
                        </div>
                        <div class="product_variant quantity">
                            <label>quantity</label>
                            <input min="1" max="100" value="1" name="qty" type="number">
                            <button id="submit" class="button" type="submit">add to cart</button>
                        </div>
                        <div class="product_timing">
                            <div data-countdown="2021/05/15"><div class="countdown_area"><div class="single_countdown"><div class="countdown_number">450</div><div class="countdown_title">days</div></div><div class="single_countdown"><div class="countdown_number">08</div><div class="countdown_title">hours</div></div><div class="single_countdown"><div class="countdown_number">02</div><div class="countdown_title">mins</div></div><div class="single_countdown"><div class="countdown_number">46</div><div class="countdown_title">secs</div></div></div></div>
                        </div>
                        <div class="product_meta">
                            <span>Category: <a href="#"></a></span>
                        </div>

                    </form>
                    <div class="priduct_social">
                        <ul>
                            <li><a class="facebook" href="#" title="facebook"><i class="fab fa-facebook"></i> Like</a></li>
                            <li><a class="twitter" href="#" title="twitter"><i class="fab fa-twitter"></i> tweet</a></li>
                            <li><a class="pinterest" href="#" title="pinterest"><i class="fab fa-pinterest"></i> save</a></li>
                            <li><a class="google-plus" href="#" title="google +"><i class="fab fa-google-plus"></i> share</a></li>
                            <li><a class="linkedin" href="#" title="linkedin"><i class="fab fa-linkedin"></i> linked</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        </form>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info">
        <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                </li>
                                <li>
                                     <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                                </li>
                                <li>
                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                <div class="product_d_table">
                                   <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Compositions</td>
                                                    <td>Polyester</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Styles</td>
                                                    <td>Girly</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Properties</td>
                                                    <td>Short Dress</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published.  Required fields are marked </p>
                                    </div>
                                    <div class="product_rating mb-10">
                                       <h3>Your rating</h3>
                                        <ul>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                         </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!--product info end-->
</div>
@endsection
