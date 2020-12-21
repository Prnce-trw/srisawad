@extends('layouts.master')
@section('title')
SRISAWAD CAPITAL
@endsection
@section('css')
 <!-- Select 2 css -->
 <link rel="stylesheet" href="{{asset('files/bower_components/select2/css/select2.min.css')}}" /> 
 {{-- <link rel="stylesheet" href="{{asset('files/assets/css/style.css')}}" /> --}}
<style>
    .select2-container--default:focus {
    border-color: #4099ff
}

.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #fff transparent
}

.select2-container--default .select2-search__field:focus {
    border: 1px solid #4099ff
}

.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #4099ff
}

.select2-container--default .select2-selection--multiple {
    padding: 3px
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #4099ff;
    border: 1px solid #4099ff;
    padding: 5px 15px;
    color: #fff
}

.select2-container--default .select2-selection--multiple .select2-selection__choice span {
    color: #fff
}

.select2-container--default .select2-selection--multiple .select2-search__field {
    border: none
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: 1px solid #4099ff
}

.select2-container--default .select2-selection--single {
    color: #fff;
    height: auto;
    width:100%;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    border: 1px solid #013799;
    border-radius: 10px;
    padding: 5px 15px;
    background-color: transparent;
        font-family: 'Prompt', sans-serif;
        color: #ccc;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 10px;
    right: 15px
}

