@extends('./user/main')

@section('title', 'Home1')

@section('content')

<div class="main-content main-content-product no-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-trail breadcrumbs">
						<ul class="trail-items breadcrumb">
							<li class="trail-item trail-begin">
								<a href="index.html">Home</a>
							</li>
							<li class="trail-item trail-end active">
								Grid Products
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="content-area shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="site-main">
						<h3 class="custom_blog_title">
							Grid Products
						</h3>
						<div class="shop-top-control">
							<form class="select-item select-form">
								<span class="title">Sort</span>
								<select data-placeholder="9 Products/Page" class="chosen-select">
									<option value="2">9 Products/Page</option>
									<option value="1">12 Products/Page</option>
									<option value="3">10 Products/Page</option>
									<option value="4">8 Products/Page</option>
									<option value="5">6 Products/Page</option>
								</select>
							</form>
							<form class="filter-choice select-form">
								<span class="title">Sort by</span>
								<select data-placeholder="Price: Low to High" class="chosen-select">
									<option value="1">Price: Low to High</option>
									<option value="2">Sort by popularity</option>
									<option value="3">Sort by average rating</option>
									<option value="4">Sort by newness</option>
									<option value="5">Sort by price: low to high</option>
								</select>
							</form>
							<div class="grid-view-mode">
								<div class="inner">
									<a href="listproducts.html" class="modes-mode mode-list">
										<span></span>
										<span></span>
									</a>
									<a href="gridproducts.html" class="modes-mode mode-grid  active">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</a>
								</div>
							</div>
						</div>
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
							</li>
							<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
							</li>
							<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
							</li>
							<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
							</li>
							<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
							</li>
							<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
										<div class="yith-wcwl-add-to-wishlist">
											<div class="yith-wcwl-add-button">
												<a href="#">Add to Wishlist</a>
											</div>
										</div>
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-20.jpg" alt="img">
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
							</li>
							<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
												<img src="assets/images/product-item-21.jpg" alt="img">
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
												<img src="assets/images/product-item-22.jpg" alt="img">
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
														<input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
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
							</li>
						</ul>
						<div class="pagination clearfix style2">
							<div class="nav-link">
								<a href="#" class="page-numbers"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>
								<a href="#" class="page-numbers">1</a>
								<a href="#" class="page-numbers">2</a>
								<a href="#" class="page-numbers current">3</a>
								<a href="#" class="page-numbers"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="wrapper-sidebar shop-sidebar">
						<div class="widget woof_Widget">
							<div class="widget widget-categories">
								<h3 class="widgettitle">Categories</h3>
								<ul class="list-categories">
									<li>
										<input type="checkbox" id="cb1">
										<label for="cb1" class="label-text">
											New Arrivals
										</label>
									</li>
									<li>
										<input type="checkbox" id="cb2">
										<label for="cb2" class="label-text">
											Lighting
										</label>
									</li>
									<li>
										<input type="checkbox" id="cb3">
										<label for="cb3" class="label-text">
											Tables
										</label>
									</li>
									<li>
										<input type="checkbox" id="cb4">
										<label for="cb4" class="label-text">
											Chairs
										</label>
									</li>
									<li>
										<input type="checkbox" id="cb5">
										<label for="cb5" class="label-text">
											Accessories
										</label>
									</li>
									<li>
										<input type="checkbox" id="cb6">
										<label for="cb6" class="label-text">
											Lamp
										</label>
									</li>
								</ul>
							</div>
							<div class="widget widget_filter_price">
								<h4 class="widgettitle">
									Price
								</h4>
								<div class="price-slider-wrapper">
		                    		<div data-label-reasult="Range:" data-min="0" data-max="3000" data-unit="€" class="slider-range-price " data-value-min="0" data-value-max="1000">	
		                    		</div>
		                    		<div class="price-slider-amount">
			                            <span class="from">€45</span>
			                            <span class="to">€215</span>
			                        </div>
								</div>
							</div>
							<div class="widget widget-brand">
								<h3 class="widgettitle">Brand</h3>
								<ul class="list-brand">
									<li>
										<input id="cb7" type="checkbox">
										<label for="cb7" class="label-text">New Arrivals</label>
									</li>
									<li>
										<input id="cb8" type="checkbox">
										<label for="cb8" class="label-text">Lighting</label>
									</li>
									<li>
										<input id="cb9" type="checkbox">
										<label for="cb9" class="label-text">Tables</label>
									</li>
									<li>
										<input id="cb10" type="checkbox">
										<label for="cb10" class="label-text">Chairs</label>
									</li>
									<li>
										<input id="cb11" type="checkbox">
										<label for="cb11" class="label-text">Accessories</label>
									</li>
									<li>
										<input id="cb12" type="checkbox">
										<label for="cb12" class="label-text">Lamp</label>
									</li>
								</ul>
							</div>
							<div class="widget widget_filter_size">
								<h4 class="widgettitle">Size</h4>
								<ul class="list-size">
									<li>
										<a href="#">xs</a>
									</li>
									<li>
										<a href="#">s</a>
									</li>
									<li class="active">
										<a href="#">m</a>
									</li>
									<li>
										<a href="#">l</a>
									</li>
									<li>
										<a href="#">xl</a>
									</li>
									<li>
										<a href="#">xxl</a>
									</li>
								</ul>
							</div>
							<div class="widget widget-color">
								<h4 class="widgettitle">
									Color
								</h4>
								<div class="list-color">
									<a href="#" class="color1"></a>
									<a href="#" class="color2 "></a>
									<a href="#" class="color3 active"></a>
									<a href="#" class="color4"></a>
									<a href="#" class="color5"></a>
									<a href="#" class="color6"></a>
									<a href="#" class="color7"></a>
								</div>
							</div>
							<div class="widget widget-tags">
								<h3 class="widgettitle">
									Popular Tags
								</h3>
								<ul class="tagcloud">
									<li class="tag-cloud-link">
										<a href="#">Fashion</a>
									</li>
									<li class="tag-cloud-link">
										<a href="#">Chairs</a>
									</li>
									<li class="tag-cloud-link">
										<a href="#">Hat</a>
									</li>
									<li class="tag-cloud-link active">
										<a href="#">Accessories</a>
									</li>
									<li class="tag-cloud-link">
										<a href="#">Hot</a>
									</li>
									<li class="tag-cloud-link">
										<a href="#">Lamp</a>
									</li>
									<li class="tag-cloud-link">
										<a href="#">Lighting</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="widget newsletter-widget">
							<div class="newsletter-form-wrap ">
								<h3 class="title">Subscribe to Our Newsletter</h3>
								<div class="subtitle">
									More special Deals, Events & Promotions
								</div>
								<input type="email" class="email" placeholder="Your email letter">
								<button type="submit" class="button submit-newsletter">Subscribe</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
