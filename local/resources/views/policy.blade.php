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
                <h2><u style="color:black;">นโยบายข้อมูลส่วนบุคคล</u> </h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <p style="text-indent: 5%;">
                    เพื่อประโยชน์ของลูกค้าและบุคคลใดๆ บริษัท ศรีสวัสดิ์ แคปปิตอล จำกัด ( “บริษัทฯ”)
                    จึงได้กำหนดนโยบายข้อมูลส่วนบุคคล หมายรวมถึง วิธีการจัดเก็บรวบรวม
                    การนำไปใช้และการปกป้องดูแลความปลอดภัยให้กับข้อมูลส่วนบุคคลของลูกค้าที่บริษัทฯ
                    ได้มาจากการดำเนินงานทางธุรกิจ และครอบคลุมถึงข้อมูลส่วนบุคคลซึ่งลูกค้าและบุคคลใดๆ
                    ได้ให้ไว้กับบริษัทผ่านทางช่องทางการสื่อสารต่างๆ ที่บริษัทฯ มีบริการไว้เพื่อความสะดวกในการติดต่อ
                    เพื่อการนำเสนอผลิตภัณฑ์ เพื่อแจ้งข่าวสารของบริษัทฯ และบังคับใช้ภายใต้กฎหมายแห่งราชอาณาจักรไทย
                </p>
            </div>
        </div>
        <ol>
            <li> 
                <span style="color:#020c26;font-weight: bold;"> 1. ประเภทของข้อมูลส่วนบุคคลที่จัดเก็บ ข้อมูลส่วนบุคคลของลูกค้าและบุคคลใดๆ ที่บริษัทฯ จัดเก็บอาจรวมถึงข้อมูลตามประเภทดังต่อไปนี้</span>
                <ol style="line-height:200%">
                    <li>• ชื่อ, เพศ, เลขที่บัตรประชาชน, วันเดือนปีเกิด</li>
                    <li>• รายละเอียดการสมรส และครอบครัว</li>
                    <li>• รายละเอียดที่ติดต่อ เช่น ที่อยู่, หมายเลขโทรศัพท์ และอีเมล</li>
                    <li>• รายละเอียดการจ้างงาน, รายได้, ข้อมูลทางการเงินส่วนบุคคลและของธุรกิจ หรือบัญชีธนาคารสำหรับการโอนเงินสินเชื่อที่ได้รับการอนุมัติ และการชำระคืนเงินให้สินเชื่อที่ได้รับการอนุมัติ</li>
                    <li>• รายละเอียดข้อมูลส่วนบุคคลที่จำเป็นสำหรับใช้ในการพิจารณาวงเงินสินเชื่อ</li>
                    <li>• ผลิตภัณฑ์ทางการเงินของสถาบันการเงินอื่นๆ</li>
                    <li>• รายละเอียดของข้อมูลบัญชีผู้ใช้บริการเว็บไซต์ และ/หรือช่องทางอิเล็กทรอนิกส์อื่นๆ (ถ้ามี) ของบริษัทฯ</li>
                    <li>• ข้อมูลการตอบแบบสอบถามของบริษัทฯ เป็นต้น</li> 	
                </ol>
            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 2. วัตถุประสงค์หลักของการเก็บรักษาข้อมูลส่วนบุคคล </span>
                <ol style="line-height:200%">
                    <li>บริษัทฯ จำเป็นต้องเก็บรวบรวมข้อมูลที่เกี่ยวข้องกับลูกค้าและบุคคลใด ๆ ที่ใช้บริการเพื่อนำไปออกแบบผลิตภัณฑ์ และบริการทางการเงินในรูปแบบที่เหมาะสมกับความต้องการของลูกค้าและบุคคลใด ๆ ตลอดจนเพื่อปรับปรุงผลิตภัณฑ์และบริการทางการเงินที่มีอยู่เดิมให้ดียิ่งขึ้น และเสนอข้อเสนอพิเศษต่างๆ เพื่อให้ลูกค้าและบุคคลใดๆ ได้รับสิทธิประโยชน์จากบริษัทฯ ได้อย่างเต็มที่ รวมทั้งใช้ในการดำเนินกิจการของบริษัทฯ และกลุ่มบริษัทในเครือของบริษัทฯ อย่างถูกต้องตามกฎหมาย โดยมุ่งถึงสิทธิประโยชน์ของลูกค้าและบุคคลใด ๆ เป็นหลัก ทั้งนี้ บริษัทฯ ไม่มีนโยบายในการขายข้อมูลส่วนบุคคลของลูกค้าและบุคคลใดๆ ที่บริษัทฯ จัดเก็บไว้ให้แก่บุคคลภายนอก และไม่มีนโยบายที่จะนำข้อมูลไปใช้ในทางขัดต่อกฎหมาย โดยต้องสอดคล้องกับระเบียบปฏิบัติของบริษัทฯ ที่อยู่ภายใต้กฎหมาย กฎระเบียบและข้อบังคับจรรยาบรรณ หรือแนวทางปฏิบัติที่กำหนดโดยหน่วยงานรัฐที่กำกับดูแลภายใต้ศาลใดๆ</li>
                </ol>

            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 3. การถ่ายโอนข้อมูลส่วนบุคคล</span>
                <ol style="line-height:200%">
                        <li>ข้อมูลส่วนบุคคลจะถูกเก็บรวบรวมไว้อย่างปลอดภัยและเป็นความลับ แต่อาจเปิดเผยให้กับบุคคลหรือหน่วยงานอื่นๆ อาทิ</li>
                        <li>• พนักงานผู้ที่ได้รับอนุญาตของบริษัทฯ ผู้สอบบัญชี ผู้ตรวจสอบภายนอกของบริษัทฯ และ/หรือบุคคลภายนอกที่บริษัทฯ เป็นคู่สัญญาหรือมีความสัมพันธ์ด้วย </li>
                        <li>• หน่วยงานเครดิตบรูโร (Credit Bureau) ที่บริษัทฯ เป็นสมาชิก</li>
                        <li>• ผู้เชี่ยวชาญวิชาชีพที่ต้องทำงานร่วมกับบริษัทฯ เช่น ผู้ประเมินและนักกฎหมาย</li>
                        <li>• บริษัทในเครือที่ทำงานร่วมกับบริษัทฯ เพื่อเสนอและทำการตลาดหรือจัดหาผลิตภัณฑ์และการบริการให้แก่ลูกค้า</li>
                        <li>• บุคคลภายนอกที่ให้บริการแก่บริษัทฯ เกี่ยวกับการดำเนินธุรกิจ</li>
                        <li>• หน่วยงานที่กำกับดูแลหรือหน่วยงานของรัฐภายใต้ศาลใดๆ ที่ต้องปฏิบัติตามกฎหมาย กฎระเบียบและข้อบังคับ จรรยาบรรณ หรือแนวทางปฏิบัติต่างๆ เป็นต้น</li> 	
                    </ol>
            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 4. ระยะเวลาการเก็บรักษาข้อมูลส่วนบุคคล</span>
                <ol style="line-height:200%">
                    <li>บริษัทฯ จะเก็บรักษาข้อมูลส่วนบุคคลเป็นระยะเวลาเท่าที่จำเป็นต้องใช้ตามวัตถุประสงค์การนำไปใช้งาน หรือตามที่กฎหมายหรือกฎข้อบังคับกำหนดไว้</li>
                </ol>
            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 5. การดูแลรักษาความปลอดภัยให้กับข้อมูลส่วนบุคคล</span>
                <ol style="line-height:200%">
                    <li>บริษัทฯ ได้นำมาตรการด้านการควบคุมดูแลรักษาความมั่นคงปลอดภัยของระบบสารสนเทศมาใช้อย่างเหมาะสมเพื่อปกป้องข้อมูลส่วนบุคคล  อย่างไรก็ตามถึงแม้ว่าบริษัทฯ จะพยายามอย่างดีที่สุดเพื่อปกป้องดูแลรักษาความปลอดภัยให้กับข้อมูลบนเว็บไซต์ แต่ไม่อาจรับประกันได้ว่าการควบคุมดูแลการรับและส่งข้อมูลบนอินเตอร์เน็ตจะมีความปลอดภัย 100%  หากท่านพบว่าการใช้บริการเว็บไซต์ของบริษัทฯ ไม่มีความปลอดภัยเพียงพอ โปรดแจ้งให้บริษัทฯ ทราบทันที </li>
                </ol>
            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 6. การเชื่อมต่อกับเว็บไซต์อื่นๆ</span>
                <ol style="line-height:200%">
                    <li>เว็บไซต์ของบริษัทฯ อาจมีลิงค์เชื่อมต่อไปยังเว็บไซต์อื่นๆ โดยมีวัตถุประสงค์เพื่ออำนวยความสะดวกให้กับลูกค้าและบุคคลใดๆเท่านั้น เว็บไซต์ที่เชื่อมโยงเหล่านี้มีเงื่อนไขการใช้และนโยบายข้อมูลส่วนบุคคลที่กำหนดขึ้นเองเป็นของแต่ละเว็บไซต์    บริษัทฯ ไม่ได้เป็นผู้ควบคุมหรือดูแลรับผิดชอบในเว็บไซต์ของผู้อื่น ดังนั้นท่านต้องอ่านนโยบายข้อมูลส่วนบุคคลของแต่ละเว็บไซต์ที่ท่านได้เข้าเยี่ยมชมอย่างระมัดระวัง</li>
                </ol>
            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 7. คุกกี้</span>
                <ol style="line-height:200%">
                    <li>คุกกี้เป็นไฟล์ขนาดเล็กที่เก็บรวบรวมข้อมูลการเข้าถึงเว็บไซต์ของลูกค้าและบุคคลใด ๆ ผู้เยี่ยมชมแต่ละท่าน บริษัทฯ อาจใช้คุกกี้เพื่อการจดจำและทำความเข้าใจความต้องการของผู้เยี่ยมชมขณะที่เยี่ยมชมเว็บไซต์ของบริษัทฯ รวมทั้งทำให้บริษัทฯ สามารถนำข้อมูลที่ได้ไปใช้ปรับปรุงเว็บไซต์ของบริษัทฯ เพื่อตอบสนองความต้องการของผู้เยี่ยมชมเว็บไซต์  หากท่านไม่ประสงค์จะให้บริษัทฯ ใช้คุกกี้ ท่านสามารถตั้งค่าไม่ให้มีการใช้คุกกี้ได้ที่เว็บเบราว์เซอร์ที่ท่านใช้งาน</li>
                </ol>
            </li>
            <br>
            <li>
                <span style="color:#020c26;font-weight: bold;"> 8. การเปลี่ยนแปลงนโยบายข้อมูลส่วนบุคคล</span>
                <ol style="line-height:200%">
                    <li>บริษัทฯ อาจมีการแก้ไขเปลี่ยนแปลงนโยบายข้อมูลส่วนบุคคลโดยทุกครั้งที่มีการเปลี่ยนแปลง บริษัทฯ จะนำไปปรับปรุงและแสดงอยู่บนเว็บไซต์นี้ทุกครั้ง</li>
                </ol>
            </li>
            
         </ol>
    </div>
</div>
@endsection
@section('js')

@endsection