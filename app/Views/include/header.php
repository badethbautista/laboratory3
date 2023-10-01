<header>
        <div class="main_header">
            <!--header top start-->
            <div class="header_top">
                <div class="container">  
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="support_info">
                                <p>Email: <a href="<?= base_url() ?> mailto:">drophut@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                   <li><a href="<?= base_url() ?> my-account.html">Account</a></li> 
                                   <li><a href="<?= base_url() ?> checkout.html">Checkout</a></li> 
                                </ul>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->
            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="<?= base_url() ?> login.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6">
                            <div class="middel_right">
                                <div class="search_container">
                                   <form action="#">
                                        <div class="search_box">
                                            <input placeholder="Search product..." type="text">
                                            <button type="submit">Search</button> 
                                        </div>
                                    </form>
                                </div>
                                <div class="middel_right_info">
                                    <div class="header_wishlist">
                                        <a href="<?= base_url() ?> #"><img src="assets/img/user.png" alt=""></a>
                                    </div>
                                    <div class="mini_cart_wrapper">
                                        <a href="<?= base_url() ?> javascript:void(0)"><img src="assets/img/shopping-bag.png" alt=""></a>
                                        <span class="cart_quantity">2</span>
                                        <!--mini cart-->
                                         <div class="mini_cart">
                                            <div class="cart_item">
                                               <div class="cart_img">
                                                   <a href="<?= base_url() ?> #"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="<?= base_url() ?> #">Sit voluptatem rhoncus sem lectus</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>    
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="<?= base_url() ?> #"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                               <div class="cart_img">
                                                   <a href="<?= base_url() ?> #"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="<?= base_url() ?> #">Natus erro at congue massa commodo</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>   
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="<?= base_url() ?> #"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_total">
                                                    <span>Sub total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                                <div class="cart_total mt-10">
                                                    <span>total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                            </div>

                                            <div class="mini_cart_footer">
                                               <div class="cart_button">
                                                    <a href="<?= base_url() ?> cart.html">View cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="<?= base_url() ?> checkout.html">Checkout</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
            <!--header bottom satrt-->
            <div class="main_menu_area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="main_menu menu_position"> 
                                <nav>  
                                    <ul>
                                        <li><a href="<?= base_url() ?> index-2.html">home</a></li>
                                        <li><a href="<?= base_url() ?> product-details.html">Product</a></li>
                                        
                                        <li><a class="active" href="<?= base_url() ?> #">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="<?= base_url() ?> about.html">About Us</a></li>
                                                <li><a href="<?= base_url() ?> contact.html">contact</a></li>
                                                <li><a href="<?= base_url() ?> privacy-policy.html">privacy policy</a></li>
                                                <li><a href="<?= base_url() ?> faq.html">Frequently Questions</a></li>
                                                <li><a href="<?= base_url() ?> login.html">login</a></li>
                                                <li><a href="<?= base_url() ?> register.html">register</a></li>
                                                <li><a href="<?= base_url() ?> forget-password.html">Forget Password</a></li>
                                                <li><a href="<?= base_url() ?> 404.html">Error 404</a></li>
                                                <li><a href="<?= base_url() ?> cart.html">cart</a></li>
                                                <li><a href="<?= base_url() ?> tracking.html">tracking</a></li>
                                                <li><a href="<?= base_url() ?> checkout.html">checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= base_url() ?> blog.html">blog<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="<?= base_url() ?> blog.html">blog</a></li>
                                                <li><a href="<?= base_url() ?> blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= base_url() ?> contact.html"> Contact Us</a></li>
                                    </ul>  
                                </nav> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div> 
    </header>