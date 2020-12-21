<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>@yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="_token" content="{{csrf_token()}}" />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('files/assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/jquery.mCustomScrollbar.css') }}">
    <!-- radial chart.css -->
    <link rel="stylesheet" href="{{ asset('files/assets/pages/chart/radial/css/radial.css') }}" type="text/css"
        media="all">
    <!-- Style.css -->


    {{-- <script type="text/javascript" src="{{ asset('asset/ckeditor/ckeditor.js') }}"></script> --}}
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css') }}">

    <!-- Awesome font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    @yield('css')
</head>

<body>

    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('backoffice/dashboard')}}">
                            <h5>Srisawad</h5>
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#">
                                    <span>{{Auth::user()->name.' '.Auth::user()->lastname}}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="ti-lock"></i> {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigation-label">System</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu {!! ($active == 'banner' ? 'pcoded-trigger' : '')  !!}" >
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>DB</b></span>
                                        <span class="pcoded-mtext">การจัดการแบนเนอร์</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{!! (preg_match('/banner/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('backoffice/banner')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">แบนเนอร์หน้าแรก</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/editlogomember/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('/editlogomember/1')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">แบนเนอร์สมัครสินเชื่อ</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/editarticle/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('editarticles/1')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">แบนเนอร์บทความ</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/editnew/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('editnew/1')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">แบนเนอร์ข่าวสารบริษัท</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/aboutindex/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! url('aboutindex') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">แบนเนอร์เกี่ยวกับเรา</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/contactor/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('editcontactors/2')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">แบนเนอร์ติดต่อเรา / ติดต่อเรา</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu {!! ($active == 'typecredits' ? 'pcoded-trigger' : '')  !!}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>DB</b></span>
                                        <span class="pcoded-mtext">การจัดการสินเชื่อ</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{!! (preg_match('/type/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('backoffice/type')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">ประเภทสินเชื่อ</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/detail/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('backoffice/detailcredit')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">หัวข้อสินเชื่อส่วนบุคคล</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/qual/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('backoffice/qualification')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">การจัดการคุณสมบัติ</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/docu/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('backoffice/document')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">การจัดการเอกสาร</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/down/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('backoffice/downloaddoc')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">ดาวน์โหลดเอกสาร</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/pay/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('editpaymentmethod/28')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">ช่องทางการชำระเงิน</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/logo/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('backoffice/logobank')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">การจัดการโลโก้ธนาคาร</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/credits/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('backoffice/credits')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">การจัดการสินเชื่อส่วนบุคคล</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu {!! ($active == 'regis' ? 'pcoded-trigger' : '')  !!}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>DB</b></span>
                                        <span class="pcoded-mtext">การจัดการสมัครสินเชื่อ</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{!! (preg_match('/register/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{{url('/backoffice/registerlist')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">ข้อมูลการสมัครสินเชื่อ</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu {!! ($active == 'article' ? 'pcoded-trigger' : '')  !!}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>DB</b></span>
                                        <span class="pcoded-mtext">การจัดการบทความ</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{!! (preg_match('/article/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! route('article') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">บทความ</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu  {!! ($active == 'new' ? 'pcoded-trigger' : '')  !!}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>DB</b></span>
                                        <span class="pcoded-mtext">การจัดการข่าวสารบริษัท</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{!! (preg_match('/new/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! route('new') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">ข่าวสารบริษัท</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu  {!! ($active == 'target' ? 'pcoded-trigger' : '')  !!}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>DB</b></span>
                                        <span class="pcoded-mtext">การจัดการเกี่ยวกับเรา</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{!! (preg_match('/target/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! route('target') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">เกี่ยวกับเรา</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/vision/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! route('vision') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">วิสัยทัศน์ พันธกิจ</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu {!! ($active == 'branch' ? 'pcoded-trigger' : '')  !!}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>DB</b></span>
                                        <span class="pcoded-mtext">การจัดการติดต่อเรา</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{!! (preg_match('/branch/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! route('branch') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">การจัดการสาขา</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/contactlist/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! url('backoffice/contactlist') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">ข้อมูลการติดต่อเรา</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu {!! ($active == 'footer' ? 'pcoded-trigger' : '')  !!}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>DB</b></span>
                                        <span class="pcoded-mtext">การจัดการ footer</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{!! (preg_match('/footer/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! route('footer') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">ข้อมูล Contact</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/contactor/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! url('backoffice/contactor') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">ติดต่อกับเรา</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/credit/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! url('backoffice/credit') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">สินเชื่อส่วนบุคคล</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="{!! (preg_match('/social/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! route('logosocial') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">โลโก้โซเชี่ยล</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu {!! ($active == 'images' ? 'pcoded-trigger' : '')  !!}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>DB</b></span>
                                        <span class="pcoded-mtext">การจัดการ รูปภาพ</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{!! (preg_match('/images/',URL::current()) ? 'active' : '')  !!}">
                                            <a href="{!! url('backoffice/images') !!}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">ข้อมูล images</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->

    <!-- Older IE warning message -->

    <!--[if lt IE 10]><![endif]-->

    <!-- Warning Section Ends -->

    <!-- Required Jquery -->

    <!-- Older IE warning message -->

    <!--[if lt IE 10]>

    <div class="ie-warning">

        <h1>Warning!!</h1>

        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>

        <div class="iew-container">

            <ul class="iew-download">

                <li>

                    <a href="http://www.google.com/chrome/">

                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">

                        <div>Chrome</div>

                    </a>

                </li>

                <li>

                    <a href="https://www.mozilla.org/en-US/firefox/new/">

                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">

                        <div>Firefox</div>

                    </a>

                </li>

                <li>

                    <a href="http://www.opera.com">

                        <img src="../files/assets/images/browser/opera.png" alt="Opera">

                        <div>Opera</div>

                    </a>

                </li>

                <li>

                    <a href="https://www.apple.com/safari/">

                        <img src="../files/assets/images/browser/safari.png" alt="Safari">

                        <div>Safari</div>

                    </a>

                </li>

                <li>

                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">

                        <img src="../files/assets/images/browser/ie.png" alt="">

                        <div>IE (9 & above)</div>

                    </a>

                </li>

            </ul>

        </div>

        <p>Sorry for the inconvenience!</p>

    </div>

    <![endif]-->

    <!-- Warning Section Ends -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')}} "></script>
    <script src="{{ asset('files/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('files/assets/pages/widget/excanvas.js')}} "></script>

    <!-- jquery slimscroll js -->
    <script src="{{ asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}} "></script>

    <!-- modernizr js -->
    <script src="{{ asset('files/bower_components/modernizr/js/modernizr.js ')}}"></script>

    <!-- slimscroll js -->
    <script src="{{ asset('files/assets/js/SmoothScroll.js')}}"></script>
    <script src="{{ asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js ')}}"></script>

    <!-- modernizr js -->
    <script src="{{ asset('files/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script src="{{ asset('files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

    <!-- Chart js -->
    <script src="{{ asset('files/bower_components/chart.js/js/Chart.js')}}"></script>
    <script src="{{ asset('files/assets/pages/widget/amchart/amcharts.js')}}"></script>
    <script src="{{ asset('files/assets/pages/widget/amchart/serial.js')}}"></script>
    <script src="{{ asset('files/assets/pages/widget/amchart/light.js')}}"></script>

    <!-- menu js -->
    <script src="{{ asset('files/assets/js/pcoded.min.js')}}"></script>
    <script src="{{ asset('files/assets/js/vertical/vertical-layout.min.js')}} "></script>

    <!-- custom js -->
    <script src="{{ asset('files/assets/js/script.js ')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script>
        $(".alert").fadeTo(3000, 500).slideUp(1000, function () {
            $(".alert").slideUp(8000);
        });

    </script>
    @yield('js')

</body>



</html>
