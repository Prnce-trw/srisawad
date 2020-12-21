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
        padding: 21px 15px;
        margin-top: 60px;
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

    .title-up {
        font-family: 'prompt', sans-serif;
        color: #003082;
    }

    .font-top {
        margin-left: 60px;
        margin-top: -35px;
        font-family: 'prompt', sans-serif;
        color: #003082;
    }

    #triangle-right {
        margin-left: 40px;
        height: 0;
        border-style: solid;
        border-width: 5px 0 5px 10px;
        border-color: transparent transparent transparent #007bff;
        position: relative;
    }

    .icon-up {
        margin-top: -220px;

    }

    .icon-up2 {
        margin-top: -250px;
    }

    .icon-low {
        margin-top: -10px;
    }

    .title {
        margin-top: -147px;
        color: #003082;
        text-align: -webkit-center;
        font-family: 'prompt', sans-serif;
        padding: 0px 70px 0px 117px;
    }

    .title2 {
        margin-top: -376px;
        color: #003082;
        text-align: -webkit-center;
        font-family: 'prompt', sans-serif;
        padding: 0px 0px 0px 22px;
    }

    .active {
        color: #9c122c;
    }

    #active {
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

    .pagination {
        display: inline-block;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
    }

    .pagination a.active {
        color: #013799;
        font-weight: bold;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }

    .line-about2 {
        opacity: 1;
        transform: scaleX(1);
        position: absolute;
        background: #721c24;
        width: 20%;
        height: 3px;
        bottom: 0;
        transition: .3s;
    }

    #pad-about-us {
        padding: 20px 1px 1px 15px;
    }

    .menu-about {
        padding: 0px 40px 0px 0px;
        font-family: 'prompt', sans-serif;
    }

    #line-con {
        box-shadow: #ccc 0px 2px 0px 0px;
        margin-bottom: 2px;
    }

    .img-cen {
        margin-left: 30%;
    }

    .about-color {
        color: #9c122c;
    }

    .about-h3-color {
        color: #013799;
        font-family: 'prompt', sans-serif;
        padding-bottom: 20px;
    }

    .content-about {
        font-family: 'prompt', sans-serif;
        font-size: 16px;
        padding-bottom: 40px;
        text-align: justify;
    }

    @media (max-width: 1024px) and (min-width: 959px) {
        .pic-about {
            width: 108%;
        }

        .icon-low {
            margin-top: -45px;
        }

        .title {
            margin-top: -147px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 27px 0px 0px 17px;
        }

        .icon-up2 {
            margin-top: -230px;
        }

        .title2 {
            margin-top: -375px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 32px 0px 0px 2px;
        }

    }

    @media (max-width: 960px) and (min-width: 640px) {
        .pic-about {
            width: 109%;
        }

        .icon-low {
            margin-top: -45px;
        }

        .title {
            margin-top: -114px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 27px 0px 0px 17px;
            font-size: 16px;
        }

        .icon-up2 {
            margin-top: -230px;
        }

        .title2 {
            margin-top: -375px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 135px 0px 0px 10px;
            font-size: 14px;
        }

        .icon-up {
            margin-top: -150px;
        }

        #triangle-right {
            margin-left: 40px;
            height: 0;
            border-style: solid;
            border-width: 5px 0 5px 7px;
            border-color: transparent transparent transparent #007bff;
            position: relative;
            margin-top: -16px;
        }

        .font-top {
            margin-left: 65px;
            margin-top: -35px;
            font-family: 'prompt', sans-serif;
            color: #003082;
            font-size: 12px;
        }

        .icon-up2 {
            margin-top: -170px;
        }

    }

    @media (max-width: 639px) and (min-width: 376px) {
        .title2 {
            margin-top: -375px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 135px 0px 0px 10px;
            font-size: 14px;
        }

        #triangle-right {
            margin-left: 40px;
            height: 0;
            border-style: solid;
            border-width: 5px 0 5px 7px;
            border-color: transparent transparent transparent #007bff;
            position: relative;
            margin-top: -16px;
        }

        .font-top {
            margin-left: 65px;
            margin-top: -35px;
            font-family: 'prompt', sans-serif;
            color: #003082;
            font-size: 12px;
        }

        .icon-up2 {
            margin-top: -170px;
        }

        .title {
            margin-top: -143px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 31px 0px 0px 0px;
            font-size: 21px;
        }

        .icon-up {
            margin-top: -220px;
        }

        #icon-up {
            margin-top: -160px;
        }

        .icon-low {
            margin-top: -21px;
        }

        .pic-about {
            width: 100%;
        }

        .img-cen {
            margin-left: 10%;
            width: 80%;
            height: 200px;
            object-fit: cover;
        }

        .content-about {
            font-family: 'prompt', sans-serif;
            font-size: 16px;
            padding-bottom: 40px;
            text-align: justify;
            padding: 0px 20px 0px 20px;
        }

        .about-h3-color {
            color: #013799;
            font-family: 'prompt', sans-serif;
            padding-bottom: 20px;
            padding: 0px 20px 0px 20px;
        }

    }

    @media (max-width: 376px) and (min-width: 321px) {
        .title2 {
            margin-top: -363px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 135px 0px 0px 10px;
            font-size: 14px;
        }

        #triangle-right {
            margin-left: 40px;
            height: 0;
            border-style: solid;
            border-width: 5px 0 5px 7px;
            border-color: transparent transparent transparent #007bff;
            position: relative;
            margin-top: -16px;
        }

        .font-top {
            margin-left: 65px;
            margin-top: -35px;
            font-family: 'prompt', sans-serif;
            color: #003082;
            font-size: 12px;
        }

        .icon-up2 {
            margin-top: -170px;
        }

        .title {
            margin-top: -143px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 31px 0px 0px 0px;
            font-size: 21px;
        }

        .icon-up {
            margin-top: -178px;
        }

        #icon-up {
            margin-top: -140px;
        }

        .icon-low {
            margin-top: -21px;
        }

        .pic-about {
            width: 100%;
        }

        .img-cen {
            margin-left: 10%;
            width: 80%;
            height: 200px;
            object-fit: cover;
        }

        .content-about {
            font-family: 'prompt', sans-serif;
            font-size: 16px;
            padding-bottom: 40px;
            text-align: justify;
            padding: 0px 20px 0px 20px;
        }

        .about-h3-color {
            color: #013799;
            font-family: 'prompt', sans-serif;
            padding-bottom: 20px;
            padding: 0px 20px 0px 20px;
        }

        .img-cen {
            margin-left: 10%;
            width: 80%;
            height: 200px;
            object-fit: cover;
        }

        .content-about {
            font-family: 'prompt', sans-serif;
            font-size: 16px;
            padding-bottom: 40px;
            text-align: justify;
            padding: 0px 20px 0px 20px;
        }

        .about-h3-color {
            color: #013799;
            font-family: 'prompt', sans-serif;
            padding-bottom: 20px;
            padding: 0px 20px 0px 20px;
        }

        .menu-about {
            padding: 0px 40px 0px 0px;
            font-family: 'prompt', sans-serif;
            font-size: 14px;
        }


    }

    @media (max-width: 320px) and (min-width: 120px) {
        .title2 {
            margin-top: -342px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 151px 0px 0px 0px;
            font-size: 12px;
        }

        #triangle-right {
            margin-left: 13px;
            height: 0;
            border-style: solid;
            border-width: 5px 0 5px 7px;
            border-color: transparent transparent transparent #007bff;
            position: relative;
            margin-top: -16px;
        }

        .font-top {
            margin-left: 25px;
            margin-top: -35px;
            font-family: 'prompt', sans-serif;
            color: #003082;
            font-size: 9px;
        }

        .icon-up2 {
            margin-top: -159px;
        }

        .title {
            margin-top: -143px;

            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 57px 0px 0px 0px;
            color: #003082;
            font-size: 17px;
        }

        .icon-up {
            margin-top: -178px;
        }

        #icon-up {
            margin-top: -140px;
        }

        .icon-low {
            margin-top: -21px;
        }

        .pic-about {
            width: 100%;
        }

        .img-cen {
            margin-left: 10%;
            width: 80%;
            height: 200px;
            object-fit: cover;
        }

        .content-about {
            font-family: 'prompt', sans-serif;
            font-size: 16px;
            padding-bottom: 40px;
            text-align: justify;
            padding: 0px 20px 0px 20px;
        }

        .about-h3-color {
            color: #013799;
            font-family: 'prompt', sans-serif;
            padding-bottom: 20px;
            padding: 0px 20px 0px 20px;
        }

        .img-cen {
            margin-left: 10%;
            width: 80%;
            height: 200px;
            object-fit: cover;
        }

        .content-about {
            font-family: 'prompt', sans-serif;
            font-size: 16px;
            padding-bottom: 40px;
            text-align: justify;
            padding: 0px 20px 0px 20px;
        }

        .about-h3-color {
            color: #013799;
            font-family: 'prompt', sans-serif;
            padding-bottom: 20px;
            padding: 0px 20px 0px 20px;
        }

        .menu-about {
            padding: 0px 18px 0px 0px;
            font-family: 'prompt', sans-serif;
            font-size: 13px;

        }
    }

    .center {
    padding: 70px 0;
    text-align: center;
    }
