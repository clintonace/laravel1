

@extends('layouts.app');

@section('content')



 <!-- ekka Cart Start -->
 <div class="ec-side-cart-overlay"></div>
 <div id="ec-side-cart" class="ec-side-cart">
     <div class="ec-cart-inner">
         <div class="ec-cart-top">
             <div class="ec-cart-title">
                 <span class="cart_title">My Cart</span>
                 <button class="ec-close">×</button>
             </div>
             <ul class="eccart-pro-items">
                 <li>
                     <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                             src="assets/images/product-image/6_1.jpg" alt="product"></a>
                     <div class="ec-pro-content">
                         <a href="product-left-sidebar.html" class="cart_pro_title">T-shirt For Women</a>
                         <span class="cart-price"><span>$76.00</span> x 1</span>
                         <div class="qty-plus-minus">
                             <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                         </div>
                         <a href="javascript:void(0)" class="remove">×</a>
                     </div>
                 </li>
                 <li>
                     <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                             src="assets/images/product-image/12_1.jpg" alt="product"></a>
                     <div class="ec-pro-content">
                         <a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
                         <span class="cart-price"><span>$64.00</span> x 1</span>
                         <div class="qty-plus-minus">
                             <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                         </div>
                         <a href="javascript:void(0)" class="remove">×</a>
                     </div>
                 </li>
                 <li>
                     <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                             src="assets/images/product-image/3_1.jpg" alt="product"></a>
                     <div class="ec-pro-content">
                         <a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
                         <span class="cart-price"><span>$59.00</span> x 1</span>
                         <div class="qty-plus-minus">
                             <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                         </div>
                         <a href="javascript:void(0)" class="remove">×</a>
                     </div>
                 </li>
             </ul>
         </div>
         <div class="ec-cart-bottom">
             <div class="cart-sub-total">
                 <table class="table cart-table">
                     <tbody>
                         <tr>
                             <td class="text-left">Sub-Total :</td>
                             <td class="text-right">$300.00</td>
                         </tr>
                         <tr>
                             <td class="text-left">VAT (20%) :</td>
                             <td class="text-right">$60.00</td>
                         </tr>
                         <tr>
                             <td class="text-left">Total :</td>
                             <td class="text-right primary-color">$360.00</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
             <div class="cart_btn">
                 <a href="cart.html" class="btn btn-primary">View Cart</a>
                 <a href="checkout.html" class="btn btn-secondary">Checkout</a>
             </div>
         </div>
     </div>
 </div>
 <!-- ekka Cart End -->

 <!-- Ec breadcrumb start -->
 <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="row ec_breadcrumb_inner">
                     <div class="col-md-6 col-sm-12">
                         <h2 class="ec-breadcrumb-title">Hot Offer</h2>
                     </div>
                     <div class="col-md-6 col-sm-12">
                         <!-- ec-breadcrumb-list start -->
                         <ul class="ec-breadcrumb-list">
                             <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                             <li class="ec-breadcrumb-item active">Offer</li>
                         </ul>
                         <!-- ec-breadcrumb-list end -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Ec breadcrumb end -->

 <!-- Start Offer section -->
 <section class="labels section-space-p">
     <div class="container">
         <div class="row">
             <div class="col-md-12 text-center">
                 <div class="section-title">
                     <h2 class="ec-bg-title">Style 1</h2>
                     <h2 class="ec-title">Style 1</h2>
                     <p class="sub-title">Browse The Collection of Top Categories</p>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-4 col-md-6 col-sm-12 col-12 margin-b-30">
                 <div class="ec-offer-coupon">
                     <div class="ec-cpn-brand">
                         <img class="ec-brand-img" src="assets/images/offer-image/2.jpg" alt="" />
                     </div>
                     <div class="ec-cpn-title">
                         <h2 class="coupon-title">Get 15% off on branded Shoes</h2>
                     </div>
                     <div class="ec-cpn-desc">
                         <p class="coupon-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                             industry has been.</p>
                     </div>
                     <div class="ec-cpn-code">
                         <a href="#" class="btn btn-secondary">Shop Now</a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 col-12 margin-b-30">
                 <div class="ec-offer-coupon">
                     <div class="ec-cpn-brand">
                         <img class="ec-brand-img" src="assets/images/offer-image/3.jpg" alt="" />
                     </div>
                     <div class="ec-cpn-title">
                         <h2 class="coupon-title">Get 30% off on branded chair</h2>
                     </div>
                     <div class="ec-cpn-desc">
                         <p class="coupon-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                             industry has been.</p>
                     </div>
                     <div class="ec-cpn-code">
                         <a href="#" class="btn btn-secondary">Shop Now</a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 col-12 m-auto">
                 <div class="ec-offer-coupon">
                     <div class="ec-cpn-brand">
                         <img class="ec-brand-img" src="assets/images/offer-image/4.jpg" alt="" />
                     </div>
                     <div class="ec-cpn-title">
                         <h2 class="coupon-title">Get 50% off on branded Hand Bags</h2>
                     </div>
                     <div class="ec-cpn-desc">
                         <p class="coupon-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                             industry has been.</p>
                     </div>
                     <div class="ec-cpn-code">
                         <a href="#" class="btn btn-secondary">Shop Now</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Offer section -->

 <!-- Start Offer section -->
 <section class="labels section-space-p">
     <div class="container">
         <div class="row">
             <div class="col-md-12 text-center">
                 <div class="section-title">
                     <h2 class="ec-bg-title">Style 2</h2>
                     <h2 class="ec-title">Style 2</h2>
                     <p class="sub-title">Browse The Collection of Top Categories</p>
                 </div>
             </div>
         </div>
         <div class="ec-line-offer" style="background-image: url('assets/images/offer-image/offer-banner-06.jpg');">
             <div class="ec-line-offer-info">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-6">
                             <h6>On Furniture</h6>
                             <h2 class="offer-upto">Upto <span>45%</span> OFF</h2>
                             <p class="offer-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry. Lorem Ipsum has been the industry's.</p>
                             <div class="offer-btn"><a class="btn-shop-now">SHOP NOW!</a></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
  <!-- End Offer section -->



@endsection
