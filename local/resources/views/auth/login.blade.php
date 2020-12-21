<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>เข้าสู่ระบบ</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 10]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

      <![endif]-->

    <!-- Meta -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/icofont/css/icofont.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css')}}">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">เข้าสู่ระบบ</h3>
                                    </div>
                                </div>
                                <hr/>  
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" id="email"  placeholder="ผู้ใช้งาน">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password"  id="password" placeholder="รหัสผ่าน">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">เข้าสู่ระบบ</button>
                                    </div>
                                </div>
                                {{--<hr/>
                                 <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                                        <p class="text-inverse text-left"><b>Your Authentication Team</b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="../files/assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                    </div>
                                </div> --}}

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- Warning Section Starts -->

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
    <!-- Required Jquery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script src="files/bower_components/popper.js/js/popper.min.js"></script>
    <script src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <!-- jquery slimscroll js -->
    <script src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <!-- modernizr js -->
    <script src="files/bower_components/modernizr/js/modernizr.js"></script>
    <script src="files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <!-- i18next.min.js -->
    <script src="files/bower_components/i18next/js/i18next.min.js"></script>
    <script src="files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script src="files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js">
    </script>
    <script src="files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script src="files/assets/js/common-pages.js"></script>
</body>

</html>
