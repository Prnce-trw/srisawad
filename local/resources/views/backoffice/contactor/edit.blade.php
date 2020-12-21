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
                                            <div class="panel-heading">แก้ไขติดต่อกับเรา</div>
                                            <div class="panel-body">
                                                <form action="{{ url('updatecontactors') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="{{ $contactor->id }}">

                                                    หัวข้อ:
                                                    <br />

                                                    <input class="form-input amount-mic" type="text" id="amount-mic"
                                                        name="name" value="{{ $contactor->name }}">



                                                    <br /><br />

                                                    อัพรูปแบนเนอร์รูป:  <span style="color:red;">*ขนาดรูป 1272 x 489 pixel</span>
                                                    <br /><img
                                                        src="{{ asset('local/storage/picture_contactor/'.$contactor->image2) }}"
                                                        width="200" height="200">
                                                    <input type="file" class="form-control" name="image" />
                                                    <br /><br />



                                                    ชื่อบริษัท:
                                                    <br />
                                                    <input class="form-control" type="text" name="name_company"
                                                        value="{{ $contactor->name_company }}">
                                                    <br /><br />

                                                    รายละเอียดบริษัท:
                                                    <br />

                                                    <textarea class="form-control"
                                                        name="address_company">{{ $contactor->address_company }}</textarea>

                                                    <br /><br />

                                                    อัพรูปบริษัท:  <span style="color:red;">*ขนาดรูป 496 x 335 pixel</span>
                                                    <br /><img
                                                        src="{{ asset('local/storage/picture_contactorcompany/'.$contactor->image1) }}"
                                                        width="200" height="200">
                                                    <input type="file" class="form-control" name="image1" />
                                                    <br /><br />


                                                    อีเมลล์:
                                                    <br />

                                                    <textarea class="form-control"
                                                        name="email">{{ $contactor->email }}</textarea>

                                                    <br /><br />

                                                    ศูนย์บริการลูกค้า:
                                                    <br />

                                                    <textarea class="form-control"
                                                        name="service">{{ $contactor->service }}</textarea>

                                                    <br /><br />

                                                    เว็บไซต์:
                                                    <br />
                                                    <textarea class="form-control"
                                                        name="web">{{ $contactor->web }}</textarea>
                                                    <br /><br />

                                                    แผนที่:
                                                    <br />
                                                    <textarea class="form-control" name="map">{{ $contactor->map }}</textarea>
                                                    <br /><br />

                                                    ติดต่อสอบถาม:
                                                    <br />
                                                    <input class="form-control" type="text" name="contact"
                                                        value="{{ $contactor->contact }}">
                                                    <br /><br />

                                                    สถานะการส่ง Email
                                                    <br />
                                                    <input type="checkbox"  name="status" class="js-single" {{$contactor->status == 1 ? 'checked' : ''}} />
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