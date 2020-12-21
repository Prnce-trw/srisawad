@extends('backoffice.layouts.master')
@section('title')
Dashboard
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/switchery/css/switchery.min.css')}}">
@endsection
@section('content')
@php
$active = 'banner';
@endphp
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-12 text-center">


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel panel-default">
                                            <div class="row">
                                                <div class="col-12">
                                                    @if(\Session::has('status'))
                                                    <div class="alert alert-success border-success"
                                                        style="margin-bottom:0px;">
                                                        <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                            <i class="icofont-close-line-circled"></i>
                                                        </button>
                                                        {{ \Session::get('status') }}
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="panel-heading">แก้ไขแบนเนอร์สมัครสินเชื่อ</div>
                                            <div class="panel-body">
                                                <form action="{{ url('updatelogomember')}}" method="post"
                                                    enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="{{ $logomember->id }}">

                                                    หัวข้อ:
                                                    <br />
                                                    <input class="form-control" type="text" name="name"
                                                        value="{{ $logomember->name }}">
                                                    <br /><br />
                                                    รายละเอียด:
                                                    <br />

                                                    <textarea class="form-control"
                                                        name="detail">{{ $logomember->detail }}</textarea>

                                                    <br /><br />
                                                    อัพรูป:   <span style="color:red;">*ขนาดรูป 1272 x 489 pixel</span>
                                                    <br /><img
                                                        src="{{ asset('local/storage/picture_logomember/'.$logomember->image) }}"
                                                        width="200" height="200">
                                                    <input type="file" class="form-control" name="image" />
                                                    <br /><br />
                                                    สถานะการส่งอีเมล์:
                                                    <br />
                                                    <input type="checkbox"  name="status" class="js-single" {{$logomember->status == 1 ? 'checked' : ''}} />
                                                    <br /><br />
                                                    <input class="btn btn-primary" type="submit" value="Save" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<!-- Switch component js -->
<script  src="{{asset('files/bower_components/switchery/js/switchery.min.js')}}"></script>
<script  src="{{asset('files/assets/pages/advance-elements/swithces.js')}}"></script>
@endsection