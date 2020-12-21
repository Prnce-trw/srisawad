@extends('layouts.master')
@section('title')
SRISAWAD CAPITAL
@endsection
@section('css')
<style>
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

.slider-area .slider-active .owl-dots button {
    width: 15px;
    height: 15px;
    background: transparent;
    display: block;
    margin: 13px 8px;
    border-radius: 50%;
    border: 2px solid #fff;
    float: left;
}

.slider-area .slider-active .owl-dots button.active {
    background: #fff;
}
   <?php
  $i = 1;
 foreach($banners as $product){
        if($product->image){  
            $product->image = $product->image;
             }
             else
             {
              $product->image = 'download.jpg'; }
    ?>
     .bg-img-{{$i}}{
                            background-image:url({{ asset('local/storage/picture/'.$product->image) }});
                        }
                    <?php $i++;  } ?>
    
</style>

@endsection
@section('content')
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



<!-- slider-area-start -->
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <?php $j = 1; ?>
        @foreach ($banners as $product)
        <div class="single-slider bg-img-{{$j}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 offset-xl-1 col-lg-12">
                        <div class="slider-content">
                            <h3>{{$product->name}}</h3>
                            <!--<p>{{$product->detail}}</p>-->
                            <center>
                                <!--<div class="slider-btn">-->
                                <!--    <a class="boxed-btn2" href="#">อ่านต่อ<i-->
                                <!--            class="Flaticon flaticon-right-arrow"></i></a>-->
                                <!--</div>-->
                            </center>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <?php $j++; ?>
        @endforeach

    </div>
</div>

<!-- service-area-start -->
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
                        <img src="{{url('local/storage/picture_credits').'/'.$credits->image}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    @foreach ($detailcredits as $product)
                    <div class="col-xl-6 col-md-6">
                        <img src="{{url('local/storage/picture_detailcredit').'/'.$product->image}}" alt="">
                        <div class="section">
                            <h3 class="icon-top">   = {{$product->name}}</h3>
                            <p class="icon-top"> {{$product->detail}}</p>
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
                <br><br>
                <div class="row">
                    <div class="col-12 col-md-6 text-center">
                            <a class="boxed-btn4" href="{{url('searchcredits',$credits->type_id)}}" id="myBtn">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
               
                </div>
            </div>
        </div>
    </div>
</div>
@if((count($new) != 0) || (count($article) != 0))
    <div class="service-area2">
        @if(count($new) != 0)
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="section-title text-center mb-65">
                    <h3>ข่าวสารบริษัท</h3>
                    <p class="text-size">{{$newbanner->detail}}</p>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach ($new as $product)
                    <div class="col-xl-4 col-md-4" style="width: 100%; max-width: 100%;">
                        <div class="item">
                            <div class="single-service2">
                                <div class="service-thumb">
                                    <img class="img-size" src="{{ asset('local/storage/picture_new/'.$product->image) }}"
                                        alt="">
                                </div>
                                <p class="font-pad">{{$product->name}}</p>
                                <p class="font-pad2">{{strip_tags($product->detail)}}</p>
                                <div class="slider-btn">
                                    <a class="boxed-btn3" href="{{url('readnews',$product->id)}}">อ่านต่อ <i
                                            class="Flaticon flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- <span type="" role="presentation" class="owl-prev" id="customPrevBtn">
                    <img src="{{asset('url/img/but-left.png')}}" class="practice-arrow prod-left">
                </span>
                <span type="" role="presentation" class="owl-next" id="customNextBtn">
                    <img src="{{asset('url/img/but-right.png')}}" class="practice-arrow prod-right">
                </span> --!>
            </div>
            <br/>
            <center>
                <div class="slider-btn">
                <a class="boxed-btn2" href="{{url('news')}}">เพิ่มเติม <i class="Flaticon flaticon-right-arrow"></i></a>
                </div>
            </center>
             <br/>
        </div>
        @endif


        @if(count($article) != 0)
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="section-title text-center mb-65">
                    <h3>บทความ</h3>
                    <p class="text-size">{{$articlebanner->detail}}</p>

                </div>
            </div>

            <div class="row">
                <div class="owl-carousel2 owl-theme">
                     @foreach ($article as $product)
                <div class="col-xl-4 col-md-4" style="width: 100%; max-width: 100%;">
                    <div class="item">

                        <div class="single-service2">
                            <div class="service-thumb">
                                <img class="img-size"
                                    src="{{ asset('local/storage/picture_article/'.$product->image) }}" alt="">
                            </div>
                            <p class="font-pad">{{$product->name}}</p>
                            <p class="font-pad2"> {{strip_tags($product->detail)}}</p>
                            <div class="slider-btn">
                                <a class="boxed-btn3" href="{{url('readarticle',$product->id)}}">อ่านต่อ <i
                                        class="Flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
                <!-- <span type="" role="presentation" class="customPrevBtn2" id="owl-prev">
                    <img src="{{asset('url/img/but-left.png')}}" class="practice-arrow prod-left">
                </span>
                <span type="" role="presentation" class="customNextBtn2" id="owl-next">
                    <img src="{{asset('url/img/but-right.png')}}" class="practice-arrow prod-right">
                </span> --!>
            </div>
            <br/>
            <center>
                <div class="slider-btn">
                <a class="boxed-btn2" href="{{url('article')}}">เพิ่มเติม <i class="Flaticon flaticon-right-arrow"></i></a>
                </div>
            </center>
             <br/>
        </div>
        @endif
    </div>

@endif
    @endsection
    @section('js')
    <script>
         $(".owl-dot").hide();
    </script>
   
    @endsection