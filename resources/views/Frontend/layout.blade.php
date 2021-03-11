<!DOCTYPE html>
<html lang="zxx">

<head>


    <meta charset="UTF-8">
    <meta name="description" content="Amin Template">
    <meta name="keywords" content="Amin, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="/Frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/Frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/Frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/Frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/Frontend/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="/Frontend/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/Frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/Frontend/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Menu Begin -->
<div class="humberger-menu-overlay"></div>
<div class="humberger-menu-wrapper">
    <div class="hw-logo">
        <a href="#"><img src="/Frontend/img/f-logo.png" alt=""></a>
    </div>
    <div class="hw-menu mobile-menu">
        <ul>
            <li><a href="{{route('Frontend.home')}}">Anasayfa</a></li>

            <li><a href="{{route('Frontend.category-list')}}">Oyun Haberleri</a></li>


            <li><a href="{{route('Frontend.content.category')}}">İncelemeler <i></i></a>
            </li>
            <li><a href="{{route('Frontend.contact')}}">İletişim <i></i></a>
            </li>
        </ul>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="hw-copyright">
        Copyright © 2019 Colorlib Inc. All rights reserved
    </div>
    <div class="hw-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
    <div class="hw-insta-media">
        <div class="section-title">
            <h5>Instagram</h5>
        </div>

    </div>
</div>
<!-- Humberger Menu End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="ht-options">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="ht-widget">
                        <ul>
                            <li><i class="fa fa-sun-o"></i> <span>3<sup>c</sup></span> İstanbul</li>
                            <li><i class="fa fa-clock-o"></i> 18 Şubat</li>
                            <li class="signup-switch signup-open"><i class="fa fa-sign-out"></i> Üye ol / Giriş Yap
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="ht-social">
                        <a href="{{$social->Facebook}}"><i class="fa fa-facebook"></i></a>
                        <a href="{{$social->Twitter}}"><i class="fa fa-twitter"></i></a>
                        <a href="{{$social->Youtube}}"><i class="fa fa-youtube-play"></i></a>
                        <a href="{{$social->Instagram}}"><i class="fa fa-instagram"></i></a>
                        <a href="mailto:{{$social->Mail}}"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#"><img src="/Frontend/img/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-options">
        <div class="container">
            <div class="humberger-menu humberger-open">
                <i class="fa fa-bars"></i>
            </div>
            <div class="nav-search search-switch">
                <i class="fa fa-search"></i>
            </div>
            <div class="nav-menu">
                <ul>
                    <li class="active"><a href="{{route('Frontend.home')}}"><span>Anasayfa</span></a></li>
                    <li class="mega-menu"><a href="#"><span>Platform <i class="fa fa-angle-down"></i></span></a>
                        <div class="megamenu-wrapper">
                            <ul class="mw-nav">
                                <li><a href="#"><span>Playstation</span></a></li>
                                <li><a href="#"><span>Windows</span></a></li>
                                <li><a href="#"><span>Mobile</span></a></li>
                                <li><a href="#"><span>Xbox</span></a></li>
                            </ul>
                            <div class="mw-post">
                                <div class="mw-post-item">
                                    <div class="mw-pic">
                                        <img src="/Frontend/img/megamenu/mm-1.jpg" alt="">
                                    </div>
                                    <div class="mw-text">
                                        <h6><a href="#">A Monster Prom poster got hijacked for a Papa Roach
                                                concert...</a></h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mw-post-item">
                                    <div class="mw-pic">
                                        <img src="/Frontend/img/megamenu/mm-2.jpg" alt="">
                                    </div>
                                    <div class="mw-text">
                                        <h6><a href="#">A new Borderlands 3 trailer introduces Moze and her...</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mw-post-item">
                                    <div class="mw-pic">
                                        <img src="/Frontend/img/megamenu/mm-3.jpg" alt="">
                                    </div>
                                    <div class="mw-text">
                                        <h6><a href="#">Teamfight Tactics is in chaos after today's patch...</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mw-post-item">
                                    <div class="mw-pic">
                                        <img src="/Frontend/img/megamenu/mm-4.jpg" alt="">
                                    </div>
                                    <div class="mw-text">
                                        <h6><a href="#">Borderlands 2 dev explains why there's mysterious
                                                boxes...</a></h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mw-post-item">
                                    <div class="mw-pic">
                                        <img src="/Frontend/img/megamenu/mm-5.jpg" alt="">
                                    </div>
                                    <div class="mw-text">
                                        <h6><a href="#">Capcom asks select fans to test new Resident Evil game</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <ul>
                            <li><a href="{{route('Frontend.category-list')}}">Oyun Haberleri</a></li>


                            <li><a href="{{route('Frontend.content.category')}}">İncelemeler<i></i></a>
                            </li>
                            <li><a href="{{route('Frontend.contact')}}">Bize Ulaşın<i></i></a>
                            </li>
                        </ul>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Hero Section End -->

@yield('content')




<!-- Update News Section End -->

<!-- Videos Guide Section Begin -->



<!-- Videos Guide Section End -->

<!-- Instagram Post Section Begin -->

<!-- Instagram Post Section End -->


<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-about">
                    <div class="fa-logo">
                        <a href="#"><img src="/Frontend/img/f-logo.png" alt=""></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua lacus vel facilisis.</p>
                    <div class="fa-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="editor-choice">
                    <div class="section-title">
                        <h5>Editor's Choice</h5>
                    </div>
                    <div class="ec-item">
                        <div class="ec-pic">
                            <img src="/Frontend/img/trending/editor-1.jpg" alt="">
                        </div>
                        <div class="ec-text">
                            <h6><a href="#">A Monster Prom poster got hijacked for a Papa Roach concert...</a>
                            </h6>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                <li><i class="fa fa-comment-o"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                    <div class="ec-item">
                        <div class="ec-pic">
                            <img src="//Frontend/img/trending/editor-2.jpg" alt="">
                        </div>
                        <div class="ec-text">
                            <h6><a href="#">Facebook wants to read your thoughts with its augmented...</a>
                            </h6>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                <li><i class="fa fa-comment-o"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="tags-cloud">
                    <div class="section-title">
                        <h5>Tags Cloud</h5>
                    </div>
                    <div class="tag-list">
                        <a href="#"><span>Gaming</span></a>
                        <a href="#"><span>Platform</span></a>
                        <a href="#"><span>Playstation</span></a>
                        <a href="#"><span>Hardware</span></a>
                        <a href="#"><span>Reviews</span></a>
                        <a href="#"><span>Simulation</span></a>
                        <a href="#"><span>Strategy</span></a>
                        <a href="#"><span>Scientific</span></a>
                        <a href="#"><span>References</span></a>
                        <a href="#"><span>Role-playing</span></a>
                        <a href="#"><span>Adventurea</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ca-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="fa fa-heart"
                                                                                aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ca-links">
                        <a href="#">About</a>
                        <a href="#">Subscribe</a>
                        <a href="#">Contact</a>
                        <a href="#">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Sign Up Section Begin -->

<!-- Sign Up Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Buraya Yazınız.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="/Frontend/js/jquery-3.3.1.min.js"></script>
<script src="/Frontend/js/bootstrap.min.js"></script>
<script src="/Frontend/js/jquery.magnific-popup.min.js"></script>
<script src="/Frontend/js/circle-progress.min.js"></script>
<script src="/Frontend/js/jquery.barfiller.js"></script>
<script src="/Frontend/js/jquery.slicknav.js"></script>
<script src="/Frontend/js/owl.carousel.min.js"></script>
<script src="/Frontend/js/main.js"></script>
</body>

</html>