.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #fff transparent transparent transparent
}
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

    .text {
        padding: 0px 20px 0px 30px;
        font-size: 18px;
        text-align: left;
        font-family: 'prompt', sans-serif;
    }

    .title-content2 {
        box-shadow: #ccc 4px 4px 14px 1px;
        background-color: #fff;
        font-size: 20px;
        padding: 19px 0px 19px 0px;
        border-radius: 6px;
        margin-top: 10px;
    }

    .line-search {
        border-top: 3px solid #dc3545;
        position: relative;
        width: 20%;
        margin-top: -6px;
    }

    .color-text-content {
        color: #000;
        font-family: 'prompt', sans-serif;
        font-size: 20px;

    }

    .sub-content {
        font-family: 'prompt', sans-serif;
    }

    .cont-col {
        color: #013799;
        font-family: 'prompt', sans-serif;
        font-size: 22px;
    }

    /* /////////////////////form///////////////////// */
    button[type=text5] {
        width: 60%;
        padding: 5px 0px;
        display: inline-block;
        border: 1px solid #013799;
        box-sizing: border-box;
        background-color: #013799;
        font-family: 'Prompt', sans-serif;
        color: #fff;
        border-radius: 10px;
        font-size: 18px;
    }

    button[type=text4],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #013799;
        border-radius: 25px;
        box-sizing: border-box;
        background-color: #013799;
        font-family: 'Prompt', sans-serif;
        color: #fff;
    }

    input[type=text3],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #013799;
        border-radius: 25px;
        box-sizing: border-box;
        background-color: transparent;
        font-family: 'Prompt', sans-serif;
        color: #ccc;
    }

    input[type=text2],
    select {
        width: 100%;
        padding: 61px 18px;
        margin: 7px 0;
        display: inline-block;
        border: 1px solid #013799;
        border-radius: 10px;
        box-sizing: border-box;
        background-color: transparent;
        font-family: 'Prompt', sans-serif;
        color: #ccc;
    }

    textarea,
    select {
        width: 100%;
        /* padding: 61px 18px; */
        margin: 7px 0;
        display: inline-block;
        border: 1px solid #013799;
        border-radius: 10px;
        box-sizing: border-box;
        background-color: transparent;
        font-family: 'Prompt', sans-serif;
        color: black;
    }

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
        color: black;
    }

    input[type=submit] {
        width: 19%;
        background-color: #a41a33;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        text-align: -webkit-center;
        font-family: 'prompt', sans-serif;
        margin-left: -52px;
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




    /* //////////////////////////////////////////////// */
    .text-map {
        font-size: 22px;
        font-family: 'prompt', sans-serif;
    }

    .address {
        font-size: 26px;
        font-family: 'prompt', sans-serif;
        padding: 20px 1px 0px 45px;
        line-height: 1.5;
    }

    .address2 {
        font-size: 20px;
        font-family: 'prompt', sans-serif;
        padding: 12px 0px 0px 90px;
        line-height: 0.1;
        margin-top: -52px;
    }

    .address3 {
        font-size: 20px;
        font-family: 'prompt', sans-serif;
        padding: 11px 1px 0px 90px;
        line-height: 0.1;
        margin-top: 0px;
    }

    .contact-line {
        border-top: 5px solid #003082;
        position: relative;
        width: 20%;
    }

    .pic-about {
        width: 108%;
        height: 350px;
        object-fit: cover;
    }

    .title-up {
        font-family: 'prompt', sans-serif;
        color: #003082;
    }

    .font-top {
        margin-left: 65px;
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
        margin-top: -306px;
        color: #003082;
        text-align: -webkit-center;
        font-family: 'prompt', sans-serif;
        padding: 0px 70px 0px 117px;
        font-size: 33px;
        font-weight: bold;
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
        padding: 20px 1px 1px 1px;
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
        .sub-left {
            margin-left: -132px;
        }


        .address3 {
            font-size: 18px;
            font-family: 'prompt', sans-serif;
            padding: 10px 1px 0px 70px;
            line-height: 0.1;
            margin-top: 17px;
        }

        .address2 {
            font-size: 18px;
            font-family: 'prompt', sans-serif;
            padding: 10px 1px 0px 70px;
            line-height: 0.1;
            margin-top: -47px;
        }

        .pic-about {
            width: 108%;
        }

        .icon-low {
            margin-top: -45px;
        }

        .title {
            margin-top: -328px;
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
        .sub-left {
            margin-left: -107px;
        }

        .address {
            font-size: 20px;
            font-family: 'prompt', sans-serif;
            padding: 9px 10px 0px 80px;
            line-height: 1.5;
        }

        .address3 {
            font-size: 13px;
            font-family: 'prompt', sans-serif;
            padding: 10px 1px 0px 70px;
            line-height: 0.1;
            margin-top: 17px;
        }

        .address2 {
            font-size: 13px;
            font-family: 'prompt', sans-serif;
            padding: 10px 1px 0px 70px;
            line-height: 0.1;
            margin-top: -47px;
        }

        .pic-about {
            width: 109%;
        }

        .icon-low {
            margin-top: -45px;
        }

        .title {
            margin-top: -311px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 27px 0px 0px 17px;
            font-size: 22px;
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
        #desk {
            display: block;
        }

        #respon {
            display: none;
        }

        .address2 {
            font-size: 17px;
            font-family: 'prompt', sans-serif;
            padding: 12px 0px 0px 90px;
            line-height: 0.1;
            margin-top: -52px;
        }

        .address3 {
            font-size: 17px;
            font-family: 'prompt', sans-serif;
            padding: 11px 1px 0px 90px;
            line-height: 0.1;
            margin-top: 0px;
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
            font-family: 'prompt', sans-serif;
            margin-left: -52px;

        }

        .sub-left {
            margin-left: -104px;
        }

        .address {
            font-size: 24px;
            font-family: 'prompt', sans-serif;
            padding: 21px 6px 0px 34px;
            line-height: 1.5;
        }

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
            margin-top: -345px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 31px 0px 0px 0px;
            font-size: 26px;
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
        #desk {
            display: block;
        }

        #respon {
            display: none;
        }

        .address2 {
            font-size: 17px;
            font-family: 'prompt', sans-serif;
            padding: 12px 0px 0px 90px;
            line-height: 0.1;
            margin-top: -52px;
        }

        .address3 {
            font-size: 17px;
            font-family: 'prompt', sans-serif;
            padding: 11px 1px 0px 90px;
            line-height: 0.1;
            margin-top: 0px;
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
            font-family: 'prompt', sans-serif;
            margin-left: -52px;
        }

        .sub-left {
            margin-left: -95px;
        }

        .address {
            font-size: 22px;
            font-family: 'prompt', sans-serif;
            padding: 21px 6px 0px 34px;
            line-height: 1.5;
        }

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
            margin-top: -324px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 31px 0px 0px 0px;
            font-size: 24px;
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
        #desk {
            display: block;
        }

        #respon {
            display: none;
        }

        .address2 {
            font-size: 16px;
            font-family: 'prompt', sans-serif;
            padding: 10px 1px 0px 70px;
            line-height: 0.1;
            margin-top: -47px;
        }

        .address3 {
            font-size: 16px;
            font-family: 'prompt', sans-serif;
            padding: 10px 1px 0px 70px;
            line-height: 0.1;
            margin-top: 17px;
        }

        input[type=submit] {
            width: 36%;
            background-color: #a41a33;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            margin-left: -52px;
        }

        .sub-left {
            margin-left: -95px;
        }

        .address {
            font-size: 20px;
            font-family: 'prompt', sans-serif;
            padding: 21px 6px 0px 34px;
            line-height: 1.5;
        }

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
            margin-top: -345px;
            color: #003082;
            text-align: -webkit-center;
            font-family: 'prompt', sans-serif;
            padding: 31px 0px 0px 0px;
            font-size: 24px;
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


