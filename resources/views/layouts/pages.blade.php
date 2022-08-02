<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="ESR Executive | Executive Car Dealers in Kenya | Vehicles For Sale in Kenya">
    <meta name="description" content="Executive Super Rides ltd supplies each car to customer specifications.
    Wherever you want to go, you can count on our uncompromising stance to supplying automobiles that describe your taste and style">
    <meta name="keywords" content="ESR, Executive, ESR Executive, Drivers Universe, Executive Super Rides Limited">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Executive Super Ride Limited | ESR Executive</title>

    <link rel="icon" style="height: 10px; width: 16px;" type="image/png" sizes="10x16" href="{{ asset('img/favicon-16x16.png') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- Css Styles -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

</head>

<body>
    <!-- Facebook Like-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="0abVEtIb"></script>

    <!-- Page Preloder -->


    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Open Daily 7:30AM to 6:30PM</li>
            <!--<li><i class="fa fa-envelope-o"></i> enquiries@executivesuperides.com</li>-->
            <li><i class="fa fa-location-dot"></i>Ngong Road, Kamburu Drive Junction</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>+254 707 200 100</span>
        </div>
        <div class="offcanvas__social">
            <a href="https://www.facebook.com/ESRExecutive"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/ESRExecutive"><i class="fa fa-twitter"></i></a>
            <a href="https://ke.linkedin.com/company/esrexecutive"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.instagram.com/esrexecutive/"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li> <i class="fa fa-clock-o"></i>  Open Daily 7:30AM - 6:30PM </li>
                           <!-- <li><i class="fa fa-envelope-o"></i> enquiries@executivesuperides.com</li> -->
                            <li><i class="fa fa-location-dot"></i>Ngong Road, Kamburu Drive Junction</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span>+254 707 200 100</span>
                            </div>
                            <div class="header__top__social">
                                <a href="https://www.facebook.com/ESRExecutive"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/ESRExecutive"><i class="fa fa-twitter"></i></a>
                                <a href="https://ke.linkedin.com/company/esrexecutive"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/esrexecutive/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div id="navbar_top" class="container-fluid bg-light shadow-sm">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ asset('/') }}"><img src="{{asset('img/ESR.png') }}" style="width:100px; height:45px;" alt="ESR Executive Super Rides Limited"></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu" >
                            <ul>
                                <li class="{{ Request::is('/') ? 'active':'' }}"><a href="/">Home</a></li>
                                <li class="{{ Request::is('all-vehicles') ? 'active':'' }}"><a href="{{ asset('all-vehicles') }}">All Vehicles</a></li>
                                <li class="{{ Request::is('about-us') ? 'active':'' }}"><a href="{{ asset('about-us') }}">About Us</a></li>
                                <li class="{{ Request::is('financing') ? 'active':'' }}"><a href="{{ asset('financing') }}">Financing</a></li>
                                <li class="{{ Request::is('blogs') ? 'active':'' }}"><a href="{{ asset('blogs') }}">Blog</a></li>
                                <li class="{{ Request::is('contact-us') ? 'active':'' }}"><a href="{{ asset('contact-us') }}">Contact Us</a></li>

                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>


    </header>
    <!-- Header Section End -->
    <div class="content-wrapper">
      @yield('content')

      <a href="https://wa.link/aigojq" class="float overflow-auto" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    </div>
    <!-- Footer Section Begin -->
    <footer class="footer">

        <div class="container">
        <!--    <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                            <h2>Contact Us Now!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__option">
                            <div class="option__item"><i class="fa fa-phone"></i> +254 707 200 100</div>
                            <div class="option__item email"><i class="fa fa-envelope-o"></i> enquiries@executivesuperides.com</div>
                        </div>
                    </div>
                </div>
            </div>--->
            <div class="row footer_divider">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__about footer__widget">
                        <!--<div class="footer__logo">
                            <a href="/"><img src="img/ESR.png" style="width: 60px; height:24px;" alt="Logo"></a>
                        </div>--->
                        <div class="footer_widget"><h5>Any questions? call us
                            on 0707 200 100 </h5></div>

                        <div class="footer__social">
                            <a href="https://www.facebook.com/ESRExecutive"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/ESRExecutive"><i class="fa fa-twitter"></i></a>
                            <a href="https://ke.linkedin.com/company/esrexecutive"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/esrexecutive/"><i class="fa fa-instagram"></i></a>
                        </div>

                            <ul>

                                <li><p>Monday - Friday: 07:30AM - 06:00PM</p></li>
                                    <li><p>Saturday: 07:30AM - 06:00PM</p></li>
                                    <li><p>Sunday: 07:30AM - 06:00PM</p></li>
                            </ul>

                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3">
                    <div class="footer__widget">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="{{ asset('financing') }}"><i class="fa fa-angle-right"></i> Financing</a></li>
                            <li><a href="{{ asset('careers') }}"><i class="fa fa-angle-right"></i> Careers</a></li>
                            <li><a href="{{ asset('contact-us') }}"><i class="fa fa-angle-right"></i> Contact Us</a></li>
                            <li><a href="{{ asset('about-us') }}"><i class="fa fa-angle-right"></i> About Us</a></li>
                            <li><a href="{{ asset('all-vehicles') }}"><i class="fa fa-angle-right"></i> Vehicles in Stock</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="footer__widget">
                        <h5>Our Branches</h5>
                        <ul>
                            <li><p><i class="fa fa-angle-right"></i> Nairobi-Ngong Road, Kamburu Drive Junction</p></li>
                            <li><p><i class="fa fa-angle-right"></i> Nanyuki- Cedar Mall (Nanyuki Rimuruti Rd)</p></li>
                            <li><p><i class="fa fa-angle-right"></i> Meru-Makutano Junction</p></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"> <a style="color: #ed2424;" href="{{ asset('terms-of-service') }}">Terms of Service</a> </div>
                        <div class="col-sm-6"> <a style="color: #ed2424;" href="{{ asset('copyright') }}">Copyright</a></div>
                    </div>
                </div>


            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer__copyright__text">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Executive Super Rides</p>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      }
        });
    });
    </script>
    <script>
        $(document).ready(function () {
                $('#sub_model_name').on('change', function () {
                let id = $(this).val();
                $('#model').empty();
                $('#model').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetModelAgainstMakeEdit/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);
                $('#model').empty();
                $('#model').append(`<option value="0" disabled selected>Select Model*</option>`);
                response.forEach(element => {
                    $('#model').append(`<option value="${element['id']}">${element['name']}</option>`);
                    });
                }
            });
        });
    });
    </script>
    <script>
        $("#search").on("click", function(){
            var link = document.getElementById("model").value;

            $.ajax({
                url: window.location.href="my-search/"+ link,
            });
        });
    </script>
</body>

</html>
