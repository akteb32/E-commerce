 <header class="header-area header-style-1 header-height-2">
     {{-- mobile-promotion --}}
     <div class="mobile-promotion">
         <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
     </div>




     {{-- Navbar - 1  --}}
     <div class="header-top header-top-ptb-1 d-none d-lg-block">
         <div class="container">
             <div class="row align-items-center">


                 <div class="col-xl-3 col-lg-4">




                     @auth
                         <div class="header-info">
                             <ul>

                                 {{-- My Cart --}}
                                 <li><a href="resources\views\frontend\pages\cart\index.blade.php">My Cart</a></li>
                                 {{-- Checkout --}}
                                 <li><a href="resources\views\frontend\pages\cart\checkout.blade.php">Checkout</a></li>
                                 {{-- Order Tracking --}}
                                 <li><a href="resources\views\frontend\pages\order\show.blade.php">Order Tracking</a></li>
                             </ul>
                         </div>
                     @endauth



                 </div>




                 <div class="col-xl-6 col-lg-4">
                     <div class="text-center">
                         <div id="news-flash" class="d-inline-block">
                             <ul>
                                 <li>100% Secure delivery without contacting the courier</li>
                                 <li>Supper Value Deals - Save more with coupons</li>
                                 <li>Trendy 25silver jewelry, save up 35% off today</li>
                             </ul>
                         </div>
                     </div>
                 </div>



                 <div class="col-xl-3 col-lg-4">
                     <div class="header-info header-info-right">
                         <ul>

                             <li>
                                 <a class="language-dropdown-active" href="#">English <i
                                         class="fi-rs-angle-small-down"></i></a>
                                 <ul class="language-dropdown">
                                     <li>
                                         <a href="#"><img
                                                 src="{{ asset('frontend/assets/imgs/theme/flag-fr.png') }}"
                                                 alt="" />Français</a>
                                     </li>
                                     <li>
                                         <a href="#"><img
                                                 src="{{ asset('frontend/assets/imgs/theme/flag-dt.png') }}"
                                                 alt="" />Deutsch</a>
                                     </li>
                                     <li>
                                         <a href="#"><img
                                                 src="{{ asset('frontend/assets/imgs/theme/flag-ru.png') }}"
                                                 alt="" />Pусский</a>
                                     </li>
                                 </ul>
                             </li>

                             <li>Need help? Call Us: <strong class="text-brand"> + 1800 900</strong></li>

                         </ul>
                     </div>
                 </div>



             </div>
         </div>
     </div>



     {{-- Navbar - 2  --}}
     <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
         <div class="container">
             <div class="header-wrap">
                 <div class="logo logo-width-1">
                     <a href="index.html"><img src="{{ asset('frontend/assets/imgs/theme/logo.svg') }}"
                             alt="logo" /></a>
                 </div>
                 <div class="header-right">

                     {{-- search  --}}
                     <div class="search-style-2">
                         <form action="#">
                             <select class="select-active">
                                 <option>All Categories</option>
                                 <option>Milks and Dairies</option>
                                 <option>Wines & Alcohol</option>
                                 <option>Clothing & Beauty</option>
                                 <option>Pet Foods & Toy</option>
                                 <option>Fast food</option>
                                 <option>Baking material</option>
                                 <option>Vegetables</option>
                                 <option>Fresh Seafood</option>
                                 <option>Noodles & Rice</option>
                                 <option>Ice cream</option>
                             </select>
                             <input type="text" placeholder="Search for items..." />
                         </form>
                     </div>




                     <div class="header-action-right">
                         <div class="header-action-2">
                             @guest
                                 {{-- login.user --}}
                                 <div class="header-action-icon-2">

                                     <a href="{{ route('login.user') }}"><span class="lable">login as user</span></a>
                                 </div>

                             @endguest

                             @guest
                                 {{-- login.admin --}}
                                 <div class="header-action-icon-2">

                                     <a href="{{ route('login.admin') }}"><span class="lable">login as admin</span></a>
                                 </div>
                             @endguest



                             {{-- div 1  --}}
                             <div class="search-location">
                                 <form action="#">
                                     <select class="select-active">
                                         <option>Your Location</option>
                                         <option>Alabama</option>
                                         <option>Alaska</option>
                                         <option>Arizona</option>
                                         <option>Delaware</option>
                                         <option>Florida</option>
                                         <option>Georgia</option>
                                         <option>Hawaii</option>
                                         <option>Indiana</option>
                                         <option>Maryland</option>
                                         <option>Nevada</option>
                                         <option>New Jersey</option>
                                         <option>New Mexico</option>
                                         <option>New York</option>
                                     </select>
                                 </form>
                             </div>


                             @auth
                                 {{-- Wishlist --}}
                                 <div class="header-action-icon-2">
                                     <a href="shop-wishlist.html">
                                         <img class="svgInject" alt="Nest"
                                             src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg') }}" />
                                         <span class="pro-count blue">6</span>
                                     </a>
                                     <a href="shop-wishlist.html"><span class="lable">Wishlist</span></a>
                                 </div>
                             @endauth

                             @auth

                                 {{-- Cart --}}
                                 <div class="header-action-icon-2">
                                     <a class="mini-cart-icon" href="shop-cart.html">
                                         <img alt="Nest"
                                             src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg') }}" />
                                         <span class="pro-count blue">2</span>
                                     </a>
                                     <a href="shop-cart.html"><span class="lable">Cart</span></a>
                                     <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                         <ul>
                                             <li>
                                                 <div class="shopping-cart-img">
                                                     <a href="shop-product-right.html"><img alt="Nest"
                                                             src="{{ asset('frontend/assets/imgs/shop/thumbnail-3.jpg') }}" /></a>
                                                 </div>
                                                 <div class="shopping-cart-title">
                                                     <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                     <h4><span>1 × </span>$800.00</h4>
                                                 </div>
                                                 <div class="shopping-cart-delete">
                                                     <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                 </div>
                                             </li>
                                             <li>
                                                 <div class="shopping-cart-img">
                                                     <a href="shop-product-right.html"><img alt="Nest"
                                                             src="{{ asset('frontend/assets/imgs/shop/thumbnail-2.jpg') }}" /></a>
                                                 </div>
                                                 <div class="shopping-cart-title">
                                                     <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                     <h4><span>1 × </span>$3200.00</h4>
                                                 </div>
                                                 <div class="shopping-cart-delete">
                                                     <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                 </div>
                                             </li>
                                         </ul>
                                         <div class="shopping-cart-footer">
                                             <div class="shopping-cart-total">
                                                 <h4>Total <span>$4000.00</span></h4>
                                             </div>
                                             <div class="shopping-cart-button">
                                                 <a href="shop-cart.html" class="outline">View cart</a>
                                                 <a href="shop-checkout.html">Checkout</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             @endauth

                             @auth
                                 {{-- Account --}}
                                 <div class="header-action-icon-2">
                                     <a href="#">
                                         <img class="svgInject" alt="Nest"
                                             src="{{ asset('frontend/assets/imgs/theme/icons/icon-user.svg') }}" />
                                     </a>
                                     <a href="#"><span class="lable ml-0">Account</span></a>
                                     <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                         <ul>
                                             <li>
                                                 <a href="#"><i class="fi fi-rs-user mr-10"></i>My
                                                     Account</a>
                                             </li>
                                             <li>
                                                 <a href="page-account.html"><i
                                                         class="#"></i>Order Tracking</a>
                                             </li>
                                             <li>
                                                 <a href="#"><i class="fi fi-rs-label mr-10"></i>My
                                                     Voucher</a>
                                             </li>
                                             <li>
                                                 <a href="#"><i class="fi fi-rs-heart mr-10"></i>My
                                                     Wishlist</a>
                                             </li>
                                             <li>
                                                 <a href="#"><i
                                                         class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                             </li>
                                             <li>
                                                 <form method="POST" action="{{ route('logout') }}">
                                                     @csrf
                                                     <button type="submit"
                                                         style="background: none; border: none; padding: 0; color: inherit;">
                                                         <i class="fi fi-rs-sign-out mr-10"></i> Sign out
                                                     </button>
                                                 </form>
                                             </li>

                                             
                                         </ul>
                                     </div>
                                 </div>
                             @endauth


                         </div>
                     </div>








                 </div>
             </div>
         </div>
     </div>




     {{-- Navbar - 3  --}}
     <div class="header-bottom header-bottom-bg-color sticky-bar">
         <div class="container">
             <div class="header-wrap header-space-between position-relative">
                 <div class="logo logo-width-1 d-block d-lg-none">
                     <a href="index.html"><img src="{{ asset('frontend/assets/imgs/theme/logo.svg') }}"
                             alt="logo" /></a>
                 </div>


                 {{-- MENU -  --}}
                 <div class="header-nav d-none d-lg-flex">

                     {{-- All Categories menu --}}
                     <div class="main-categori-wrap d-none d-lg-block">
                         <a class="categories-button-active" href="#">
                             <span class="fi-rs-apps"></span> All Categories
                             <i class="fi-rs-angle-down"></i>
                         </a>
                         <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                             <div class="d-flex categori-dropdown-inner">
                                 <ul>
                                     <li>
                                         <a href="shop-grid-right.html"> <img
                                                 src="{{ asset('frontend/assets/imgs/theme/icons/category-1.svg') }}"
                                                 alt="" />Milks and Dairies</a>
                                     </li>
                                     <li>
                                         <a href="shop-grid-right.html"> <img
                                                 src="{{ asset('frontend/assets/imgs/theme/icons/category-2.svg') }}"
                                                 alt="" />Clothing & beauty</a>
                                     </li>
                                     <li>
                                         <a href="shop-grid-right.html"> <img
                                                 src="{{ asset('frontend/assets/imgs/theme/icons/category-3.svg') }}"
                                                 alt="" />Pet Foods & Toy</a>
                                     </li>
                                     <li>
                                         <a href="shop-grid-right.html"> <img
                                                 src="{{ asset('frontend/assets/imgs/theme/icons/category-4.svg') }}"
                                                 alt="" />Baking material</a>
                                     </li>
                                     <li>
                                         <a href="shop-grid-right.html"> <img
                                                 src="{{ asset('frontend/assets/imgs/theme/icons/category-5.svg') }}"
                                                 alt="" />Fresh Fruit</a>
                                     </li>
                                 </ul>
                                 <ul class="end">
                                     <li>
                                         <a href="shop-grid-right.html"> <img
                                                 src="{{ asset('frontend/assets/imgs/theme/icons/category-6.svg') }}"
                                                 alt="" />Wines & Drinks</a>
                                     </li>
                                     <li>
                                         <a href="shop-grid-right.html"> <img
                                                 src="{{ asset('frontend/assets/imgs/theme/icons/category-7.svg') }}"
                                                 alt="" />Fresh Seafood</a>
                                     </li>
                                     <li>
                                         <a href="shop-grid-right.html"> <img
                                                 src="{{ asset('frontend/assets/imgs/theme/icons/category-8.svg') }}"
                                                 alt="" />Fast food</a>
                                     </li>
                                     <li>
                                         <a href="shop-grid-right.html"> <img
                                                 src="{{ asset('frontend/assets/imgs/theme/icons/category-9.svg') }}"
                                                 alt="" />Vegetables</a>
                                     </li>
                                     <li>
                                         <a href="shop-grid-right.html"> <img
                                                 src="{{ asset('frontend/assets/imgs/theme/icons/category-10.svg') }}"
                                                 alt="" />Bread and Juice</a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="more_slide_open" style="display: none">
                                 <div class="d-flex categori-dropdown-inner">
                                     <ul>
                                         <li>
                                             <a href="shop-grid-right.html"> <img
                                                     src="{{ asset('frontend/assets/imgs/theme/icons/icon-1.svg') }}"
                                                     alt="" />Milks and Dairies</a>
                                         </li>
                                         <li>
                                             <a href="shop-grid-right.html"> <img
                                                     src="{{ asset('frontend/assets/imgs/theme/icons/icon-2.svg') }}"
                                                     alt="" />Clothing & beauty</a>
                                         </li>
                                     </ul>
                                     <ul class="end">
                                         <li>
                                             <a href="shop-grid-right.html"> <img
                                                     src="{{ asset('frontend/assets/imgs/theme/icons/icon-3.svg') }}"
                                                     alt="" />Wines & Drinks</a>
                                         </li>
                                         <li>
                                             <a href="shop-grid-right.html"> <img
                                                     src="{{ asset('frontend/assets/imgs/theme/icons/icon-4.svg') }}"
                                                     alt="" />Fresh Seafood</a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="more_categories"><span class="icon"></span> <span
                                     class="heading-sm-1">Show more...</span></div>
                         </div>
                     </div>
                     {{-- menu --}}
                     <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                         <nav>
                             <ul>

                                 {{-- Home --}}
                                 <li>
                                     <a class="active" href="index.html">Home </a>

                                 </li>

                                 {{-- About --}}
                                 <li>
                                     <a href="page-about.html">About</a>
                                 </li>

                                 {{-- Shop --}}
                                 <li>
                                     <a href="shop-grid-right.html">Shop <i class="fi-rs-angle-down"></i></a>
                                     <ul class="sub-menu">
                                         <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                         <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                         <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                         <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                         <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                         <li>
                                             <a href="#">Single Product <i class="fi-rs-angle-right"></i></a>
                                             <ul class="level-menu">
                                                 <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                                 <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                                 <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                                 <li><a href="shop-product-vendor.html">Product – Vendor Info</a></li>
                                             </ul>
                                         </li>
                                         <li><a href="shop-filter.html">Shop – Filter</a></li>
                                         <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                         <li><a href="shop-cart.html">Shop – Cart</a></li>
                                         <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                         <li><a href="shop-compare.html">Shop – Compare</a></li>
                                         <li>
                                             <a href="#">Shop Invoice<i class="fi-rs-angle-right"></i></a>
                                             <ul class="level-menu">
                                                 <li><a href="shop-invoice-1.html">Shop Invoice 1</a></li>
                                                 <li><a href="shop-invoice-2.html">Shop Invoice 2</a></li>
                                                 <li><a href="shop-invoice-3.html">Shop Invoice 3</a></li>
                                                 <li><a href="shop-invoice-4.html">Shop Invoice 4</a></li>
                                                 <li><a href="shop-invoice-5.html">Shop Invoice 5</a></li>
                                                 <li><a href="shop-invoice-6.html">Shop Invoice 6</a></li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>

                                 {{-- Vendors --}}
                                 <li>
                                     <a href="#">Vendors <i class="fi-rs-angle-down"></i></a>
                                     <ul class="sub-menu">
                                         <li><a href="vendors-grid.html">Vendors Grid</a></li>
                                         <li><a href="vendors-list.html">Vendors List</a></li>
                                         <li><a href="vendor-details-1.html">Vendor Details 01</a></li>
                                         <li><a href="vendor-details-2.html">Vendor Details 02</a></li>
                                         <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                         <li><a href="vendor-guide.html">Vendor Guide</a></li>
                                     </ul>
                                 </li>

                                 {{-- Mega menu --}}
                                 <li class="position-static">
                                     <a href="#">Mega menu <i class="fi-rs-angle-down"></i></a>
                                     <ul class="mega-menu">
                                         <li class="sub-mega-menu sub-mega-menu-width-22">
                                             <a class="menu-title" href="#">Fruit & Vegetables</a>
                                             <ul>
                                                 <li><a href="shop-product-right.html">Meat & Poultry</a></li>
                                                 <li><a href="shop-product-right.html">Fresh Vegetables</a></li>
                                                 <li><a href="shop-product-right.html">Herbs & Seasonings</a></li>
                                                 <li><a href="shop-product-right.html">Cuts & Sprouts</a></li>
                                                 <li><a href="shop-product-right.html">Exotic Fruits & Veggies</a></li>
                                                 <li><a href="shop-product-right.html">Packaged Produce</a></li>
                                             </ul>
                                         </li>
                                         <li class="sub-mega-menu sub-mega-menu-width-22">
                                             <a class="menu-title" href="#">Breakfast & Dairy</a>
                                             <ul>
                                                 <li><a href="shop-product-right.html">Milk & Flavoured Milk</a></li>
                                                 <li><a href="shop-product-right.html">Butter and Margarine</a></li>
                                                 <li><a href="shop-product-right.html">Eggs Substitutes</a></li>
                                                 <li><a href="shop-product-right.html">Marmalades</a></li>
                                                 <li><a href="shop-product-right.html">Sour Cream</a></li>
                                                 <li><a href="shop-product-right.html">Cheese</a></li>
                                             </ul>
                                         </li>
                                         <li class="sub-mega-menu sub-mega-menu-width-22">
                                             <a class="menu-title" href="#">Meat & Seafood</a>
                                             <ul>
                                                 <li><a href="shop-product-right.html">Breakfast Sausage</a></li>
                                                 <li><a href="shop-product-right.html">Dinner Sausage</a></li>
                                                 <li><a href="shop-product-right.html">Chicken</a></li>
                                                 <li><a href="shop-product-right.html">Sliced Deli Meat</a></li>
                                                 <li><a href="shop-product-right.html">Wild Caught Fillets</a></li>
                                                 <li><a href="shop-product-right.html">Crab and Shellfish</a></li>
                                             </ul>
                                         </li>
                                         <li class="sub-mega-menu sub-mega-menu-width-34">
                                             <div class="menu-banner-wrap">
                                                 <a href="shop-product-right.html"><img
                                                         src="{{ asset('frontend/assets/imgs/banner/banner-menu.png') }}"
                                                         alt="Nest" /></a>
                                                 <div class="menu-banner-content">
                                                     <h4>Hot deals</h4>
                                                     <h3>
                                                         Don't miss<br />
                                                         Trending
                                                     </h3>
                                                     <div class="menu-banner-price">
                                                         <span class="new-price text-success">Save to 50%</span>
                                                     </div>
                                                     <div class="menu-banner-btn">
                                                         <a href="shop-product-right.html">Shop now</a>
                                                     </div>
                                                 </div>
                                                 <div class="menu-banner-discount">
                                                     <h3>
                                                         <span>25%</span>
                                                         off
                                                     </h3>
                                                 </div>
                                             </div>
                                         </li>
                                     </ul>
                                 </li>

                                 {{-- Blog --}}
                                 <li>
                                     <a href="blog-category-grid.html">Blog <i class="fi-rs-angle-down"></i></a>
                                     <ul class="sub-menu">
                                         <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                         <li><a href="blog-category-list.html">Blog Category List</a></li>
                                         <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                         <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                         <li>
                                             <a href="#">Single Post <i class="fi-rs-angle-right"></i></a>
                                             <ul class="level-menu level-menu-modify">
                                                 <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                                 <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                                 <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                                 {{-- Pages --}}
                                 <li>
                                     <a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                     <ul class="sub-menu">
                                         <li><a href="page-about.html">About Us</a></li>
                                         <li><a href="page-contact.html">Contact</a></li>
                                         <li><a href="page-account.html">My Account</a></li>
                                         <li><a href="page-login.html">Login</a></li>
                                         <li><a href="page-register.html">Register</a></li>
                                         <li><a href="page-forgot-password.html">Forgot password</a></li>
                                         <li><a href="page-reset-password.html">Reset password</a></li>
                                         <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                         <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                         <li><a href="page-terms.html">Terms of Service</a></li>
                                         <li><a href="page-404.html">404 Page</a></li>
                                     </ul>
                                 </li>

                                 {{-- Contact --}}
                                 <li>
                                     <a href="page-contact.html">Contact</a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                 </div>

                 {{-- Support Center LOGO  --}}
                 <div class="hotline d-none d-lg-flex">
                     <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-headphone.svg') }}" alt="hotline" />
                     <p>1900 - 888<span>24/7 Support Center</span></p>
                 </div>



                 <div class="header-action-icon-2 d-block d-lg-none">
                     <div class="burger-icon burger-icon-white">
                         <span class="burger-icon-top"></span>
                         <span class="burger-icon-mid"></span>
                         <span class="burger-icon-bottom"></span>
                     </div>
                 </div>


                 <div class="header-action-right d-block d-lg-none">
                     <div class="header-action-2">

                         <div class="header-action-icon-2">
                             <a href="shop-wishlist.html">
                                 <img alt="Nest"
                                     src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg') }}" />
                                 <span class="pro-count white">4</span>
                             </a>
                         </div>
                         <div class="header-action-icon-2">
                             <a class="mini-cart-icon" href="#">
                                 <img alt="Nest"
                                     src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg') }}" />
                                 <span class="pro-count white">2</span>
                             </a>
                             <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                 <ul>
                                     <li>
                                         <div class="shopping-cart-img">
                                             <a href="shop-product-right.html"><img alt="Nest"
                                                     src="{{ asset('frontend/assets/imgs/shop/thumbnail-3.jpg') }}" /></a>
                                         </div>
                                         <div class="shopping-cart-title">
                                             <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                             <h3><span>1 × </span>$800.00</h3>
                                         </div>
                                         <div class="shopping-cart-delete">
                                             <a href="#"><i class="fi-rs-cross-small"></i></a>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="shopping-cart-img">
                                             <a href="shop-product-right.html"><img alt="Nest"
                                                     src="{{ asset('frontend/assets/imgs/shop/thumbnail-4.jpg') }}" /></a>
                                         </div>
                                         <div class="shopping-cart-title">
                                             <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                             <h3><span>1 × </span>$3500.00</h3>
                                         </div>
                                         <div class="shopping-cart-delete">
                                             <a href="#"><i class="fi-rs-cross-small"></i></a>
                                         </div>
                                     </li>
                                 </ul>
                                 <div class="shopping-cart-footer">
                                     <div class="shopping-cart-total">
                                         <h4>Total <span>$383.00</span></h4>
                                     </div>
                                     <div class="shopping-cart-button">
                                         <a href="shop-cart.html">View cart</a>
                                         <a href="shop-checkout.html">Checkout</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


 </header>
