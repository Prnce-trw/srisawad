@extends('layouts.master')
@section('title')
SRISAWAD CAPITAL
@endsection
@section('css')
<style>
    .head-bar {
        font-family: 'prompt', sans-serif;
        font-size: 14px;
    }

    .social-links {
        float: right;
    }

    .footer-area .copyright_part_text p {
        color: #f9f9ff;
        font-size: 16px;
        font-weight: 400;
        font-family: 'prompt', sans-serif;
    }

    .footer-area .copyright_part_text {
        background-color: #003082;
        padding: 11px 0px 8px 0px;
        margin-top: 20px;
    }

    @media (max-width: 320px) and (min-width: 120px) {
        .social-links {
            float: none;
        }
    }

    @media (max-width: 376px) and (min-width: 321px) {
        .social-links {
            float: none;
        }
    }

    @media (max-width: 639px) and (min-width: 376px) {
        .social-links {
            float: none;
        }
    }


    .form-input2 {
        width: 24%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #013799;
        border-radius: 0px;
        box-sizing: border-box;
        background-color: #004085;
        font-family: 'Prompt', sans-serif;
        color: #fff;
        margin-top: 0px;
        margin-left: 240px;
        font-weight: bold;
        border-radius: 10px;
        display: none;
    }

    .form-input3 {
        width: 24%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #9c122c;
        border-radius: 0px;
        box-sizing: border-box;
        background-color: #9c122c;
        font-family: 'Prompt', sans-serif;
        color: #fff;
        margin-top: -7px;
        margin-left: 358px;
        font-weight: bold;
        border-radius: 10px;
    }

    .sub-left {
        padding: 10px 0px 0px 35px;
        font-size: 18px;
        font-family: 'prompt', sans-serif;
        margin-left: 700px;
        margin-top: -55px;
    }

    .form-input {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #013799;
        border-radius: 0px;
        box-sizing: border-box;
        background-color: transparent;
        font-family: 'Prompt', sans-serif;
        color: black;
        margin-top: -55px;
        margin-left: 240px;
    }

    .sub-popup {
        padding: 10px 0px 0px 35px;
        font-size: 18px;
        font-family: 'prompt', sans-serif;
    }

    .title-popup {
        color: #004085;
        font-family: 'prompt', sans-serif;
        font-size: 22px;
        padding: 20px 0px 0px 35px;
    }

    .text-popup {
        color: #fff;
        font-family: 'prompt', sans-serif;
        font-size: 26px;
        text-align: center;
    }

    /* popup----------- */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 999999;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #004085;
        margin: auto;
        padding: 1px;
        border: 1px solid #004085;
        width: 80%;
        color: #fff;
        border-radius: 0px;
    }

    /* The Close Button */
    .close {
        color: #fff;
        float: right !important;
        font-size: 28px;
        font-weight: normal;
        z-index: 99999;
        position: relative;
        opacity: .9;
        margin-left: auto;
        margin-right:10px;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }


    /* ------------ */
    .active {
        color: #9c122c;
    }

    a {
        color: #020c26;
        text-decoration: none;
        background-color: transparent;
    }

    a:hover {
        color: #9c122c;
        text-decoration: none;
    }

    .owl-next {
        color: inherit;
        border: none;
        padding: 0 !important;
        font: inherit;
        background: transparent;
        margin-left: 1050px;
        margin-top: -194px;
        z-index: 99;
    }

    .owl-prev {
        color: inherit;
        border: none;
        padding: 0 !important;
        font: inherit;
        background: transparent;
        margin-top: -194px;
        margin-left: 43px;
        z-index: 99;
    }

    .owl-carousel .owl-item img {
        display: inline-grid;
        width: auto;
    }

    .title {
        font-family: 'prompt', sans-serif;
        text-align: center;
        padding: 29px 0px 0px 465px;
    }

    #timeline2 {
        background-image: url({{asset('url/img/back02.jpg')}});

    }

    .title-02 {
        color: #fff;
        font-family: 'prompt', sans-serif;
        text-align: center;
        padding: 29px 0px 0px 465px;
    }

    .line04 {
        border: 1px solid #fff;
        width: 25%;
        height: 0px;
        margin-top: 72px;
        margin-bottom: 9px;
        text-align: -webkit-center;
        margin-left: -266px;
    }

    .con2 {
        font-family: 'Prompt', sans-serif;
        font-size: 22px;
        color: #fff;
        line-height: 2;
    }

    .content2 {
        padding: 15px 0px 38px 0px;
        text-align: center;
        line-height: 10;
    }

    .box-pic {
        border: 2px solid #013799;
        height: 151px;
        padding: 25px 71px 25px 67px;
        border-radius: 14px;
    }

    @media (max-width: 1024px) and (min-width: 959px) {
        .box-pic {
            border: 2px solid #013799;
            height: 151px;
            padding: 25px 71px 25px 40px;
            border-radius: 14px;
        }

        .sub-left {
            padding: 10px 0px 0px 35px;
            font-size: 18px;
            font-family: 'prompt', sans-serif;
            margin-left: 600px;
            margin-top: -55px;
        }

        .form-input3 {
            width: 24%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #9c122c;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: #9c122c;
            font-family: 'Prompt', sans-serif;
            color: #fff;
            margin-top: -7px;
            margin-left: 347px;
            font-weight: bold;
            border-radius: 10px;
        }

        .owl-next {
            color: inherit;
            border: none;
            padding: 0 !important;
            font: inherit;
            background: transparent;
            margin-left: 880px;
            margin-top: -194px;
            z-index: 99;
        }

        .con {
            font-family: 'Prompt', sans-serif;
            font-size: 21px;
        }

    }

    @media (max-width: 960px) and (min-width: 640px) {
        #bank-credit {
            position: relative;
            width: 50%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .box-pic {
            border: 2px solid #013799;
            height: 130px;
            padding: 20px 71px 25px 17px;
            border-radius: 14px;
            margin-top: 10px;
        }

        .sub-popup {
            padding: 10px 0px 0px 35px;
            font-size: 14px;
            font-family: 'prompt', sans-serif;
        }

        .sub-left {
            padding: 10px 0px 0px 35px;
            font-size: 14px;
            font-family: 'prompt', sans-serif;
            margin-left: 430px;
            margin-top: -55px;
        }

        .form-input {
            width: 50%;
            padding: 5px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #013799;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: 'Prompt', sans-serif;
            color: #ccc;
            margin-top: -55px;
            margin-left: 169px;
        }

        .form-input3 {
            width: 24%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #9c122c;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: #9c122c;
            font-family: 'Prompt', sans-serif;
            color: #fff;
            margin-top: -6px;
            margin-left: 247px;
            font-weight: bold;
            border-radius: 10px;
        }

        .form-input2 {
            width: 24%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #013799;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: #004085;
            font-family: 'Prompt', sans-serif;
            color: #fff;
            margin-top: 0px;
            margin-left: 170px;
            font-weight: bold;
            border-radius: 10px;
            display: none;
        }

        .content {
            padding: 19px 27px 40px 100px;
        }

        .owl-next {
            color: inherit;
            border: none;
            padding: 0 !important;
            font: inherit;
            background: transparent;
            margin-left: 553px;
            margin-top: -194px;
            z-index: 99;
        }

        .title {
            font-family: 'prompt', sans-serif;
            text-align: center;
            padding: 29px 0px 0px 250px;
        }

        .con {
            font-family: 'Prompt', sans-serif;
            font-size: 18px;
        }

        .boxed-btn5 {
            background: #003082;
            color: #fff;
            display: inline-block;
            padding: 9px 0px;
            font-size: 13px;
            font-family: 'Prompt', sans-serif;
            font-weight: 400;
            border-radius: 11px;
            width: 100%;
        }

        .boxed-btn4 {
            background: #9f1830;
            color: #fff;
            display: inline-block;
            padding: 9px 0px;
            font-size: 13px;
            font-family: 'Prompt', sans-serif;
            font-weight: 400;
            border-radius: 11px;
            width: 100%;
        }


        .title-02 {
            color: #fff;
            font-family: 'prompt', sans-serif;
            text-align: center;
            padding: 29px 0px 0px 265px;
        }

        .line04 {
            border: 1px solid #fff;
            width: 37%;
            height: 0px;
            margin-top: 72px;
            margin-bottom: 9px;
            text-align: -webkit-center;
            margin-left: -252px;
        }

    }

    @media (max-width: 639px) and (min-width: 376px) {
        #bank-credit {
            position: relative;
            width: 50%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .box-pic {
            border: 2px solid #013799;
            height: 130px;
            padding: 18px 71px 25px 30px;
            border-radius: 14px;
            margin-top: 10px;
        }

        .modal-content {
            background-color: #004085;
            margin: auto;
            padding: 1px;
            border: 1px solid #004085;
            width: 95%;
            color: #fff;
            border-radius: 0px;
        }

        .sub-popup {
            padding: 10px 0px 0px 10px;
            font-size: 13px;
            font-family: 'prompt', sans-serif;
        }

        .sub-left {
            padding: 27px 0px 0px 35px;
            font-size: 13px;
            font-family: 'prompt', sans-serif;
            margin-left: 260px;
            margin-top: -67px;

        }

        .form-input {
            width: 40%;
            padding: 6px 0px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #013799;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: 'Prompt', sans-serif;
            color: #ccc;
            margin-top: -46px;
            margin-left: 135px;
            height: 35px;
        }

        .form-input3 {
            width: 22%;
            padding: 6px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #9c122c;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: #9c122c;
            font-family: 'Prompt', sans-serif;
            color: #fff;
            margin-top: -25px;
            margin-left: 173px;
            font-weight: bold;
            border-radius: 10px;
        }

        .form-input2 {
            width: 18%;
            padding: 6px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #013799;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: #004085;
            font-family: 'Prompt', sans-serif;
            color: #fff;
            margin-top: 0px;
            margin-left: 135px;
            font-weight: bold;
            border-radius: 10px;
            display: none;
        }

        .title {
            font-family: 'prompt', sans-serif;
            text-align: center;
            padding: 29px 0px 0px 112px;
        }

        .con {
            font-family: 'Prompt', sans-serif;
            font-size: 14px;
        }

        .content {
            padding: 5px 0px 0px 0px;
        }

        .title-02 {
            color: #fff;
            font-family: 'prompt', sans-serif;
            text-align: center;
            padding: 29px 0px 0px 84px;
        }

        .title-02 {
            color: #fff;
            font-family: 'prompt', sans-serif;
            text-align: center;
            padding: 29px 0px 0px 84px;
        }

        .con2 {
            font-family: 'Prompt', sans-serif;
            font-size: 15px;
            color: #fff;
            line-height: 2;
        }

        .line04 {
            border: 1px solid #fff;
            width: 71%;
            height: 0px;
            margin-top: 72px;
            margin-bottom: 9px;
            text-align: -webkit-center;
            margin-left: -266px;
        }



        .slider-area-head .single-slider-head .slider-content p {
            font-family: 'Prompt', sans-serif;
            color: #fff;
            font-size: 20px;
            font-weight: 400;
            margin-bottom: 16px;
            text-align: center;
        }

        .slider-area-head .single-slider-head .slider-content h3 {
            font-family: 'Prompt', sans-serif;
            font-weight: 500;
            font-size: 43px;
            color: #fff;
            line-height: 72px;
        }

    }

    @media (max-width: 376px) and (min-width: 321px) {
        #bank-credit {
            position: relative;
            width: 50%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .box-pic {
            border: 2px solid #013799;
            height: 130px;
            padding: 20px 71px 25px 20px;
            border-radius: 14px;
            margin-top: 10px;
        }

        .modal-content {
            background-color: #004085;
            margin: auto;
            padding: 1px;
            border: 1px solid #004085;
            width: 95%;
            color: #fff;
            border-radius: 0px;
        }

        .sub-popup {
            padding: 10px 0px 0px 10px;
            font-size: 13px;
            font-family: 'prompt', sans-serif;
        }

        .sub-left {
            padding: 21px 0px 0px 35px;
            font-size: 13px;
            font-family: 'prompt', sans-serif;
            margin-left: 233px;
        }

        .form-input {
            width: 40%;
            padding: 3px 0px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #013799;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: 'Prompt', sans-serif;
            color: #ccc;
            margin-top: -43px;
            margin-left: 135px;
            height: 30px;
        }

        .form-input3 {
            width: 20%;
            padding: 5px 10px 5px 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #9c122c;
            box-sizing: border-box;
            background-color: #9c122c;
            font-family: 'Prompt', sans-serif;
            margin-top: -18px;
            margin-left: 170px;
            font-weight: bold;
            border-radius: 10px;
        }

        .form-input2 {
            width: 18%;
            padding: 5px 10px 5px 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #013799;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: #004085;
            font-family: 'Prompt', sans-serif;
            color: #fff;
            margin-top: 0px;
            margin-left: 135px;
            font-weight: bold;
            border-radius: 10px;
            display: none;
        }

        .title {
            font-family: 'prompt', sans-serif;
            text-align: center;
            padding: 29px 0px 0px 112px;
        }

        .con {
            font-family: 'Prompt', sans-serif;
            font-size: 14px;
        }

        .content {
            padding: 5px 0px 0px 0px;
        }

        .title-02 {
            color: #fff;
            font-family: 'prompt', sans-serif;
            text-align: center;
            padding: 29px 0px 0px 70px;
        }

        .con2 {
            font-family: 'Prompt', sans-serif;
            font-size: 15px;
            color: #fff;
            line-height: 2;
        }

        .line04 {
            border: 1px solid #fff;
            width: 78%;
            height: 0px;
            margin-top: 72px;
            margin-bottom: 9px;
            text-align: -webkit-center;
            margin-left: -266px;
        }



        .slider-area-head .single-slider-head .slider-content p {
            font-family: 'Prompt', sans-serif;
            color: #fff;
            font-size: 20px;
            font-weight: 400;
            margin-bottom: 16px;
            text-align: center;
        }

        .slider-area-head .single-slider-head .slider-content h3 {
            font-family: 'Prompt', sans-serif;
            font-weight: 500;
            font-size: 43px;
            color: #fff;
            line-height: 72px;
        }

    }

    @media (max-width: 320px) and (min-width: 120px) {
        #bank-credit {
            position: relative;
            width: 50%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .box-pic {
            border: 2px solid #013799;
            height: 130px;
            padding: 20px 71px 25px 7px;
            border-radius: 14px;
            margin-top: 10px;
        }

        .modal-content {
            background-color: #004085;
            margin: auto;
            padding: 1px;
            border: 1px solid #004085;
            width: 95%;
            color: #fff;
            border-radius: 0px;
        }

        .modal-content {
            background-color: #004085;
            margin: auto;
            padding: 1px;
            border: 1px solid #004085;
            width: 100%;
            color: #fff;
            border-radius: 0px;
        }

        .sub-popup {
            padding: 10px 0px 0px 10px;
            font-size: 10px;
            font-family: 'prompt', sans-serif;
        }

        .sub-left {
            padding: 20px 0px 0px 35px;
            font-size: 10px;
            font-family: 'prompt', sans-serif;
            margin-left: 199px;
            margin-top: -55px;
        }

        .form-input {
            width: 40%;
            padding: 2px 0px 2px 0px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #013799;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: 'Prompt', sans-serif;
            color: #ccc;
            margin-top: -41px;
            margin-left: 105px;
            height: 25px;

        }

        .form-input3 {
            width: 20%;
            padding: 5px 10px 5px 5px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #9c122c;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: #9c122c;
            font-family: 'Prompt', sans-serif;
            margin-top: -15px;
            margin-left: 141px;
            font-weight: bold;
            border-radius: 10px;
        }

        .form-input2 {
            width: 18%;
            padding: 5px 10px 5px 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #013799;
            border-radius: 0px;
            box-sizing: border-box;
            background-color: #004085;
            font-family: 'Prompt', sans-serif;
            color: #fff;
            margin-top: 0px;
            margin-left: 102px;
            font-weight: bold;
            border-radius: 10px;
            display: none;
        }

        .title {
            font-family: 'prompt', sans-serif;
            text-align: center;
            padding: 29px 0px 0px 60px;
        }

        .con {
            font-family: 'Prompt', sans-serif;
            font-size: 14px;
        }

        .content {
            padding: 5px 0px 0px 0px;
        }

        .title-02 {
            color: #fff;
            font-family: 'prompt', sans-serif;
            text-align: center;
            padding: 29px 0px 0px 43px;
        }

        .con2 {
            font-family: 'Prompt', sans-serif;
            font-size: 15px;
            color: #fff;
            line-height: 2;
        }

        .line04 {
            border: 1px solid #fff;
            width: 89%;
            height: 0px;
            margin-top: 72px;
            margin-bottom: 9px;
            text-align: -webkit-center;
            margin-left: -266px;
        }

        .slider-area-head .single-slider-head .slider-content p {
            font-family: 'Prompt', sans-serif;
            color: #fff;
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 16px;
            text-align: center;
        }

        .slider-area-head .single-slider-head .slider-content h3 {
            font-family: 'Prompt', sans-serif;
            font-weight: 500;
            font-size: 36px;
            color: #fff;
            line-height: 72px;
        }

    }
     .bg-image{
        background-image:url({{ asset('local/storage/picture_typecredits/'.$credits->typeimage)}});
    }
