<header class="main-header header-style-one">

    <div class="header-top">
        <div class="inner-container">
            <div class="top-left">

                <ul class="list-style-one">
                    <li><i class="fa fa-envelope"></i> <a
                            href="https://html.kodesolution.com/cdn-cgi/l/email-protection#650b0000010d00091525060a0815040b1c4b060a08"><span
                                class="__cf_email__"
                                data-cfemail="06686363626e636a764665696b7667687f2865696b">[email&#160;protected]</span></a>
                    </li>
                    <li><i class="fa fa-map-marker"></i> 88 Broklyn Golden Street. New York</li>
                </ul>
            </div>
            <div class="top-right">
                <ul class="useful-links">
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="outer-box">
            <ul class="social-icon-one">
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
            </ul>
        </div>
    </div>


    <div class="header-lower">

        <div class="main-box">
            <div class="logo-box">
                <div class="logo"><a href="{{url('/')}}">
                    <img src="{{ asset('frontend/assets/images/logo.png') }}" alt title="Tronis">

                </a></div>
            </div>

            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">
                        <li class="current dropdown"><a href="{{url('/')}}">Home</a>
                            {{-- <ul>
                                <li><a href="index.html">Home page 01</a></li>
                                <li><a href="index-2.html">Home page 02</a></li>
                                <li><a href="index-3.html">Home page 03</a></li>
                                <li class="dropdown"><a href="#">Single</a>
                                    <ul>
                                        <li><a href="index-1-single.html">Home Single 1</a></li>
                                        <li><a href="index-2-single.html">Home Single 2</a></li>
                                        <li><a href="index-3-single.html">Home Single 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Dark</a>
                                    <ul>
                                        <li><a href="index-1-dark.html">Home Dark 1</a></li>
                                        <li><a href="index-2-dark.html">Home Dark 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Boxed</a>
                                    <ul>
                                        <li><a href="index-1-boxed.html">Home Boxed 1</a></li>
                                        <li><a href="index-2-boxed.html">Home Boxed 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">RTL</a>
                                    <ul>
                                        <li><a href="index-1-rtl.html">Home RTL 1</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Header Styles</a>
                                    <ul>
                                        <li><a href="index.html">Header Style One</a></li>
                                        <li><a href="index-2.html">Header Style Two</a></li>
                                        <li><a href="index-3.html">Header Style three</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>
                        {{-- <li class="dropdown"><a href="#">Pages</a>
                            <ul>
                                <li><a href="page-about.html">About</a></li>
                                <li class="dropdown"><a href="#">Country</a>
                                    <ul>
                                        <li><a href="page-country.html">Country grid</a></li>
                                        <li><a href="page-country-details.html">Country Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Team</a>
                                    <ul>
                                        <li><a href="page-team.html">Team List</a></li>
                                        <li><a href="page-team-details.html">Team Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="page-testimonial.html">Testimonial</a></li>
                                <li><a href="page-FAQ.html">FAQ</a></li>
                                <li><a href="page-404.html">Page 404</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Coaching</a>
                            <ul>
                                <li><a href="page-course.html">Coaching grid</a></li>
                                <li><a href="page-course-details.html">Coaching Details</a></li>
                            </ul>
                        </li> --}}
                        <li class="dropdown"><a href="{{route('checkstatus')}}">Visa Check</a>

                        </li>
                        {{-- <li class="dropdown"><a href="#">Shop</a>
                            <ul>
                                <li><a href="shop-products.html">Products</a></li>
                                <li><a href="shop-products-sidebar.html">Products with Sidebar</a></li>
                                <li><a href="shop-product-details.html">Product Details</a></li>
                                <li><a href="shop-cart.html">Cart</a></li>
                                <li><a href="shop-checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">News</a>
                            <ul>
                                <li><a href="news-grid.html">News Grid</a></li>
                                <li><a href="news-details.html">News Details</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="page-contact.html">Contact</a></li>
                    </ul>
                </nav>

                <div class="outer-box">
                    <a href="tel:+92(8800)9806" class="info-btn">
                        <i class="icon fa fa-phone"></i>
                        <small>Call Anytime</small><br> + 88 ( 9800 ) 6802
                    </a>
                    <div class="ui-btn-outer">
                        <button class="ui-btn ui-btn search-btn">
                            <span class="icon lnr lnr-icon-search"></span>
                        </button>
                    </div>
                    <a href="#" class="theme-btn btn-style-one bg-theme-color3"><span class="btn-title">Book a
                            consultation</span></a>

                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>


    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo"><a href="index.html">
                    <img src="{{ asset('frontend/assets/images/logo-2.png') }}" alt title>

                </a></div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>
            <ul class="navigation clearfix">

            </ul>
            <ul class="contact-list-one">
                <li>

                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Call Now</span>
                        <a href="tel:+92880098670">+92 (8800) - 98670</a>
                    </div>
                </li>
                <li>

                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a
                            href="https://html.kodesolution.com/cdn-cgi/l/email-protection#8ee6ebe2feceede1e3feefe0f7a0ede1e3"><span
                                class="__cf_email__"
                                data-cfemail="8de5e8e1fdcdeee2e0fdece3f4a3eee2e0">[email&#160;protected]</span></a>
                    </div>
                </li>
                <li>

                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Send Email</span>
                        Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                    </div>
                </li>
            </ul>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div>

    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>
        <div class="search-inner">
            <form method="post" action="https://html.kodesolution.com/2022/vizox-html/index.html">
                <div class="form-group">
                    <input type="search" name="search-field" value placeholder="Search..." required>
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>


    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">

                <div class="logo">
                    <a href="index.html" title>
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt title>

                    </a>
                </div>

                <div class="nav-outer">

                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">

                            </ul>
                        </div>
                    </nav>

                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>
</header>
