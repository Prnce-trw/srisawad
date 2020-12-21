@extends('layouts.master')
@section('title')
SRISAWAD CAPITAL
@endsection
@section('css')
<style>
        .head-bar{
            font-family: 'prompt',sans-serif;
            font-size: 14px;
        }
        .social-links {
            float: right;
        }
        .footer-area .copyright_part_text p {
            color: #f9f9ff;
            font-size: 16px;
            font-weight: 400;
            font-family: 'prompt',sans-serif;
        }
        .footer-area .copyright_part_text {
            background-color: #003082;
            padding: 21px 15px;
            margin-top: 60px;
        }
        @media (max-width: 320px) and (min-width: 120px){
          .social-links {
            float: none;
        }
        }
        @media (max-width: 376px) and (min-width: 321px){
            .social-links {
            float: none;
        }
        }
        @media (max-width: 639px) and (min-width: 376px){
            .social-links {
            float: none;
        }
        }
        @media (max-width: 1024px) and (min-width: 959px){
        
        .img-cen{
        margin-left: 16%!important;
        }
        
        }
        
        @media (max-width: 960px) and (min-width: 640px){
            .img-cen{
        margin-left: 16%!important;
        }
        }
        
            .active {
                color: #9c122c;
            }
            #active{
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
        
        .pagination a:hover:not(.active) {background-color: #ddd;}
        .line-about{
            opacity: 1;
            transform: scaleX(1);
            position: absolute;
            background: #721c24;
            width: 7%;
            height: 3px;
            bottom: 0;
            transition: .3s;
        }
        #pad-about-us{
            padding: 20px 1px 1px 15px;
        }
        .menu-about{
            padding: 0px 40px 0px 0px;
            font-family: 'prompt',sans-serif;
        }
        #line-con{
            box-shadow: #ccc 0px 2px 0px 0px;
            margin-bottom: 2px;
        }
        .img-cen{
            margin-left: 30%;
        }
        .about-color{
            color: #9c122c;
        }
        .about-h3-color{
            color: #013799;
            font-family: 'prompt',sans-serif;
            padding-bottom: 20px;
        }
        .content-about{
            font-family: 'prompt',sans-serif;
            font-size: 16px;
            padding-bottom: 40px;
            text-align: justify;
        }
        @media (max-width: 639px) and (min-width: 376px){
            .img-cen {
            margin-left: 10%;
            width: 80%;
            height: 200px;
            object-fit: cover;
        }
        .content-about {
            font-family: 'prompt',sans-serif;
            font-size: 16px;
            padding-bottom: 40px;
            text-align: justify;
            padding: 0px 20px 0px 20px;
        }
        .about-h3-color {
            color: #013799;
            font-family: 'prompt',sans-serif;
            padding-bottom: 20px;
            padding: 0px 20px 0px 20px;
        }
        
        }
        @media (max-width: 376px) and (min-width: 321px){
            
            .img-cen {
            margin-left: 10%;
            width: 80%;
            height: 200px;
            object-fit: cover;
        }
        .content-about {
            font-family: 'prompt',sans-serif;
            font-size: 16px;
            padding-bottom: 40px;
            text-align: justify;
            padding: 0px 20px 0px 20px;
        }
        .about-h3-color {
            color: #013799;
            font-family: 'prompt',sans-serif;
            padding-bottom: 20px;
            padding: 0px 20px 0px 20px;
        } 
        .menu-about {
            padding: 0px 40px 0px 0px;
            font-family: 'prompt',sans-serif;
            font-size: 14px;
        }
        
        
        }
        @media (max-width: 320px) and (min-width: 120px){
            .img-cen {
            margin-left: 10%;
            width: 80%;
            height: 200px;
            object-fit: cover;
        }
        .content-about {
            font-family: 'prompt',sans-serif;
            font-size: 16px;
            padding-bottom: 40px;
            text-align: justify;
            padding: 0px 20px 0px 20px;
        }
        .about-h3-color {
            color: #013799;
            font-family: 'prompt',sans-serif;
            padding-bottom: 20px;
            padding: 0px 20px 0px 20px;
        } 
        .menu-about {
            padding: 0px 10px 0px 0px;
            font-family: 'prompt',sans-serif;
            font-size: 13px;
        }
        
        }
        
        </style>

@endsection
@section('content')



<div class="service-area2">

        <div class="container">

            <div class="row">
                <div class="col-12 text-center">
                        <img src="{{url('local/storage/picture_article').'/'.$new->image}}" class="img-fluid">
                </div>
              
              
            </div>

        </div>
        <br>
        <div class="container">
            <div class="row">
                    <div class="col-12">
                            <h4 class="about-h3-color">{{$new->name}}</h4>
                <p style="text-indent: 10%"><span>{!!$new->detail!!}</p>
                </div>
            </div>
                    </div>
          
    </div>
@endsection
@section('js')

@endsection