<?php
  $i = 1;
 foreach($contactor as $product){
        if($product->image2){  
            $product->image = $product->image2;
             }
             else
             {
              $product->image = 'download.jpg'; }
    ?>
     .bg-image-{{$i}}{
                            background-image:url({{ asset('local/storage/picture_contactor/'.$product->image2) }});
                        }
                    <?php $i++;  } ?>
                    

    

</style>
@endsection
@section('content')
<?php $j = 1; ?>
<div class="slider-area-head">
    @foreach ($contactor as $product)
    <div class="single-slider-head bg-image-{{$j}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <center>
                        <div class="slider-content">
                            <h3>{{$product->name}}</h3>
                            <p><a href="{{url('')}}" style="color: #fff;">หน้าแรก</a> / <span class="color-text"> {{$product->name}} </span></p>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>



<div class="service-area2">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="pic-about" src="{{ asset('local/storage/picture_contactorcompany/'.$product->image1) }}">
            </div>
            <div class="col-md-8">
                <img class="pic-about" src="{{asset('url/img/img06.jpg')}}">
                <h4 class="title">{{$product-> name_company}}</h4>
                <hr class="contact-line">
                <p class="address">{{$product-> address_company}}</p>

            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="pic-about2" src="{{asset('url/img/box01.png')}}">
                <p class="address2">อีเมล</p>
                <p class="address3">{{$product-> email}}</p>

            </div>
            <div class="col-md-4">
                <img class="pic-about2" src="{{asset('url/img/box02.png')}}">
                <p class="address2">ศูนย์บริการลูกค้า </p>
                <p class="address3">{{$product-> service}}</p>

            </div>
            <div class="col-md-4">
                <img class="pic-about2" src="{{asset('url/img/box03.png')}}">
                <p class="address2">เว็บไซต์</p>
                <p class="address3">{{$product-> web}}</p>



            </div>

        </div>

    </div>
    <br><br>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <p class="text-map"><img src="{{asset('url/img/map.png')}}"> แผนที่</p>
                <hr>
                {!!$product-> map!!}
            </div>

        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-content">
                    <p class="color-text-content"><img src="{{asset('url/img/contact.png')}}"><span class="cont-col">
                            ติดต่อสอบถาม</span></p>
                    <hr class="line-title">
                    <p class="sub-content">{{$product->contact}}</p>
                </div>
            </div>
        </div>
        <br>

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
</div>
    <br>
    <form action="{{url('save-contact')}}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="subject">เรื่องที่ต้องการติดต่อ</label>
                    <select id="subject" name="subject" required>
                        <option value="">กรุณาเลือกเรื่องที่ต้องการติดต่อ</option>
                        <option value="ติดต่อสอบถาม">ติดต่อสอบถาม</option>
                        <option value="แจ้งแก้ไขข้อมูล">แจ้งแก้ไขข้อมูล</option>
                        <option value="แจ้งร้องเรียนและข้อเสนอแนะ">แจ้งร้องเรียนและข้อเสนอแนะ</option>
                        <option value="ติดต่อเรื่องอื่นๆ">ติดต่อเรื่องอื่นๆ</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="status_cus">สถานะ</label>
                    <select id="status_cus" name="status_cus" required>
                        <option value="">กรุณาเลือกสถานะ</option>
                        <option value="ลูกค้าทั่วไป">ลูกค้าทั่วไป</option>
                        <option value="ผู้ติดต่ออื่นๆ">ผู้ติดต่ออื่นๆ</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="name">ชื่อ</label>
                    <input type="text" id="name" name="name" placeholder="กรุณากรอกชื่อ.." required>
                </div>
                <div class="col-md-6">
                    <label for="lastname">นามสกุล</label>
                    <input type="text" id="lastname" name="lastname" placeholder="กรุณากรอกนามสกุล.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="tel">เบอร์โทรศัพท์</label>
                    <input type="text" id="tel" name="tel" maxlength="10" placeholder="กรุณากรอกเบอร์โทรศัพท์.." required>
                </div>
                <div class="col-md-6">
                    <label for="email">อีเมล</label>
                    <input type="text" id="email" name="email" placeholder="กรุณากรอกอีเมล.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="detail">รายละเอียดที่ต้องการติดต่อ</label>
                    <textarea  id="detail" name="detail" placeholder="" rows="8" > </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                        <input type="submit" value="ส่ง"><img class="sub-left"
                        src="{{asset('url/img/icon-sub.jpg')}}">
                </div>
            </div>
        </div>
    </form>
    <br>
    <!--<div class="container">
        <form class="example" action="/action_page.php">
            <div class="row">
                <div class="col-md-3">
                        <button style="cursor: context-menu;" class="text4" type="text4">ค้นหาสาขา</button>
                </div>
                <div class="col-md-9 mt-2">
                        <select id="search"  name="search"  class="js-example-basic-single col-sm-12">

                            <option value="">---- กรุณาเลือกสาขา -----</option>
                            @foreach($branchs as $branch)
                                <option value="{{$branch->id}}">{{$branch->name}}</option>
                            @endforeach
                        </select>

                </div>
               
            </div>
        </form>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-content">
                    <p class="color-text-content"><span class="cont-col"> ศรีสวัสดิ์ เงินสั่งได้</span></p>
                </div>
            </div>
        </div>
    </div><br>
    <div class="container">
        <div class="show_branch">
            <div class="row">
                <div class="col-md-5">
                    <div class="title-content2">
                        <center>
                                <p class="color-text-content">{{count($branchs) > 0 ? $branchs[0]->name : ''}}</p>
                                <hr class="line-search">
                                <p class="text"><img src="{{asset('url/img/map.png')}}">{{count($branchs) > 0 ? $branchs[0]->detail : ''}}</p>
                                <p class="text"><img src="{{asset('url/img/call.png')}}">{{count($branchs) > 0 ? $branchs[0]->tel : ''}}</p>
                        <div class="d-block d-sm-none">
                            <a href="{{count($branchs) > 0 ? $branchs[0]->link : ''}}" target="_blank">
                                <button class="text5" type="text5"><img  src="{{asset('url/img/icon-map.png')}}">ดูแผนที่</button>
                            </a>
                        </div>
                        </center>
                     </div>
                </div>
                <div class="col-md-7 d-none d-sm-block">
                     <p class="color-text-content">{!!count($branchs) > 0 ? $branchs[0]->location : ''!!}</p>
                </div>
            </div>
        </div>
    </div>
    <br>


    <div class="container">
                <div class="row">
               <div class="col-md-4">
                 <img class="pic-about" src="img/img01.jpg">
    
               </div>
               <div class="col-md-8">
                    <img class="pic-about" src="img/img06.jpg">
                    <h4 class="title">บริษัท ศรีสวัสดิ์ แคปปิตอล จำกัด</h4>
                    <hr class="contact-line">
                   
    
            </div>
                  
                </div>
    
            </div> -->
    <br><br>
