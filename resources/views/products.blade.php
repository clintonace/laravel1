@extends('layouts.app')

@section('content')

<body class="shop_page">
    <div id="ec-overlay"><span class="loader_img"></span></div>



    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">User Profile</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Profile</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- User profile section -->
    <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
        <div class="container">
            <div class="row">
                <!-- Sidebar Area Start -->

@include('partial.sidebar')


                <div class="ec-shop-rightside col-lg-9 col-md-12">
                    <div class="ec-vendor-dashboard-card ec-vendor-setting-card">
                        <div class="ec-vendor-card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ec-vendor-dashboard-card space-bottom-30">
                                        <div class="ec-vendor-card-header">
                                            <h5>Product List</h5>
                                            <div class="ec-header-btn">
                                                <a class="btn btn-lg btn-primary" href="#">View All</a>
                                                <a class="btn btn-lg btn-primary" href="#">Add</a>
                                            </div>
                                        </div>
                                        <div class="ec-vendor-card-body">
                                            <div class="ec-vendor-card-table">
                                                <table class="table ec-table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($products as $product )
                                                        <tr>
                                                            <th scope="row"><span>{{$product->id}}</span></th>
                                                            <td><img class="prod-img" src="/products/{{$product->image}}"
                                                                    alt="product image"></td>
                                                            <td><span>{{$product->title}}</span></td>
                                                            <td><span>{{$product->category}}</span></td>
                                                            <td><span>{{$product->quantity}}</span></td>
                                                            <td><span>{{$product->price}}</span></td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
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
    </section>
    <!-- End User profile section -->


    <!-- Modal -->
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="ec-vendor-block-img space-bottom-30">
                            <div class="ec-vendor-block-bg cover-upload">
                                <div class="thumb-upload">
                                    <div class="thumb-edit">
                                        <input type='file' id="thumbUpload01" class="ec-image-upload"
                                            accept=".png, .jpg, .jpeg" />
                                        <label><img src="assets/images/icons/edit.svg"
                                                class="svg_img header_svg" alt="edit" /></label>
                                    </div>
                                    <div class="thumb-preview ec-preview">
                                        <div class="image-thumb-preview">
                                            <img class="image-thumb-preview ec-image-preview v-img"
                                                src="assets/images/banner/8.jpg" alt="edit" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-vendor-block-detail">
                                <div class="thumb-upload">
                                    <div class="thumb-edit">
                                        <input type='file' id="thumbUpload02" class="ec-image-upload"
                                            accept=".png, .jpg, .jpeg" />
                                        <label><img src="assets/images/icons/edit.svg"
                                                class="svg_img header_svg" alt="edit" /></label>
                                    </div>
                                    <div class="thumb-preview ec-preview">
                                        <div class="image-thumb-preview">
                                            <img class="image-thumb-preview ec-image-preview v-img"
                                                src="assets/images/user/1.jpg" alt="edit" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-vendor-upload-detail">
                                <form class="row g-3">
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">First name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">Last name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-12 space-t-15">
                                        <label class="form-label">Address 1</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-12 space-t-15">
                                        <label class="form-label">Address 2</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-12 space-t-15">
                                        <label class="form-label">Address 3</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">Email id 1</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">Email id 2</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">Phone number 1</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6 space-t-15">
                                        <label class="form-label">Phone number 2</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-12 space-t-15">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="#" class="btn btn-lg btn-secondary qty_close" data-bs-dismiss="modal"
                                            aria-label="Close">Close</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.html" class="ec-header-btn"><img src="assets/images/icons/home.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg"
                            class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.html" class="ec-header-btn"><img src="assets/images/icons/user.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <div class="recent-purchase">
        <img src="assets/images/product-image/1.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>stylish baby shoes</h6>
            <p>10 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Cart Floating Button -->
    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /></div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>
    <!-- Cart Floating Button end -->

    <!-- Whatsapp -->
    <div class="ec-style ec-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="ec-panel">
            <!-- Panel Header -->
            <div class="ec-header">
                <strong>Need Help?</strong>
                <p>Chat with us on WhatsApp</p>
            </div>
            <!-- Panel Content -->
            <div class="ec-body">
                <ul>
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_01.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Sahar Darya</span>
                                    <p>Sahar left 7 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_02.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-online"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Yolduz Rafi</span>
                                    <p>Yolduz is online</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_03.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Nargis Hawa</span>
                                    <p>Nargis left 30 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_04.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Khadija Mehr</span>
                                    <p>Khadija left 50 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                </ul>
            </div>
        </div>
        <!--/ End Floating Panel Container -->
        <!-- Start Right Floating Button-->
        <div class="ec-right-bottom">
            <div class="ec-box">
                <div class="ec-button rotateBackward">
                    <img class="whatsapp" src="assets/images/common/whatsapp.png" alt="whatsapp icon" />
                </div>
            </div>
        </div>
        <!--/ End Right Floating Button-->
    </div>
    <!-- Whatsapp end -->

    <!-- Feature tools -->
    <div class="ec-tools-sidebar-overlay"></div>
    <div class="ec-tools-sidebar">
        <div class="tool-title">
            <h3>Features</h3>
        </div>
        <a href="#" class="ec-tools-sidebar-toggle in-out">
            <img alt="icon" src="assets/images/common/settings.png" />
        </a>
        <div class="ec-tools-detail">
            <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
                <h3>Color Scheme</h3>
                <ul class="bg-panel">
                    <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                    <li data-color="02"><a href="#" class="colorcode2"></a></li>
                    <li data-color="03"><a href="#" class="colorcode3"></a></li>
                    <li data-color="04"><a href="#" class="colorcode4"></a></li>
                    <li data-color="05"><a href="#" class="colorcode5"></a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Backgroung</h3>
                <ul class="bg-panel">
                    <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                    <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                    <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                    <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Full Screen mode</h3>
                <div class="ec-fullscreen-mode">
                    <div class="ec-fullscreen-switch">
                        <div class="ec-fullscreen-btn">Mode</div>
                        <div class="ec-fullscreen-on">On</div>
                        <div class="ec-fullscreen-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Dark mode</h3>
                <div class="ec-change-mode">
                    <div class="ec-mode-switch">
                        <div class="ec-mode-btn">Mode</div>
                        <div class="ec-mode-on">On</div>
                        <div class="ec-mode-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>RTL mode</h3>
                <div class="ec-change-rtl">
                    <div class="ec-rtl-switch">
                        <div class="ec-rtl-btn">Rtl</div>
                        <div class="ec-rtl-on">On</div>
                        <div class="ec-rtl-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Clear local storage</h3>
                <a class="clear-cach" href="javascript:void(0)">Clear Cache & Default</a>
            </div>
        </div>
    </div>
    <!-- Feature tools end -->

    <!-- Vendor JS -->
    <script data-cfasync="false" src="https://loopinfosol.in/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/bootstrap-tagsinput.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/nouislider.js"></script>
    <script src="assets/js/plugins/countdownTimer.min.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/infiniteslidev2.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>

    <!-- Main Js -->
    <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from loopinfosol.in/themeforest/ekka-html-v2/ekka-html/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 22:05:43 GMT -->
</html>

@endsection
