<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zahra Farms</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('theme/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('theme/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('theme/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('theme/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('theme/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('theme/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('theme/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('theme/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('theme/css/style.css')}}" type="text/css">
    @yield('style')
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        zahrahfarmbdg@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        0887-2424-584
                    </div>
                </div>
                <div class="ht-right">
                    <a href="/login" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="{{url('theme/img/flag-1.jpg')}}" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="{{url('theme/img/flag-2.jpg')}}" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="{{url('theme/img/zahrah.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>0</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>0</span>
                                </a>
                            </li>
                            <!-- <li class="cart-price">$150.00</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="/Home">Home</a></li>
                        <li><a href="/Produk">Produk</a></li>
                        <li><a href="/Artikel">Artikel</a></li>
                        <li><a href="/Order">Order</a></li>
                        <li><a href="/Kontak">Kontak</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <main>
    @yield('subheader')  
    @yield('content')

    </main>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="{{url('theme/img/zahrahfarm.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Kp. Kangkareng Desa Cikoneng</li>
                            <li>Kecamatan Ciparay</li>
                            <li>Kabupaten Bandung</li>
                            <li>Phone : 0887-2424-584 </li>
                            <li>Email : zahrahfarmbdg@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Artikel</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{url('theme/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('theme/js/bootstrap.min.js')}}"></script>
    <script src="{{url('theme/js/jquery-ui.min.js')}}"></script>
    <script src="{{url('theme/js/jquery.countdown.min.js')}}"></script>
    <script src="{{url('theme/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('theme/js/jquery.zoom.min.js')}}"></script>
    <script src="{{url('theme/js/jquery.dd.min.js')}}"></script>
    <script src="{{url('theme/js/jquery.slicknav.js')}}"></script>
    <script src="{{url('theme/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('theme/js/main.js')}}"></script>
    @yield('js')
</body>

</html>