</style>
@endsection
@section('content')

<!-- header-end -->
<div class="slider-area-head">
    <div class="single-slider-head bg-image">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <center>
                        <div class="slider-content">
                            <h3>เกี่ยวกับเรา</h3>
                            <a href="{{url('/')}}" style="color: #fff;">
                                <p>หน้าแรก
                            </a> / <span class="color-text"> เกี่ยวกับเรา </span></p>
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
<div id="line-con">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="pad-about-us">
                <p><a class="menu-about" href="{{url('about-us')}}">ประวัติบริษัท</a><a class="menu-about" id="active"
                        href="{{url('mission-vision')}}"><span class="line-about2"></span>พันธกิจ
                        วิสัยทัศน์และค่านิยมองค์กร</a>
                </p>
            </div>
            <hr>
        </div>
    </div>

</div>

<div class="service-area2">
    @foreach ($visions as $key => $vision)

    @if ($key%2 == 0)
    <div class="container">
        <h4 class="title-up">{{$vision->name}}</h4>
        <div class="row">
            <div class="col-md-6" style="padding:0px;">
                <img src="{{asset('local/storage/picture_vision').'/'.$vision->image}}" class="img-fluid">

            </div>
            <div class="col-md-6" style="background-color: white;padding:0px;{{$key == 0 ? 'padding-top:10%' :'padding-top:0%'}}">
                {{-- <img class="pic-about" src="{{asset('url/img/img06.jpg')}}"> --}}
                @if($key != 2)
                <center><img src="{{asset('url/img/ic01.jpg')}}"></center>
                <h4 class="text-center" style="color: #003082; font-family: 'prompt', sans-serif;padding-top:15px;">{!!$vision->detail!!}
                </h4>

                <h6 class="text-center" style="color: #003082; font-family: 'prompt', sans-serif;">
                    {!!$vision->detail2!!}</h6>
                {{-- <p class="text-center" style="color: #003082; font-family: 'prompt', sans-serif;padding-left:50px;">{!!$vision->detail2!!}</p> --}}
                <center> <img src="{{asset('url/img/ic02.jpg')}}"></center>
               @else 
               <center><img src="{{asset('url/img/ic01.jpg')}}"></center>
               <h4 class="text-center" style="color: #003082; font-family: 'prompt', sans-serif;padding-top:15px;">{!!$vision->detail!!}</h4>
               <br>
               <p id="triangle-right"></p><p class="font-top"> ความซื่อสัตย์สุจริต (Integrity)</p>
               <p id="triangle-right"></p><p class="font-top"> ความคิดสร้างสรรค์ (Innovation)</p>
               <p id="triangle-right"></p><p class="font-top"> ความพร้อมต่อการเปลี่ยนแปลง (Fast to Change)</p>
               <p id="triangle-right"></p><p class="font-top"> ความร่วมมือในการทำงานร่วมกันเป็นทีม (Teamwork)</p>
               <p id="triangle-right"></p><p class="font-top"> ความใส่ใจต่อบริการสำหรับลูกค้า (Customer First)</p>
               <p id="triangle-right"></p><p class="font-top"> ความมุ่งมั่นในการสร้างผลกำไรให้ผู้ถือหุ้น (Return to Shareholders)</p>
               <center> <img src="{{asset('url/img/ic02.jpg')}}"></center>
               @endif
            </div>

        </div>
    </div>
    <br><br>
    @else
    <div class="container">
        <h4 class="title-up">{{$vision->name}}</h4>
        <div class="row">
            <div class="col-md-6" style="background-color: white;padding:0px;padding-top:9%;">
                {{-- <img class="pic-about" src="{{asset('url/img/img06.jpg')}}"> --}}

                <center><img src="{{asset('url/img/ic01.jpg')}}"></center>
                <h4 class="text-center" style="color: #003082; font-family: 'prompt', sans-serif;padding-top:15px;">{!!$vision->detail!!}
                </h4>
         
                <h6 class="text-center" style="color: #003082; font-family: 'prompt', sans-serif;">
                    {!!$vision->detail2!!}</h6>
                {{-- <p class="text-center" style="color: #003082; font-family: 'prompt', sans-serif;padding-left:50px;">{!!$vision->detail2!!}</p> --}}
                <center> <img src="{{asset('url/img/ic02.jpg')}}"></center>

            </div>

            <div class="col-md-6" style="padding:0px;">
                <img src="{{asset('local/storage/picture_vision').'/'.$vision->image}}" class="img-fluid">

            </div>

        </div>

    </div>
    <br><br>
    @endif

    @endforeach

    {{-- <div class="container">
        <h4 class="title-up">ค่านิยม</h4>
        <div class="row">
            <div class="col-md-6">
                <img class="pic-about" src="{{asset('url/img/img04.jpg')}}">

</div>
<div class="col-md-6">
    <img class="pic-about" src="{{asset('url/img/img07.jpg')}}">
    <h4 class="title2">เพื่อบรรทัดฐานในการทำงานแบบมืออาชีพและก่อให้เกิดความยั่งยืนในการทำงาน
        บริษัทฯสนับสนุนค่านิยมในการทำงานภายใต้แนวทาง</h4>
    <center><img class="icon-up2" src="{{asset('url/img/ic01.jpg')}}"></center>
    <p id="triangle-right">
        <p class="font-top"> ความซื่อสัตย์สุจริต (Integrity)</p>
    </p>
    <p id="triangle-right">
        <p class="font-top"> ความคิดสร้างสรร (Innovation)</p>
    </p>
    <p id="triangle-right">
        <p class="font-top"> ความพร้อมต่อการเปลี่ยนแปลง (Fast to Change)</p>
    </p>
    <p id="triangle-right">
        <p class="font-top"> ความร่วมมือในการทำงานร่วมกันเป็นทีม (Teamwork)</p>
    </p>
    <p id="triangle-right">
        <p class="font-top"> ความใส่ใจต่อบริการสำหรับลูกค้า (Customer First)</p>
    </p>
    <p id="triangle-right">
        <p class="font-top"> ความมุ่งมั่นในการสร้างผลกำไรให้ผู้ถือหุ้น (Return to Shareholders)</p>
    </p>
    <center> <img class="icon-low" src="{{asset('url/img/ic02.jpg')}}"></center>



</div>

</div>

</div>
<br><br> --}}
</div>

@endsection
@section('js')

@endsection