</style>

@endsection
@section('content')
<!-- slider-area-start -->
<div class="slider-area-head">
    <div class="single-slider-head bg-image">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <center>
                        <div class="slider-content">
                            <h3>{{$credits->name}}</h3>
                            <a href="{{url('')}}" style="color: #fff;">
                                </a><p><a href="{{url('')}}" style="color: #fff;">หน้าแรก
                            </a> / <span class="color-text"> {{$credits->name}} </span></p>
                            <!-- <center><div class="slider-btn">
                                <a class="boxed-btn2" href="#">อ่านต่อ<i
                                        class="Flaticon flaticon-right-arrow"></i></a>
                            </div></center> -->
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="section-title text-center mb-65">
                <h3>{{$credits->name}}</h3>
                <!-- <span>OUR SERVICES</span> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-service">
                    <div class="service-thumb">
                        <img src="{{asset('local/storage/picture_credits').'/'.$credits->image}}" alt="">
                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    @foreach ($detailcredits as $detailcredit)
                    <div class="col-xl-6 col-md-6" style="">
                         <img src="{{asset('local/storage/picture_detailcredit').'/'.$detailcredit->image}}" alt="" width="71px;">
                        <div class="section">
                            <h3 class="icon-top">{{$detailcredit->name}}</h3>
                            <p class="icon-top"> {{$detailcredit->detail}}</p>
                        </div>
                        <br>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <p style=" font-size: 18px;font-family:'Prompt', sans-serif;color: #003082;">คุณสมบัติผู้สมัคร</p>
                    </div>
                    <div class="col-12" style="margin-bottom:25px;">
                        @foreach ($qualification as $product)
                        <p id="triangle-right" style="margin-left:0px;">
                            <p class="font-top" style="margin-left:25px;">{{$product->name}}</p>
                        </p>
                        @endforeach
                    </div>
                    <div class="col-12">
                        <p style=" font-size: 18px;font-family:'Prompt', sans-serif;color: #003082;">เอกสารประกอบการสมัครใช้บริการ</p>
                        @foreach ($document as $product)
                            <p id="triangle-right" style="margin-left:0px;">
                                <p class="font-top" style="margin-left:25px;">{{$product->name}}</p>
                            </p>
                         @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-3">
            <center>
                <div class="slider-btn">
                    <!-- <button id="myBtn">Open Modal</button> -->
                    <button class="boxed-btn4" href="" id="myBtn">คำนวณสินเชื่อ</button>
                </div>
            </center>
        </div>
        {{-- <div class="col-md-3">
            <center>
                <div class="slider-btn">
                    <a class="boxed-btn5" href="{{url('registered')}}">สมัครสินเชื่อส่วนบุคคล</a>
                </div>
            </center>
        </div> --}}
        <div class="col-md-3"></div>
    </div>
