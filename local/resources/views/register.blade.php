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
        padding: 10px 15px;
        margin-top: 20px;
    }

    #desk {
        display: none;
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

    .color-text-content {
        color: #777;
        font-family: 'Prompt', sans-serif;
        font-size: 28px;
    }

    .sub-content {
        font-family: 'Prompt', sans-serif;
        font-size: 18px;
    }

    /* .title-content{
        padding: 50px 0px 0px 0px;
    } */
    .line-title {
        border-top: 1px solid #222;
    }

    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #013799;
        border-radius: 10px;
        box-sizing: border-box;
        background-color: transparent;
        font-family: 'Prompt', sans-serif;
        /* color: #ccc; */
    }

    input[type=submit] {
        width: 20%;
        background-color: #a41a33;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        text-align: -webkit-center;
        margin-left: -80px;
    }

    input[type=submit]:hover {
        background-color: #a41a33;
    }

    .form-regis {
        width: 49%;
    }

    .form-regis2 {
        width: 49%;
        margin-top: -90px;
        margin-left: 223px;
    }

    .container22 {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 18px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-family: 'Prompt', sans-serif;
    }

    /* Hide the browser's default checkbox */
    .container22 input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #ccc;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container22 input:checked~.checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container22 input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container22 .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    label {
        display: inline-block;
        margin-bottom: .5rem;
        font-family: 'Prompt', sans-serif;
    }

    .sub-left {
        margin-left: -150px;
    }

    @media (max-width: 1024px) and (min-width: 959px) {
        .form-regis2 {
            width: 49%;
            margin-top: -90px;
            margin-left: 187px;
        }

        .sub-left {
            margin-left: -133px;
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
        .form-regis2 {
            width: 49%;
            margin-top: -90px;
            margin-left: 137px;
        }

        .sub-left {
            margin-left: -144px;
        }

        input[type=submit] {
            width: 30%;
            background-color: #a41a33;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-align: -webkit-center;
            margin-left: -80px;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 7px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #013799;
            border-radius: 10px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: 'Prompt', sans-serif;
            /* color: #ccc; */
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

        .box-pic {
            border: 2px solid #013799;
            height: 135px;
            padding: 25px 48px 25px 15px;
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
        #desk {
            display: block;
        }

        #respon {
            display: none;
        }

        .container22 {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 18px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-family: 'Prompt', sans-serif;
            font-size: 13px;
        }

        .sub-left {
            margin-left: -138px;
        }

        input[type=submit] {
            width: 40%;
            background-color: #a41a33;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-align: -webkit-center;
            margin-left: -80px;
        }

        .form-regis2 {
            width: 49%;
            margin-top: -90px;
            margin-left: 200px;
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

        .box-pic {
            border: 2px solid #013799;
            height: 151px;
            padding: 25px 71px 25px 145px;
            border-radius: 14px;
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
        #desk {
            display: block;
        }

        #respon {
            display: none;
        }

        .container22 {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 18px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-family: 'Prompt', sans-serif;
            font-size: 13px;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 6px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #013799;
            border-radius: 10px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: 'Prompt', sans-serif;
            /* color: #ccc; */
        }

        .sub-left {
            margin-left: -135px;
        }

        input[type=submit] {
            width: 45%;
            background-color: #a41a33;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-align: -webkit-center;
            margin-left: -80px;
        }

        .form-regis2 {
            width: 49%;
            margin-top: -90px;
            margin-left: 176px;
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

        .box-pic {
            border: 2px solid #013799;
            height: 151px;
            padding: 25px 71px 25px 114px;
            border-radius: 14px;
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
        #desk {
            display: block;
        }

        #respon {
            display: none;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 6px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #013799;
            border-radius: 10px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: 'Prompt', sans-serif;
            /* color: #ccc; */
        }

        .sub-left {
            margin-left: -122px;
        }

        input[type=submit] {
            width: 45%;
            background-color: #a41a33;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-align: -webkit-center;
            margin-left: -80px;
        }

        .form-regis2 {
            width: 49%;
            margin-top: -90px;
            margin-left: 148px;
        }

        .container22 {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 18px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-family: 'Prompt', sans-serif;
            font-size: 13px;
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

        .box-pic {
            border: 2px solid #013799;
            height: 151px;
            padding: 25px 71px 25px 90px;
            border-radius: 14px;
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

    <?php
  $i = 1;
 foreach($logomember as $product){
        if($product->image){  
            $product->image = $product->image;
             }
             else
             {
              $product->image = 'download.jpg'; }
    ?>
     .bg-image-{{$i}}{
                            background-image:url({{ asset('local/storage/picture_logomember/'.$product->image) }});
                        }
                    <?php $i++;  } ?>

</style>

@endsection
@section('content')
<!-- slider-area-start -->
<div class="slider-area-head">    <?php $j = 1; ?>
 @foreach ($logomember as $product)
    <div class="single-slider-head bg-image-{{$j}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <center>
                        <div class="slider-content">
                            <h3>{{$product->name}}</h3>
                            <a href="index.php" style="color: #fff;">
                                <p>หน้าแรก
                            </a> / <span class="color-text"> {{$product->detail}}</span></p>
                            <!-- <center><div class="slider-btn">
                                    <a class="boxed-btn2" href="#">อ่านต่อ<i
                                            class="Flaticon flaticon-right-arrow"></i></a>
                                </div></center> -->
                                @endforeach
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-area2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-content">
                    <p class="color-text-content">สมัครสินเชื่อ</p>
                    <hr class="line-title">
                    <p class="sub-content">กรุณากรอกข้อมูลให้ครบถ้วน</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if(\Session::has('success'))
                <div class="alert alert-success border-success" style="margin-bottom:0px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="icofont-close-line-circled"></i>
                    </button>
                    {{ \Session::get('success') }}
                </div>
                @endif
            </div>
        </div>
    </div><br>
    <form action="{{url('save-credit')}}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="fname">ชื่อ</label>
                    <input type="text" id="fname" name="firstname" placeholder="กรุณากรอกชื่อ.." required>
                </div>
                <div class="col-md-6">
                    <label for="lasttname">นามสกุล</label>
                    <input type="text" id="lasttname" name="lasttname" placeholder="กรุณากรอกนามสกุล.." required>
                </div>
                <div class="col-md-6">
                    <label for="card_id">เลขที่บัตรประชาชน</label>
                    <input type="text" id="card_id" name="card_id"  maxlength="13" placeholder="กรุณากรอกเลขที่บัตรประชาชน 13 หลัก"
                        maxlength="13" required>
                </div>
                <div class="col-md-6">
                    <label for="tel">โทรศัพท์มือถือ</label>
                    <input type="text" id="tel" name="tel" maxlength="10" placeholder="กรุณากรอกเบอร์โทรศัพท์มือถือ.." required>
                </div>
                <div class="col-md-6">
                    <label for="email">อีเมล</label>
                    <input type="text" id="email" name="email" placeholder="กรุณากรอกอีเมล.." required>
                </div>
                <div class="col-md-6">
                    <label for="province">จังหวัด (ที่อยู่ปัจจุบัน)</label>
                    <select id="province" name="province" required>
                        <option value="" selected>--------- เลือกจังหวัด ---------</option>
                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                        <option value="กระบี่">กระบี่ </option>
                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>""
                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                        <option value="ขอนแก่น">ขอนแก่น</option>
                        <option value="จันทบุรี">จันทบุรี</option>
                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                        <option value="ชัยนาท">ชัยนาท </option>
                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                        <option value="ชุมพร">ชุมพร </option>
                        <option value="ชลบุรี">ชลบุรี </option>
                        <option value="เชียงใหม่">เชียงใหม่ </option>
                        <option value="เชียงราย">เชียงราย </option>
                        <option value="ตรัง">ตรัง </option>
                        <option value="ตราด">ตราด </option>
                        <option value="ตาก">ตาก </option>
                        <option value="นครนายก">นครนายก </option>
                        <option value="นครปฐม">นครปฐม </option>
                        <option value="นครพนม">นครพนม </option>
                        <option value="นครราชสีมา">นครราชสีมา </option>
                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                        <option value="นครสวรรค์">นครสวรรค์ </option>
                        <option value="นราธิวาส">นราธิวาส </option>
                        <option value="น่าน">น่าน </option>
                        <option value="นนทบุรี">นนทบุรี </option>
                        <option value="บึงกาฬ">บึงกาฬ</option>
                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                        <option value="ปทุมธานี">ปทุมธานี </option>
                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                        <option value="ปัตตานี">ปัตตานี </option>
                        <option value="พะเยา">พะเยา </option>
                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                        <option value="พังงา">พังงา </option>
                        <option value="พิจิตร">พิจิตร </option>
                        <option value="พิษณุโลก">พิษณุโลก </option>
                        <option value="เพชรบุรี">เพชรบุรี </option>
                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                        <option value="แพร่">แพร่ </option>
                        <option value="พัทลุง">พัทลุง </option>
                        <option value="ภูเก็ต">ภูเก็ต </option>
                        <option value="มหาสารคาม">มหาสารคาม </option>
                        <option value="มุกดาหาร">มุกดาหาร </option>
                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                        <option value="ยโสธร">ยโสธร </option>
                        <option value="ยะลา">ยะลา </option>
                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                        <option value="ระนอง">ระนอง </option>
                        <option value="ระยอง">ระยอง </option>
                        <option value="ราชบุรี">ราชบุรี</option>
                        <option value="ลพบุรี">ลพบุรี </option>
                        <option value="ลำปาง">ลำปาง </option>
                        <option value="ลำพูน">ลำพูน </option>
                        <option value="เลย">เลย </option>
                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                        <option value="สกลนคร">สกลนคร</option>
                        <option value="สงขลา">สงขลา </option>
                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                        <option value="สระแก้ว">สระแก้ว </option>
                        <option value="สระบุรี">สระบุรี </option>
                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                        <option value="สุโขทัย">สุโขทัย </option>
                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                        <option value="สุรินทร์">สุรินทร์ </option>
                        <option value="สตูล">สตูล </option>
                        <option value="หนองคาย">หนองคาย </option>
                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                        <option value="อุดรธานี">อุดรธานี </option>
                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                        <option value="อุทัยธานี">อุทัยธานี </option>
                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                        <option value="อ่างทอง">อ่างทอง </option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="jobs">อาชีพ</label>
                    <select id="jobs" name="jobs" required>
                        <option value="">--------- เลือกอาชีพ ---------</option>
                        <option value="ข้าราชการ">ข้าราชการ</option>
                        <option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
                        <option value="พนักงานบริษัท">พนักงานบริษัท</option>
                        <option value="รัฐวิสาหกิจ">รัฐวิสาหกิจ</option>
                        <option value="อาชีพอิสระ/ฟรีแลนซ์">อาชีพอิสระ/ฟรีแลนซ์</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="salary">รายได้ต่อเดือน (บาท)</label>
                    <select id="salary" name="salary" required>
                        <option value="">--------- เลือกรายได้ต่อเดือน---------</option>
                        <option value="น้อยกว่า 15,000">น้อยกว่า 15,000 บาท</option>
                        <option value="15,000 ถึง 300,000">15,000 ถึง 30,000 บาท</option>
                        <option value="30,001 ถึง 50,000">30,001 ถึง 50,000 บาท</option>
                        <option value="50,001 ถึง 80,000">50,001 ถึง 80,000 บาท</option>
                        <option value="80,001 ถึง 100,000">80,001 ถึง 100,000 บาท</option>
                        <option value="มากกว่า 100,000">มากกว่า 100,000 บาท</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="year">ระยะเวลาการทำงาน</label>
                            <input type="text" id="year" name="year" placeholder="ปี" required>
                        </div>
                        <div class="col-md-6">
                            <label for="month">เดือน</label>
                            <input type="text" id="month" name="month" placeholder="เดือน" required>
                            {{-- <select id="month" name="month" required>
                                <option value="">--------- เลือกเดือน ---------</option>
                                <option value="มกราคม">มกราคม</option>
                                <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                                <option value="มีนาคม">มีนาคม</option>
                                <option value="เมษายน">เมษายน</option>
                                <option value="พฤษภาคม">พฤษภาคม</option>
                                <option value="มิถุนายน">มิถุนายน</option>
                                <option value="กรกฎาคม">กรกฎาคม</option>
                                <option value="สิงหาคม">สิงหาคม</option>
                                <option value="กันยายน">กันยายน</option>
                                <option value="ตุลาคม">ตุลาคม</option>
                                <option value="พฤศจิกายน">พฤศจิกายน</option>
                                <option value="ธันวาคม">ธันวาคม</option>
                            </select> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <label class="container22">ข้าพเจ้าตกลงและยินยอมให้บริษัทฯ เก็บรวมรวม ใช้ หรือเปิดเผยข้อมูลส่วนบุคคลของข้าพเจ้า เพื่อติดต่อ 
                            นำเสนอหรือประชาสัมพันธ์ผลิตภัณฑ์และบริการต่าง ๆ หรือเพื่อวัตถุประสงค์ทางการตลาดของบริษัทฯ 
                            <a href="{{url('terms-condition')}}" target="_blank" style="color:#003082;">ข้อตกลงและเงื่อนไขการใช้บริการ</a>  และ <a href="{{url('policy')}}"  target="_blank" style="color:#003082;">นโยบายข้อมูลส่วนบุคคล</a>

                        <input type="checkbox" name="confirm_send" id="confirm_send" value="1" required>
                        <span class="checkmark"></span>
                    </label>
                    <center><input type="submit" value="ส่ง"><img class="sub-left"
                            src="{{asset('url/img/icon-sub.jpg')}}"></center>
    </form>
</div>
<div class="col-md-1"></div>
</div>
</div>
</form>
</div>
@endsection
@section('js')

@endsection
