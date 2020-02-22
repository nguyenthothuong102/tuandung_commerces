@extends('layouts.app')
@section('content')
@include('layouts.partials.slide')
<div class="home_section_bg">
        @include('layouts.partials.categories_products')
        <div class="product_area deals_product">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                       <div class="product_header">
                            <div class="section_title s_title_style3">
                               <h2>New Products</h2>

                            </div>
                            <!-- <div class="product_tab_btn">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#Fashion" role="tab" aria-controls="Fashion" aria-selected="true">
                                            Fashion &amp; Clothing
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Games" role="tab" aria-controls="Games" aria-selected="false">
                                            Games &amp; Consoles
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Speaker" role="tab" aria-controls="Speaker" aria-selected="false">
                                            Headphone &amp; Speaker
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Mobile" role="tab" aria-controls="Mobile" aria-selected="false">
                                            Mobile &amp; Tablets
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    @include('products.show')
                </div>
        </div>
    </div>
@endsection