</div>

<!-- popup------------------------- -->




<div id="myModal" class="modal" style=" padding-top: 10px;padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p class="text-popup">คำนวณสินเชื่อ</p>
                </div>
                <div class="modal-content" style="background-color: #fff;">

                    <p class="title-popup">คำนวณการผ่อนชำระต่อเดือน</p>

                    <p class="sub-popup">วงเงินสินเชื่อ</p>
                    <input class="form-input amount-mic" type="text"   id="amount-mic" name="amount-mic" placeholder="กรุณาระบุจำนวนเงิน.."
                        required value="100000">
                    <p class="sub-left">บาท</p><br>

                    <p class="sub-popup">อัตราดอกเบี้ย</p>
                    <input class="form-input interest-rate-mic" type="text" id="interest-rate-mic" name="interest-rate-mic" placeholder="" value="3" required>
                    <p class="sub-left">% ต่อปี</p><br>

                    <p class="sub-popup">ระยะเวลากู้</p>
                    <select class="form-input tenure-mic" id="tenure-mic"  name="tenure-mic" required>
                        <option value="">เลือกระยะเวลาผ่อนชำระ</option>
                        <option value="12" selected >12</option>
                        <option value="24">24</option>
                        <option value="36">36</option>
                        <option value="48">48</option>
                        <option value="60">60</option>
                    </select>
                    <p class="sub-left">เดือน</p><br>


                    {{-- <button class="form-input2" type="text" id="fname" name="firstname">รีเซ็ต</button> --}}
                    <button class="form-input3" type="text" id="cal_micTH"  name="firstname">ตกลง</button>
                    <br>

                    <p class="sub-popup">ยอดผ่อนชำระต่อเดือน</p>
                    <input class="form-input" type="text" id="totalpayable-mic" name="firstname" placeholder="" required value=""  >
                    <p class="sub-left">บาท</p><br>

                    <p class="title-popup">คำนวณวงเงินสินเชื่อ</p>

                    <p class="sub-popup">ยอดผ่อนชำระต่อเดือน</p>
                    <input class="form-input installment-lac" type="text" id="installment-lac" name="installment-lac" placeholder="กรุณาระบุจำนวนเงิน.."
                        required value="8470" >
                    <p class="sub-left">บาท</p><br>

                    <p class="sub-popup">อัตราดอกเบี้ย</p>
                    <input class="form-input interest-rate-lac" type="text" id="interest-rate-lac " name="interest-rate-lac " value="3" placeholder="" required>
                    <p class="sub-left">% ต่อปี</p><br>

                    <p class="sub-popup">ระยะเวลากู้</p>
                    <select class="form-input tenure-lac" id="tenure-lac" name="tenure-lac" required>
                        <option value="">เลือกระยะเวลาผ่อนชำระ</option>
                        <option value="12" selected>12</option>
                        <option value="24">24</option>
                        <option value="36">36</option>
                        <option value="48">48</option>
                        <option value="60">60</option>
                    </select>
                    <p class="sub-left">เดือน</p><br>


                    {{-- <button class="form-input2" type="text" id="fname" name="firstname">รีเซ็ต</button> --}}
                    <button class="form-input3" type="text" id="cal_lacTH" name="cal_lacTH">ตกลง</button>
                    <br>

                    <p class="sub-popup">วงเงินสินเชื่อ</p>
                    <input class="form-input" type="text" id="totalloanamount-lac" name="firstname" placeholder="" required>
                    <p class="sub-left">บาท</p><br>
                    <p class="sub-popup" style="text-indent: 15%;">ผลการคำนวณข้างต้นเป็นตัวเลขโดยประมาณ ท่านสามารถติดต่อเจ้าหน้าที่บริษัทฯ
                        เพื่อสอบถามยอดคำนวณโดยละเอียด</p>
                    <br><br>

                </div>
            </div>

        </div>
    </div>
