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

<?php
  $i = 1;
 foreach($newbanner as $product){
        if($product->image){  
            $product->image = $product->image;
             }
             else
             {
              $product->image = 'download.jpg'; }
    ?>
     .bg-image-{{$i}}{
                            background-image:url({{ asset('local/storage/picture_newbanner/'.$product->image) }});
                        }
                    <?php $i++;  } ?>
</style>


@endsection
@section('content')

<div class="slider-area-head">
    <?php $j = 1; ?>
 @foreach ($newbanner as $product)
    <div class="single-slider-head bg-image-{{$j}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <center>
                        <div class="slider-content">
                            <h3>{{$product->name}}</h3>
                            <a href="index.html" style="color: #fff;">
                                <p>หน้าแรก
                            </a> / <span class="color-text"> {{$product->name_detail}}</span></p>
                                
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
        <div class="row align-items-center justify-content-center">
            <div class="section-title text-center mb-65">
                <h3>{{$product->name}}</h3>
                <p class="text-size">{{$product->detail}}</p>
            </div>
        </div>
        <div class="container">
                <div class="row">
                    @foreach ($new as $product)
                    <div class="col-xl-4 col-md-4" style="width: 100%; max-width: 100%;margin-bottom:30px;" >
                        <div class="item">
                            <div class="single-service2">
                                <div class="service-thumb">
                                    <img class="img-size" src="{{ asset('local/storage/picture_new/'.$product->image) }}" alt="">
                                </div>
                                <p class="font-pad">{{$product->name}}</p>
                                <p class="font-pad2">{!! strip_tags($product->detail)!!}</p>
                                <div class="slider-btn">
                                    <a class="boxed-btn3" href="{{url('readnews',$product->id)}}">อ่านต่อ <i
                                            class="Flaticon flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <br>
            <center>
                {{ $new->links('paganation') }} 
            </center>
    </div>
</div>

    @endsection
    @section('js')

    @endsection
