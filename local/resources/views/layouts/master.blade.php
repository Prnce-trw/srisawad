<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>ศรีสวัสดิ์ แคปปิตอล Srisawad Capital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/SCAP-118x118px.png')}}">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('url/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('url/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('url/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('url/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('url/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('url/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('url/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('url/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('url/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('url/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link href="{{asset('url/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('css')


    <style>
        .navbar-default .navbar-nav>li.dropdown:hover>a,
        .navbar-default .navbar-nav>li.dropdown:hover>a:hover,
        .navbar-default .navbar-nav>li.dropdown:hover>a:focus {
            background-color: rgb(231, 231, 231);
            color: rgb(85, 85, 85);
        }

        li.dropdown:hover>.dropdown-menu {
            display: block;
        }
    </style>
</head>

<body>
    @php
        $footer = DB::table('footer')->get();
    @endphp
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-8 col-lg-9">
                            <div class="header-contact">
                                <i class="fa fa-phone" style="color: #bdbdbd;"><span class="head-bar"> :
                                        {{$footer[0]->tel}}</span> | </i>
                                <i class="fa fa-envelope" style="color: #bdbdbd;"><span class="head-bar"> :
                                        {{$footer[0]->email}}</span> | </i>
                                <i class="fa fa-clock-o" style="color: #bdbdbd;"><span class="head-bar"> : {{$footer[0]->opencolse}}</span></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-lg-3">
                            <div class="header-top-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{url('about-us')}}">เกี่ยวกับเรา</a></li>
                                        <li><a href="{{url('contact-us')}}">ติดต่อเรา</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('url/img/logo02.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-lg-3"></div> -->
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{url('/')}}">หน้าแรก</a></li>
                                        {{-- <li class="dropdown">
                                            <a href="#" >ผลิตภัณฑ์และบริการ</a>
                                            <ul class="dropdown-menu" style="width:200%">
                                                @php
                                                $typecredits = DB::table('typecredits')->get();
                                                @endphp
                                                @foreach($typecredits as $ct)
                                                <li style="margin-top:-30px;margin-button:-30px"><a
                                                        href="{{url('searchcredits').'/'.$ct->id}}">{{$ct->name}}       </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li> --}}
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                ผลิตภัณฑ์และบริการ
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                @php
                                                $typecredits = DB::table('typecredits')->get();
                                                @endphp
                                                @foreach($typecredits as $ct)
                                                <a class="dropdown-item"  href="{{url('searchcredits').'/'.$ct->id}}">{{$ct->name}}</a>
                                              @endforeach
                                            </div>
                                          </li>
     
                                        <li class="pad-nav"><a href="{{url('/registered')}}">สมัครสินเชื่อ</a></li> 
                                        <li class="pad-nav"><a href="{{url('/article')}}">บทความ</a></li>

                                        <li class="pad-nav"><a href="{{url('/news')}}">ข่าวสารบริษัท</a></li> 
                                        <li class="pad-nav"><a id="menu" href="{{url('about-us')}}">เกี่ยวกับเรา</a></li>
                                        <li class="pad-nav"><a id="menu" href="{{url('mission-vision')}}">ติดต่อเรา</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    @yield('content')
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
            
                <div class="col-md-5">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="{{asset('url/img/icon-footer.jpg')}}" alt=""> </a>
                        <p>{{$footer[0]->detail}}</p>
                        <div class="single-footer-widget">
                            <ul style="color:white;font-family: 'prompt', sans-serif;">
                                <li><i class="fa fa-phone"></i> {{$footer[0]->tel}}</li>
                                <li><i class="fa fa-envelope"></i> {{$footer[0]->email}}</li>
                                <li><i class="material-icons">place</i> {{$footer[0]->location}}</li>
                            </ul>

                        </div>


                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="single-footer-widget">
                        <!-- <h4>Company</h4> --><br>
                        <ul>
                            <li style="color: #fff; font-family: 'prompt',sans-serif;">ติดต่อเรา</li>
                            <hr class="line" align="left">

                            @foreach ($contactorfooter as $product)
                            <li><a href="{{url('').'/'.$product->detail}}"><i class="fa fa-angle-right" aria-hidden="true" style="color: #fff;"></i>
                                    {{$product->name}}</a></li>

                            @endforeach
                            <li><a href="{{url('policy')}}"><i class="fa fa-angle-right" aria-hidden="true"
                                        style="color: #fff;"></i> นโยบายข้อมูลส่วนบุคคล</a></li>
                            <li><a href="{{url('terms-condition')}}"><i class="fa fa-angle-right" aria-hidden="true"
                                        style="color: #fff;"></i> ข้อตกลงและเงื่อนไขการใช้บริการ</a></li>

                        </ul>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="single-footer-widget">
                        <!-- <h4>Solutions</h4> --><br>
                        <ul>
                            <li style="color: #fff; font-family: 'prompt',sans-serif;">ผลิตภัณฑ์และบริการ</li>

                            <hr class="line" align="left">
                            @foreach ($creditfooter as $product)
                            <li><a href="{{url('').'/'.$product->detail}}"><i class="fa fa-angle-right" aria-hidden="true" style="color: #fff;"></i>
                                    {{$product->name}}</a></li>


                            @endforeach
                        </ul>

                    </div>
                </div>

            </div>
        </div>
        <div class="copyright_part_text ">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="title-content">
                            <p class="footer-text m-0">Copyright @ 2019 Srisawad Capital Co.,Ltd. All rights reserved.</p>
                        </div>

                    </div>
                    {{-- <div class="col-md-4">
                        <div class="title-content">
                            <div class="social-links">
                                @foreach ($logosocial as $product)
                                <a target="_blank" href="{{$product->detail}}"><img
                                        src="{{ asset('local/storage/picture_logosocial/'.$product->image) }}"></a>

                                @endforeach

                            </div>
                        </div>

                    </div> --}}

                </div>
            </div>
        </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('url/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="{{asset('url/js/popper.min.js')}}"></script>
<script src="{{asset('url/js/bootstrap.min.js')}}"></script>
<script src="{{asset('url/js/owl.carousel.min.js')}}"></script>
<script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
<script src="{{asset('url/js/ajax-form.js')}}"></script>
<script src="{{asset('url/js/waypoints.min.js')}}"></script>
<script src="{{asset('url/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('url/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('url/js/scrollIt.js')}}"></script>
<script src="{{asset('url/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('url/js/wow.min.js')}}"></script>
<script src="{{asset('url/js/nice-select.min.js')}}"></script>
<script src="{{asset('url/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('url/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('url/js/plugins.js')}}"></script>

<!--contact js-->
<script src="{{asset('url/js/contact.js')}}"></script>
<script src="{{asset('url/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('url/js/jquery.form.j')}}s"></script>
<script src="{{asset('url/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('url/js/mail-script.js')}}"></script>

<script src="{{asset('url/js/main.js')}}"></script>
@yield('js')

<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
        var owl = $('.owl-carousel');
        owl.owlCarousel();
        // Go to the next item
        $('#customNextBtn').click(function () {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('#customPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);
        })


    });
</script>

<script>
    $(document).ready(function () {
        $('.owl-carousel2').owlCarousel({
            loop: true,
            margin: 10,
            // nav:false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
        var owl = $('.owl-carousel2');
        owl.owlCarousel();
        // Go to the next item
        $('.customNextBtn2').click(function () {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.customPrevBtn2').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);
        });


    });
</script>




</html>