</div>


@endsection
@section('js')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147734154-1"></script>
<script  src="{{asset('files/bower_components/select2/js/select2.full.min.js')}}"></script>
<!-- Multiselect js -->
    <script  src="{{asset('files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}">
    </script>
    <script  src="{{asset('files/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
    <script  src="{{asset('/files/assets/js/jquery.quicksearch.js')}}"></script>

<script  src="{{asset('files/assets/pages/advance-elements/select2-custom.js')}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-147734154-1');

</script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

    $(document).ready(function () {
        $("#joinus").addClass("active");
        $("iframe").width('100%');
        $('iframe').css('height', '350px');
    });

    $("#search").change(function(){
        var id = $(this).val();
        $.ajax({
            url:"{{url('search_location')}}/"+id,
            type:"get",
            data:{
                id:id
            }
        }).done(function(data){
            $(".show_branch").html('<div class="row"><div class="col-md-5"><div class="title-content2"><center><p class="color-text-content">'+data.name+'</p><hr class="line-search"><p class="text"><img src="{{asset("url/img/map.png")}}">'+data.detail+'</p><p class="text"><img src="{{asset("url/img/call.png")}}">'+data.tel+'</p><div class="d-block d-sm-none"><a href="'+data.link+'" target="_blank"><button class="text5" type="text5"><img  src="{{asset("url/img/icon-map.png")}}">ดูแผนที่</button></a></div></center></div></div><div class="col-md-7 d-none d-sm-block">'+data.location+'</div></div>');
            console.log(data);
        });
    });
</script>
@endsection
