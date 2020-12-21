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
</style>

@endsection
@section('content')


<div class="service-area2">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2><u style="color:black;">ข้อตกลงและเงื่อนไขการใช้บริการ</u> </h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <p style="text-indent: 5%;">
                    กรุณาอ่านข้อกำหนดและเงื่อนไขต่างๆ ดังต่อไปนี้อย่างละเอียด โดยในการเข้าถึงเว็บไซต์นี้และหน้าจอใดๆ ของเว็บไซต์ ถือว่าท่านตกลงที่จะผูกพันตามข้อกำหนดและเงื่อนไขการใช้บริการนี้
                </p>
            </div>
        </div>
        <ol>
            <li> 
                <span style="color:#020c26;font-weight: bold;"> 1. เว็บไซต์ของบริษัท ศรีสวัสดิ์ แคปปิตอล จำกัด</span>
                <ol style="line-height:200%">
                    <li>บริษัท ศรีสวัสดิ์ แคปปิตอล จำกัด (“บริษัทฯ”) เป็นเจ้าของและผู้ดูแลจัดการเว็บไซต์นี้ โดยมีวัตถุประสงค์เพื่อเป็นแหล่งรวบรวม เผยแพร่ข้อมูลด้านต่างๆ ของบริษัทฯ ทั้งยังเป็นการอำนวยความสะดวกแก่ท่านในการใช้งานผลิตภัณฑ์และบริการต่างๆ ของบริษัทฯ</li> 	
                </ol>
            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 2. ข้อมูลต่างๆ บนเว็บไซต์ของบริษัทฯ </span>
                <ol style="line-height:200%">
                    <li>บริษัทฯ ดูแลจัดการเว็บไซต์นี้ในประเทศไทย และมิได้ให้คำรับรองว่าข้อมูลที่จัดให้มีในหรือผ่านเว็บไซต์นี้ใช้ได้หรือเหมาะสมในการใช้ในประเทศอื่นๆ หากท่านใช้เว็บไซต์นี้ในประเทศอื่นๆ ท่านมีความรับผิดชอบในการปฏิบัติตามกฎหมายที่ใช้บังคับในประเทศนั้น เนื้อหาในส่วนใดส่วนหนึ่งหรือหน้าใดหน้าหนึ่งของเว็บไซต์นี้ อาจระบุข้อตกลงและเงื่อนไขการใช้บริการอื่นที่แยกออกไปต่างหาก ในกรณีที่ข้อตกลงและเงื่อนไขการใช้บริการอื่นและข้อตกลงและเงื่อนไขการใช้บริการนี้ มีความขัดแย้งกัน ให้ใช้ข้อตกลงและเงื่อนไขในการใช้บริการที่แยกออกไปนั้น โดยบริษัทฯ ขอแนะนำให้ท่านอ่านข้อตกลงและเงื่อนไขการใช้บริการอื่นนั้นก่อนใช้บริการนั้นๆ บริษัทฯ ขอสงวนสิทธิ์ในการนำเสนอ ปรับปรุงและแก้ไขข้อมูลที่ปรากฏบนเว็บไซต์ ซึ่งข้อมูลดังกล่าวได้ถูกจัดทำขึ้นโดยมิได้มีจุดประสงค์เพื่อการให้คำแนะนำอย่างผู้เชี่ยวชาญ ทั้งนี้ บริษัทฯ ไม่รับรองถึงความถูกต้อง และเป็นปัจจุบันของข้อมูลต่างๆ ในเว็บไซต์นี้</li>
                </ol>

            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 3. การเปลี่ยนแปลงแก้ไขเงื่อนไขและข้อกำหนดการใช้งาน </span>
                <ol style="line-height:200%">
                        <li>บริษัทฯ ขอสงวนสิทธิ์ที่จะแก้ไขหรือเปลี่ยนแปลง ข้อกำหนดและเงื่อนไขใดๆ ที่ระบุอยู่ในเว็บไซต์นี้ ท่านมีหน้าที่ที่จะต้องคอยตรวจสอบข้อกำหนดเงื่อนไขการใช้งานเว็บไซต์รวมทั้งข้อกำหนดเพิ่มเติมใดๆ ที่กำหนดอยู่ในเว็บไซต์นี้อย่างสม่ำเสมอ การใช้เว็บไซต์ของท่าน อย่างต่อเนื่องย่อมก่อให้เกิดข้อตกลงและสัญญาตามข้อกำหนดและเงื่อนไขใดๆ ที่ได้ถูกแก้ไขหรือเปลี่ยนแปลงดังกล่าวทั้งหมดด้วย</li> 	
                    </ol>
            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 4. ทรัพย์สินทางปัญญา</span>
                <ol style="line-height:200%">
                    <li>บรรดาเครื่องหมายการค้า เครื่องหมายบริการ ชื่อทางการค้า ตราสัญลักษณ์ต่างๆ รูปภาพที่ปรากฎในเว็ปไซต์ ถือเป็นสมบัติของบริษัทฯ  เว้นแต่จะได้กำหนดโดยชัดแจ้งเป็นอย่างอื่นไว้ ณ ที่นี้ และเว้นแต่กฏหมายที่เกี่ยวข้องจะได้อนุญาตไว้ ไม่มีส่วนใดที่ระบุในเว็บไซต์นี้ซึ่งอาจตีความได้ว่า เป็นการอนุญาตให้ใช้สิทธิหรือทำให้เกิดสิทธิในการใช้ทรัพย์สินทางปัญญาของบริษัทฯ  หากปราศจากความยินยอมเป็นลายลักษณ์อักษรจากบริษัทฯ ห้ามนำไปใช้ซึ่งเครื่องหมายการค้า ตราสัญลักษณ์ต่าง ๆ หรือข้อมูลใด ๆ ที่ปรากฏอยู่บนเว็บไซต์นี้โดยเด็ดขาด เว้นแต่จะมีการอนุญาตไว้ ณ ที่นี้</li>
                </ol>
            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 5. การเชื่อมโยงเว็บไซต์ภายนอก</span>
                <ol style="line-height:200%">
                    <li>เว็บไซต์ของบริษัทฯ อาจมีการเชื่อมต่อไปยังเว็บไซต์อื่นๆ ซึ่งอยู่ภายใต้การดูแลของบุคคลที่สาม เพื่อวัตถุประสงค์ในการให้ข้อมูลและเพื่อความสะดวกของท่านเท่านั้น บริษัทฯ ไม่สามารถรับประกันว่าข้อมูลในเว็บไซต์อื่นๆ ดังกล่าวมีความถูกต้อง สมบูรณ์เพียงพอ เป็นปัจจุบัน เหมาะสมกับวัตถุประสงค์ใดโดยเฉพาะ และปราศจากไวรัส หรือ Malware ตลอดจนบริษัทฯ ไม่ต้องรับผิดต่อความสูญเสีย ความเสียหาย หรือค่าใช้จ่ายใดๆ ที่เกิดขึ้น อันเป็นผลสืบเนื่องมาจากการที่ท่านเข้าใช้เว็บไซต์อื่นๆ และบริษัทฯ ขอให้ลูกค้าทุกท่านศึกษารายละเอียดข้อกำหนดและเงื่อนไขในการใช้บริการของเว็บไซต์นั้นๆ ก่อนที่ท่านจะเข้าใช้บริการ </li>
                </ol>
            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 6. การจำกัดความรับผิดชอบ</span>
                <ol style="line-height:200%">
                    <li>บริษัทฯ ไม่รับผิดชอบต่อความเสียหาย ค่าใช้จ่าย หรือความสูญเสีย ที่อาจเกิดขึ้นจากการใช้เว็บไซต์ของบริษัทฯ หรือเว็บไซต์ที่เชื่อมโยงกับเว็บไซต์บริษัทฯ ซึ่งรวมถึงจากความไม่ถูกต้องแม่นยำของข้อมูล ความล่าช้าในการถ่ายโอนข้อมูล ระยะเวลาในการเผยแพร่ข้อมูล เหตุขัดข้องหรืออุปสรรคของการเชื่อมต่อ ความผิดพลาดในการแสดงผล ความเสถียรของระบบ ไวรัสคอมพิวเตอร์</li>
                </ol>
            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 7. กฎหมายและเขตอำนาจศาลที่ใช้บังคับ</span>
                <ol style="line-height:200%">
                    <li>เงื่อนไขฉบับนี้อยู่ภายใต้การบังคับใช้กฏหมายของประเทศไทย โดยคู่สัญญาต่างๆ ตกลงให้ศาลของประเทศไทยมีเขตอำนาจอย่างเด็ดขาดเหนือศาลอื่น</li>
                </ol>
            </li>
         </ol>
    </div>
</div>
@endsection
@section('js')

@endsection