</div>

<br><br>

<div class="container">
    <div class="row" id="timeline">
        <h3 class="title">ดาวน์โหลดเอกสาร</h3>
        <div class="owl-carousel owl-theme">
            <div class="col-md-12">
                <div class="item">
                    <div class="content">
                        @foreach ($downloaddoc as $product)
                        <a href="#download">
                            <p class="con"><img src="{{asset('url/img/icon-content.png')}}">
                          
                             <a href="{{url('local/storage/downloaddoc').'/'.$product->image}}" target="_blank">   {{$product->name}} </a>
                            </p>
                        </a>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
        <span type="" role="presentation" class="owl-prev" id="customPrevBtn">
        <!--    <img src="{{asset('url/img/but-left.png')}}" class="practice-arrow prod-left">-->
        <!--</span>-->
        <!--<span type="" role="presentation" class="owl-next" id="customNextBtn">-->
        <!--    <img src="{{asset('url/img/but-right.png')}}" class="practice-arrow prod-right">-->
        <!--</span>-->
    </div>
</div>
<br>
<div class="container">
    <div class="row" id="timeline2">
        <h3 class="title-02">ช่องทางการชำระเงิน</h3>
        <hr align="center" class="line04">
        <div class="col-md-12">
            <div class="item">
                <div class="content2">
                    <p class="con2">{{$paymentmethods[0]->name}}
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        @foreach ($logobanks as $logobank)
            <div class="col-md-3" id="bank-credit">
                <div class="box-pic">
                    <a target="_blank" href="{{ asset('local/storage/pdf_files').'/'.$logobank->upload_file }}"><img src="{{ asset('local/storage/picture_logobank').'/'.$logobank->image }}"></a>
                </div>
            </div>
        @endforeach
        {{-- <div class="col-md-3" id="bank-credit">
            <div class="box-pic">
                <img src="{{asset('url/img/bank02.jpg')}}">
            </div>

        </div>
        <div class="col-md-3" id="bank-credit">
            <div class="box-pic">
                <img src="{{asset('url/img/bank03.jpg')}}">
            </div>

        </div>
        <div class="col-md-3" id="bank-credit">
            <div class="box-pic">
                <img src="{{asset('url/img/bank04.jpg')}}">
            </div>

        </div> --}}

    </div>
