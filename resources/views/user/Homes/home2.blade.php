@extends('./user/main')

@section('title', 'Home2')

@section('content')

<div class="">
    <div class="fullwidth-template">
        <div class="home-slider fullwidth rows-space-60">
            <div class="slider-owl owl-slick equal-container nav-center equal-container"
                 data-slick='{"autoplay":true, "autoplaySpeed":10000, "arrows":true, "dots":true, "infinite":true, "speed":800, "rows":1}'
                 data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                <div class="slider-item style4">
                    <div class="slider-inner equal-element">
                        <div class="container">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    Sale up to 40% off!
                                </h5>
                                <h3 class="title-big">
                                    In stock with<br/>
                                    4 colors
                                </h3>
                                <div class="price">
                                    New Price:
                                    <span class="number-price">
												€25.00
											</span>
                                </div>
                                <a href="#" class="button btn-browse">Browse</a>
                                <a href="#" class="button btn-shop-the-look bgroud-style">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item style5">
                    <div class="slider-inner equal-element">
                        <div class="container">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    Start weekend off!
                                </h5>
                                <h3 class="title-big">
                                    Huge sale<br/>
                                    Up to 75% Off
                                </h3>
                                <div class="when-code">
                                    When Use Code:
                                    <span class="number-code">
												VEREESA
											</span>
                                </div>
                                <a href="#" class="button btn-browse">Browse</a>
                                <a href="#" class="button btn-view-promotion bgroud-style">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item style6">
                    <div class="slider-inner equal-element">
                        <div class="container">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    Make your style Difference!
                                </h5>
                                <h3 class="title-big">
                                    Let’s create<br/>
                                    Your own style
                                </h3>
                                <div class="price">
                                    Template Price:
                                    <span class="number-price">
												€09.00
											</span>
                                </div>
                                <a href="#" class="button btn-browse">Browse</a>
                                <a href="#" class="button btn-lets-create bgroud-style">Let’s Create</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="custommenu-title-blog white">
            Best Selling
        </h3>
        <div class="slider-product products product-grid">
            <div class="container">
                <div class="owl-products owl-slick equal-container nav-center"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":2}},{"breakpoint":"1200","settings":{"slidesToShow":1}},{"breakpoint":"992","settings":{"slidesToShow":1}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>
                    <div class="product-item style2">
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
                                            <a href="#">Add to Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="assets/images/product-item-10.jpg" alt="img">
                                    </a>
                                </div>
                                <a href="#" class="button quick-wiew-button">Quick View</a>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Baniversary Chair</a>
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
                                    <div class="desc">
                                        Standard Issue Field Watch From Weiss Watch Co.
                                    </div>
                                </div>
                                <div class="group-buttons">
                                    <div class="price">
                                        <span>€375</span>
                                    </div>
                                    <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style2">
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
                                            <a href="#">Add to Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="assets/images/product-item-5.jpg" alt="img">
                                    </a>
                                </div>
                                <a href="#" class="button quick-wiew-button">Quick View</a>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">About A Chair AAC 22</a>
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
                                    <div class="desc">
                                        Standard Issue Field Watch From Weiss Watch Co.
                                    </div>
                                </div>
                                <div class="group-buttons">
                                    <div class="price">
                                        <span>€375</span>
                                    </div>
                                    <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style2">
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
                                            <a href="#">Add to Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="assets/images/product-item-11.jpg" alt="img">
                                    </a>
                                </div>
                                <a href="#" class="button quick-wiew-button">Quick View</a>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">About A Chair AAC 22</a>
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
                                    <div class="desc">
                                        Standard Issue Field Watch From Weiss Watch Co.
                                    </div>
                                </div>
                                <div class="group-buttons">
                                    <div class="price">
                                        <span>€375</span>
                                    </div>
                                    <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-wrapp rows-space-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="banner">
                            <div class="item-banner style15">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">Woodman <br />Lamps</h3>
                                        <div class="description">
                                            Vereesa style, day by day <br />functionality!
                                        </div>
                                        <a href="#" class="button btn-view-the-look">view all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="banner">
                            <div class="item-banner style16">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">Tattoo <br />Lookbook</h3>
                                        <div class="description">
                                            Bedroom Collections <br />Summer Lookbook
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
        <div class="vereesa-product produc-featured rows-space-40">
            <div class="container">
                <h3 class="custommenu-title-blog">
                    New Arrivals
                </h3>
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
        <div class="banner-pinmap-wrapp rows-space-70">
            <div>
                <div class="banner">
                    <div class="item-banner style21">
                        <div class="inner">
                            <div class="banner-content container">
                                <h4 class="vereesa-subtitle">Style your room!</h4>
                                <h3 class="title">
                                    Lookbook<br/>
                                    Sale <span>15%</span> Off
                                </h3>
                                <div class="start-from">
                                    start from <span>Dec 27</span> to <span>dec 29</span>
                                </div>
                                <a href="#" class="button btn-shop-now">SHOP NOW</a>
                                <div class="group-pinap">
                                    <div class="pinmap-buttom btn-pinmap-1">
                                        <a href="#" class="icon">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                        <div class="popup-pinmap right style1">
                                            <div class="pinmap-popup-main style1">
                                                <div class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="assets/images/pinmap-item6.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h2 class="product-name-pinmap">
                                                        <a href="#">Baniversary Chair</a>
                                                    </h2>
                                                    <div class="pinmap-price">
                                                        <del>
                                                            €65
                                                        </del>
                                                        <ins>
                                                            €45
                                                        </ins>
                                                    </div>
                                                </div>
                                                <div class="pinmap-popup-buttons">
                                                    <a href="#" class="add_to_cart_button button">ADD TO CART</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pinmap-buttom btn-pinmap-2">
                                        <a href="#" class="icon">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                        <div class="popup-pinmap left style1">
                                            <div class="pinmap-popup-main style1">
                                                <div class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="assets/images/pinmap-item7.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h2 class="product-name-pinmap">
                                                        <a href="#">Baniversary Chair</a>
                                                    </h2>
                                                    <div class="pinmap-price">
                                                        <del>
                                                            €65
                                                        </del>
                                                        <ins>
                                                            €45
                                                        </ins>
                                                    </div>
                                                </div>
                                                <div class="pinmap-popup-buttons">
                                                    <a href="#" class="add_to_cart_button button">ADD TO CART</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vereesa-testimonials-newsletter-wrapp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="vereesa-testimonials-wrapp">
                            <div class="vereesa-testimonials default">
                                <div class="owl-slick equal-container"
                                     data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":true, "speed":800}'
                                     data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                                    <div class="testimonial-item">
                                        <div class="image">
                                            <img src="assets/images/testimonial-1.jpg" alt="img">
                                        </div>
                                        <div class="info">
                                            <div class="text">
                                                <p>
                                                    Maecenas vel nulla eleifend, euismod magna sed, tristique velit. Nam
                                                    sed eleifend dui, eu eleifend leo. Mauris ornare eros quis placerat
                                                    mollis zuis ornare euismod.
                                                </p>
                                            </div>
                                            <h5 class="name">
                                                Adam Smith
                                                <span>Shop Owner</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <div class="image">
                                            <img src="assets/images/testimonial-2.jpg" alt="img">
                                        </div>
                                        <div class="info">
                                            <div class="text">
                                                <p>
                                                    Maecenas vel nulla eleifend, euismod magna sed, tristique velit. Nam
                                                    sed eleifend dui, eu eleifend leo. Mauris ornare eros quis placerat
                                                    mollis zuis ornare euismod.
                                                </p>
                                            </div>
                                            <h5 class="name">
                                                Adam Smith
                                                <span>Shop Owner</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="vereesa-newsletter default">
                            <div class="newsletter-head">
                                <h3 class="title">Newsletter</h3>
                                <div class="subtitle">Get more special Deals, Events & Promotions</div>
                            </div>
                            <div class="newsletter-form-wrap">
                                <input class="input-text email email-newsletter" type="email" name="email"
                                       placeholder="Your email here...">
                                <button class="button btn-submit submit-newsletter">SUBSCRIBE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vereesa-iconbox-wrapp rows-space-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 vereesa-iconbox-wrapp-small">
                        <div class="vereesa-iconbox default">
                            <div class="iconbox-inner">
                                <div class="icon">
                                    <span class="fa fa-truck"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Free Delivery
                                    </h4>
                                    <div class="text">
                                        On order over €90.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 vereesa-iconbox-wrapp-small">
                        <div class="vereesa-iconbox default">
                            <div class="iconbox-inner">
                                <div class="icon">
                                    <span class="fa fa-credit-card-alt"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Money Guarantee
                                    </h4>
                                    <div class="text">
                                        30 Days money back!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 vereesa-iconbox-wrapp-small last-item">
                        <div class="vereesa-iconbox default">
                            <div class="iconbox-inner">
                                <div class="icon">
                                    <span class="fa fa-life-ring"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Online Support 24/7
                                    </h4>
                                    <div class="text">
                                        We’re Always here!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-video-wrapp rows-space-40 type2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner">
                            <div class="item-banner style9">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h4 class="vereesa-subtitle">Start weekend off!</h4>
                                        <h3 class="title">Extra 75% Off</h3>
                                        <div class="code">
                                            Use promo Code:
                                            <span class="nummer-code">VEREESA</span>
                                        </div>
                                        <a href="#" class="button btn-shop-now">Let’s do it</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-video">
                            <div class="inner">
                                <div class="videoWrapper">
                                    <iframe src="https://player.vimeo.com/video/61325532" width="900" height="380"  allowfullscreen ></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vereesa-product layout1">
            <div class="container">
                <div class="container-wapper">
                    <div class="head">
                        <h3 class="title">Weekly Featured</h3>
                        <div class="subtitle">Let’s Shop our featured item this week</div>
                    </div>
                    <div class="product-list-owl owl-slick equal-container nav-center-left"
                         data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800,"infinite":false}'
                         data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":2}},{"breakpoint":"992","settings":{"slidesToShow":1}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":1}}]'>
                        <div class="product-item style-1 product-type-variable">
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
                                            <img src="assets/images/product-item-black-1.jpg" alt="img">
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
                                                    <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                           class="input-qty qty" size="4">
                                                    <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                </div>
                                            </div>
                                            <button class="single_add_to_cart_button button">Add to cart</button>
                                        </div>
                                        <div class="variations">
                                            <div class="variation">
                                                <label class="variation-label">
                                                    Capacity:
                                                </label>
                                                <div class="variation-value">
                                                    <a href="#" class="change-value text active">
                                                        <span>M</span>
                                                    </a>
                                                    <a href="#" class="change-value text">
                                                        <span>L</span>
                                                    </a>
                                                    <a href="#" class="change-value text over">
                                                        <span>XXL</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style-1">
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
                                            <img src="assets/images/product-item-black-2.jpg" alt="img">
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
                                                    <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                           class="input-qty qty" size="4">
                                                    <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                </div>
                                            </div>
                                            <button class="single_add_to_cart_button button">Add to cart</button>
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
                                                    <a href="#" class="change-value text">
                                                        <span>50ml</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style-1">
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
                                            <img src="assets/images/product-item-black-3.jpg" alt="img">
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
                                                    <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                           class="input-qty qty" size="4">
                                                    <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                </div>
                                            </div>
                                            <button class="single_add_to_cart_button button">Add to cart</button>
                                        </div>
                                        <div class="variations">
                                            <div class="variation">
                                                <label class="variation-label">
                                                    Capacity:
                                                </label>
                                                <div class="variation-value">
                                                    <a href="#" class="change-value text">
                                                        <span>S</span>
                                                    </a>
                                                    <a href="#" class="change-value text">
                                                        <span>M</span>
                                                    </a>
                                                    <a href="#" class="change-value text">
                                                        <span>L</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style-1 product-type-variable">
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
                                            <img src="assets/images/product-item-black-4.jpg" alt="img">
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
                                                    <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                           class="input-qty qty" size="4">
                                                    <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                </div>
                                            </div>
                                            <button class="single_add_to_cart_button button">Add to cart</button>
                                        </div>
                                        <div class="variations">
                                            <div class="variation">
                                                <label class="variation-label">
                                                    Capacity:
                                                </label>
                                                <div class="variation-value">
                                                    <a href="#" class="change-value text">
                                                        <span>XS</span>
                                                    </a>
                                                    <a href="#" class="change-value text over">
                                                        <span>M</span>
                                                    </a>
                                                    <a href="#" class="change-value text active">
                                                        <span>L</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style-1 product-type-variable">
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
                                            <img src="assets/images/product-item-black-5.jpg" alt="img">
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
                                                    <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                           class="input-qty qty" size="4">
                                                    <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                </div>
                                            </div>
                                            <button class="single_add_to_cart_button button">Add to cart</button>
                                        </div>
                                        <div class="variations">
                                            <div class="variation">
                                                <label class="variation-label">
                                                    Capacity:
                                                </label>
                                                <div class="variation-value">
                                                    <a href="#" class="change-value text">
                                                        <span>M</span>
                                                    </a>
                                                    <a href="#" class="change-value text">
                                                        <span>L</span>
                                                    </a>
                                                    <a href="#" class="change-value text">
                                                        <span>XL</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style-1 product-type-variable">
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
                                            <img src="assets/images/product-item-black-6.jpg" alt="img">
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
                                                    <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                           class="input-qty qty" size="4">
                                                    <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                </div>
                                            </div>
                                            <button class="single_add_to_cart_button button">Add to cart</button>
                                        </div>
                                        <div class="variations">
                                            <div class="variation">
                                                <label class="variation-label">
                                                    Capacity:
                                                </label>
                                                <div class="variation-value">
                                                    <a href="#" class="change-value text active">
                                                        <span>XS</span>
                                                    </a>
                                                    <a href="#" class="change-value text over">
                                                        <span>S</span>
                                                    </a>
                                                    <a href="#" class="change-value text">
                                                        <span>M</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vereesa-blog-wraap default">
            <div class="container">
                <h3 class="custommenu-title-blog">
                    Our Latest News
                </h3>
                <div class="vereesa-blog style2">
                    <div class="owl-slick equal-container nav-center"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":2}},{"breakpoint":"1200","settings":{"slidesToShow":1}},{"breakpoint":"992","settings":{"slidesToShow":1}},{"breakpoint":"768","settings":{"slidesToShow":1}},{"breakpoint":"481","settings":{"slidesToShow":1}}]'>
                        <div class="vereesa-blog-item equal-element style2">
                            <div class="vereesa-blog-inner">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="assets/images/slider-blog-thumb-5.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <div class="post-top">
                                        <a href="#">Lamp</a>
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
                                    <div class="post-date">
                                        Agust 17, 09:14 am
                                    </div>
                                    <h2 class="blog-title">
                                        <a href="#">Please join us as we evolve and disrupt the industry together</a>
                                    </h2>
                                    <div class="blog-meta">
                                        <div class="blog-meta-wrapp">
												<span class="author">
													<img src="assets/images/avt-blog1.png" alt="img">
													Adam Smith
												</span>
                                            <span class="view">
													<i class="icon fa fa-eye" aria-hidden="true"></i>
													631
												</span>
                                            <span class="comment">
													<i class="icon fa fa-commenting" aria-hidden="true"></i>
													84
												</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vereesa-blog-item equal-element style2">
                            <div class="vereesa-blog-inner">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="assets/images/slider-blog-thumb-6.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <div class="post-top">
                                        <a href="#">New Arrivals</a>
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
                                    <div class="post-date">
                                        Agust 17, 09:14 am
                                    </div>
                                    <h2 class="blog-title">
                                        <a href="#">Rosa was easy to deal, arrived quickly and very happy</a>
                                    </h2>
                                    <div class="blog-meta">
                                        <div class="blog-meta-wrapp">
												<span class="author">
													<img src="assets/images/avt-blog1.png" alt="img">
													Adam Smith
												</span>
                                            <span class="view">
													<i class="icon fa fa-eye" aria-hidden="true"></i>
													631
												</span>
                                            <span class="comment">
													<i class="icon fa fa-commenting" aria-hidden="true"></i>
													84
												</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vereesa-blog-item equal-element style2">
                            <div class="vereesa-blog-inner">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="assets/images/slider-blog-thumb-7.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <div class="post-top">
                                        <a href="#">New Arrivals</a>
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
                                    <div class="post-date">
                                        Agust 17, 09:14 am
                                    </div>
                                    <h2 class="blog-title">
                                        <a href="#">How to Build Your Perfect Lighting</a>
                                    </h2>
                                    <div class="blog-meta">
                                        <div class="blog-meta-wrapp">
												<span class="author">
													<img src="assets/images/avt-blog1.png" alt="img">
													Adam Smith
												</span>
                                            <span class="view">
													<i class="icon fa fa-eye" aria-hidden="true"></i>
													631
												</span>
                                            <span class="comment">
													<i class="icon fa fa-commenting" aria-hidden="true"></i>
													84
												</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection