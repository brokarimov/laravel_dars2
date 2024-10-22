@extends('./user/main')

@section('title', 'Home3')

@section('content')

<div class="main-content">
    <div class="fullwidth-template">
        <div class="home-slider style1 rows-space-30">
            <div class="container">
                <div class="slider-owl owl-slick equal-container nav-center"
                     data-slick='{"autoplay":true, "autoplaySpeed":9000, "arrows":true, "dots":false, "infinite":true, "speed":1000, "rows":1}'
                     data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                    <div class="slider-item style1">
                        <div class="slider-inner equal-element">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    New Arrivals!
                                </h5>
                                <h3 class="title-big">
                                    Living Room<br/>
                                    Limited Items
                                </h3>
                                <div class="price">
                                    Price from:
                                    <span class="number-price">
											€75.00
										</span>
                                </div>
                                <a href="#" class="button btn-browse">Browse</a>
                                <a href="#" class="button btn-shop-the-look bgroud-style">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item style2">
                        <div class="slider-inner equal-element">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    Table Supplies Sale!
                                </h5>
                                <h3 class="title-big">
                                    Up to <span>75%</span> On All <br/> Store Items
                                </h3>
                                <a href="#" class="button btn-shop-now">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item style3">
                        <div class="slider-inner equal-element">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    New Arrivals!
                                </h5>
                                <h3 class="title-big">
                                    Living Room<br/>
                                    Limited Items
                                </h3>
                                <div class="price">
                                    Price from:
                                    <span class="number-price">
											€75.00
										</span>
                                </div>
                                <a href="#" class="button btn-browse">Browse</a>
                                <a href="#" class="button btn-shop-the-look bgroud-style">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-wrapp rows-space-35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="banner">
                            <div class="item-banner style12">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">Best Seller</h3>
                                        <div class="description">
                                            Check out our new furniture collection!
                                        </div>
                                        <a href="#" class="button btn-shop-now">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="banner">
                            <div class="item-banner style14">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h4 class="vereesa-subtitle">End this weekend</h4>
                                        <h3 class="title">Big Sale <br/>75% Off</h3>
                                        <div class="code">
                                            Use promo Code:
                                            <span class="nummer-code">VEREESA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="banner">
                            <div class="item-banner style12 type2">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">Lookbook</h3>
                                        <div class="description">
                                            Bedroom Collections <br/>Summer Lookbook
                                        </div>
                                        <a href="#" class="button btn-view-the-look">view all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vereesa-tabs  default rows-space-40">
            <div class="container">
                <div class="tab-head">
                    <ul class="tab-link">
                        <li class="active">
                            <a data-toggle="tab" aria-expanded="true" href="#bestseller">Bestseller</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" aria-expanded="true" href="#new_arrivals">New Arrivals </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" aria-expanded="true" href="#top-rated">Top Rated</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-container">
                    <div id="bestseller" class="tab-panel active">
                        <div class="vereesa-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-1.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text over">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-2.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text over">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-3.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text active">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-4.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text active">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text over">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-5.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-6.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text over">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-7.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text over">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-8.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text active">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="new_arrivals" class="tab-panel">
                        <div class="vereesa-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-9.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text active">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-10.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text active">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-11.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-13.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-14.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-15.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text active">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-16.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-2.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-rated" class="tab-panel">
                        <div class="vereesa-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-10.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text active">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-12.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text active">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-8.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text active">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-4.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-9.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-13.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-16.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text active">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="assets/images/product-item-8.jpg" alt="img">
                                                </a>
                                            </div>
                                            <a href="#" class="button quick-wiew-button"></a>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Plastic Dining Chair</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        €65
                                                    </del>
                                                    <ins>
                                                        €45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="loop-form-add-to-cart">
                                            <form class="cart">
                                                <div class="single_variation_wrap">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1"
                                                                   title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>
                                                    <button class="single_add_to_cart_button button">Add to cart
                                                    </button>
                                                </div>
                                                <div class="variations">
                                                    <div class="variation">
                                                        <label class="variation-label">
                                                            Capacity:
                                                        </label>
                                                        <div class="variation-value">
                                                            <a href="#" class="change-value text active">
                                                                <span>10ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>20ml</span>
                                                            </a>
                                                            <a href="#" class="change-value text">
                                                                <span>50ml</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-wrapp rows-space-60">
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner">
                            <div class="item-banner style6">
                                <div class="inner">
                                    <div class="container">
                                        <div class="banner-content">
                                            <h4 class="vereesa-subtitle">Celebrate Day Sale!</h4>
                                            <h3 class="title">Save <span>25%</span> Of On All<br/>Bedroom Collection
                                            </h3>
                                            <a href="#" class="button btn-view-promotion">View Promotion</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-in-stock-wrapp">
            <div class="container">
                <h3 class="custommenu-title-blog white">
                    Featured Products
                </h3>
                <div class="vereesa-product style3">
                    <ul class="row list-products auto-clear equal-container product-grid">
                        <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-3">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
                                    <div class="product-top">
                                        <div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
                                        </div>
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-10.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
                                    <div class="product-top">
                                        <div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
                                        </div>
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
                                    <div class="product-top">
                                        <div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
                                        </div>
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-3.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-3">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
                                    <div class="product-top">
                                        <div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
                                        </div>
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-4.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
                                    <div class="product-top">
                                        <div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
                                        </div>
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-5.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
                                    <div class="product-top">
                                        <div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
                                        </div>
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-6.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="banner-wrapp rows-space-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="banner">
                            <div class="item-banner style10">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h4 class="vereesa-subtitle">Best Seller!</h4>
                                        <h3 class="title">Big Deal Of Day</h3>
                                        <div class="description">
                                            We’ve been waiting 4 you!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="banner">
                            <div class="item-banner style11">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h4 class="vereesa-subtitle">Let’s us make your style!</h4>
                                        <h3 class="title">Convertry Collection </h3>
                                        <div class="description">
                                            A complete shopping guide on what & how to decor!
                                        </div>
                                        <a href="#" class="button btn-shopping-us">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vereesa-blog-wraap">
            <div class="container">
                <h3 class="custommenu-title-blog">
                    Our Latest News
                </h3>
                <div class="vereesa-blog default">
                    <div class="owl-slick equal-container nav-center"
                         data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":true, "speed":800, "rows":1}'
                         data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":1}}]'>
                        <div class="vereesa-blog-item equal-element layout1">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="assets/images/slider-blog-thumb-1.jpg" alt="img">
                                </a>
                                <div class="category-blog">
                                    <ul class="list-category">
                                        <li class="category-item">
                                            <a href="#">Skincare</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-item-share">
                                    <a href="#" class="icon">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    </a>
                                    <div class="box-content">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="blog-meta">
                                    <div class="post-date">
                                        Agust 17, 09:14 am
                                    </div>
                                    <span class="view">
											<i class="icon fa fa-eye" aria-hidden="true"></i>
											631
										</span>
                                    <span class="comment">
											<i class="icon fa fa-commenting" aria-hidden="true"></i>
											84
										</span>
                                </div>
                                <h2 class="blog-title">
                                    <a href="#">We bring you the best by working</a>
                                </h2>
                                <div class="main-info-post">
                                    <p class="des">
                                        Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue.
                                        Mauris nec ante magna.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vereesa-blog-item equal-element layout1">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="assets/images/slider-blog-thumb-2.jpg" alt="img">
                                </a>
                                <div class="category-blog">
                                    <ul class="list-category">
                                        <li class="category-item">
                                            <a href="#">HOW TO</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-item-share">
                                    <a href="#" class="icon">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    </a>
                                    <div class="box-content">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="blog-meta">
                                    <div class="post-date">
                                        Agust 17, 09:14 am
                                    </div>
                                    <span class="view">
											<i class="icon fa fa-eye" aria-hidden="true"></i>
											631
										</span>
                                    <span class="comment">
											<i class="icon fa fa-commenting" aria-hidden="true"></i>
											84
										</span>
                                </div>
                                <h2 class="blog-title">
                                    <a href="#">We know that buying furniture</a>
                                </h2>
                                <div class="main-info-post">
                                    <p class="des">
                                        Using Lorem Ipsum allows designers to put together layouts
                                        and the form content
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vereesa-blog-item equal-element layout1">
                            <div class="post-thumb">
                                <div class="video-vereesa-blog">
                                    <figure>
                                        <img src="assets/images/slider-blog-thumb-3.jpg" alt="img" width="370"
                                             height="280">
                                    </figure>
                                    <a class="quick-install" href="#" data-videosite="vimeo"
                                       data-videoid="134060140"></a>
                                </div>
                                <div class="category-blog">
                                    <ul class="list-category">
                                        <li class="category-item">
                                            <a href="#">VIDEO</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-item-share">
                                    <a href="#" class="icon">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    </a>
                                    <div class="box-content">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="blog-meta">
                                    <div class="post-date">
                                        Agust 17, 09:14 am
                                    </div>
                                    <span class="view">
											<i class="icon fa fa-eye" aria-hidden="true"></i>
											631
										</span>
                                    <span class="comment">
											<i class="icon fa fa-commenting" aria-hidden="true"></i>
											84
										</span>
                                </div>
                                <h2 class="blog-title">
                                    <a href="#">We design functional furniture</a>
                                </h2>
                                <div class="main-info-post">
                                    <p class="des">
                                        Risus non porta suscipit lobortis habitasse felis, aptent
                                        interdum pretium ut.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vereesa-blog-item equal-element layout1">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="assets/images/slider-blog-thumb-4.jpg" alt="img">
                                </a>
                                <div class="category-blog">
                                    <ul class="list-category">
                                        <li class="category-item">
                                            <a href="#">Skincare</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-item-share">
                                    <a href="#" class="icon">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    </a>
                                    <div class="box-content">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="blog-meta">
                                    <div class="post-date">
                                        Agust 17, 09:14 am
                                    </div>
                                    <span class="view">
											<i class="icon fa fa-eye" aria-hidden="true"></i>
											631
										</span>
                                    <span class="comment">
											<i class="icon fa fa-commenting" aria-hidden="true"></i>
											84
										</span>
                                </div>
                                <h2 class="blog-title">
                                    <a href="#">We know that buying furniture</a>
                                </h2>
                                <div class="main-info-post">
                                    <p class="des">
                                        Class integer tellus praesent at torquent cras, potenti erat fames
                                        volutpat etiam.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="instagram-wrapp">
    <div>
        <h3 class="custommenu-title-blog">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            Vereesa’s Instagram Feed
        </h3>
        <div class="vereesa-instagram">
            <div class="instagram owl-slick equal-container"
                 data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":false, "infinite":true, "speed":800, "rows":1}'
                 data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":5}},{"breakpoint":"1200","settings":{"slidesToShow":4}},{"breakpoint":"992","settings":{"slidesToShow":3}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":2}}]'>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-1.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon fa fa-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-2.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon fa fa-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-3.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon fa fa-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-4.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon fa fa-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-5.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon fa fa-instagram" aria-hidden="true"></i>
			        </span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