</div>
<br>
@endsection
@section('js')
<script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!-- ----------------- -->

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
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
            var owl = $('.owl-carousel');
            owl.owlCarousel();
            // Go to the next item
            $('#customNextBtn').click(function () {
                owl.trigger('next.owl.carousel');
            });
            // Go to the previous item
            $('#customPrevBtn').click(function () {
                // With optional speed parameter
                // Parameters has to be in square bracket '[]'
                owl.trigger('prev.owl.carousel', [300]);
            });


        });


    </script>
        <script>
            $(window).load(function() {
                micTH()
                lacTH()
            });
            function round_number(numbers, decimal){
                return Math.round(numbers * Math.pow(10, decimal)) / Math.pow(10, decimal);
            }
        
            function addCommas(nStr){
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }
        
            function micTH() {
        
                var amount = $('.amount-mic').val(); //วงเงินสินเชื่อ
                var rate = $('.interest-rate-mic').val(); //อัตราดอกเบี้ยต่อปี
                var tenure = $('.tenure-mic').val(); //ระยะเวลากู้ (เดือน)
        
        
                // var amount = 100000;
                // var rate = 3;
                // var tenure = 24;
        
                var a = rate / 100 / 12; //อัตราดอกเบี้ยต่อปี หาร 100 หาร 12เดือน 
                var b = 1 + a;  
                    b = Math.pow(b, tenure)-1;
                var AB = a / b + a;
                    AB = AB.toFixed(10);
                var TP = amount * AB + 0.30;
                var TPVal = (round_number(TP, 2)).toFixed(2);
                var totalpayable = parseFloat(TPVal).toFixed(0);
        
                $('#totalpayable-mic').val(addCommas(totalpayable));
                // document.getElementById("totalpayable-mic").innerHTML = "THB "+addCommas(totalpayable);
            }
        
            function lacTH() {
                var installment = $('.installment-lac').val();
                var rate = $('.interest-rate-lac').val();
                var tenure = $('.tenure-lac').val();
                console.log(installment+' - '+rate+'-'+tenure);
                var a = rate / 100 / 12;
                var b = 1 + a;
                b = Math.pow(b, tenure) - 1.;
                var AC = a / b + a;
                AC = AC.toFixed(10);
                var TLA = installment / AC - 0.20;
                var TLAVal = (round_number(TLA, 2)).toFixed(2);
                var totalloanamount = parseFloat(TLAVal).toFixed(0);
                $('#totalloanamount-lac').val(addCommas(totalloanamount));
                // document.getElementById("totalloanamount-lac").innerHTML = "THB "+addCommas(totalloanamount);
        
        
                }
        
            $("#cal_micTH").click(function(){
                var amount = $('.amount-mic').val(); //วงเงินสินเชื่อ
                var rate = $('.interest-rate-mic').val(); //อัตราดอกเบี้ยต่อปี
                var tenure = $('.tenure-mic').val(); //ระยะเวลากู้ (เดือน)
        
        
                // var amount = 100000;
                // var rate = 3;
                // var tenure = 24;
        
                var a = rate / 100 / 12; //อัตราดอกเบี้ยต่อปี หาร 100 หาร 12เดือน 
                var b = 1 + a;  
                    b = Math.pow(b, tenure)-1;
                var AB = a / b + a;
                    AB = AB.toFixed(10);
                var TP = amount * AB + 0.30;
                var TPVal = (round_number(TP, 2)).toFixed(2);
                var totalpayable = parseFloat(TPVal).toFixed(0);
        
                $('#totalpayable-mic').val(addCommas(totalpayable));
            });
        
            $("#cal_lacTH").click(function(){
                var installment = $('.installment-lac').val();
                var rate = $('.interest-rate-lac').val();
                var tenure = $('.tenure-lac').val();
                console.log(installment+' - '+rate+'-'+tenure);
                var a = rate / 100 / 12;
                var b = 1 + a;
                b = Math.pow(b, tenure) - 1.;
                var AC = a / b + a;
                AC = AC.toFixed(10);
                var TLA = installment / AC - 0.20;
                var TLAVal = (round_number(TLA, 2)).toFixed(2);
                var totalloanamount = parseFloat(TLAVal).toFixed(0);
        
                $('#totalloanamount-lac').val(addCommas(totalloanamount));
            });
            </script>
@endsection
