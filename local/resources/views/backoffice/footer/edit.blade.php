@extends('backoffice.layouts.master')
@section('title')
Dashboard
@endsection
@section('css')

@endsection
@section('content')
@php
$active = 'footer';
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
                                            <div class="panel-heading">อัพเดตข้อมูลfoot</div>
                                            <div class="panel-body">



                                                <form action="{{ url('updatefooter')}}" method="post"
                                                    enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="{{ $footer->id }}">

                                                    รายละเอียด:
                                                    <br />
                                                    <textarea class="form-control"
                                                        name="detail">{{ $footer->detail }}</textarea>
                                                    <br /><br />
                                                    อีเมลล์:
                                                    <br />


                                                    <input class="form-control" type="text" name="email"
                                                        value="{{ $footer->email }}">
                                                    <br /><br />
                                                    เบอร์โทร:
                                                    <br />
                                                    <input class="form-control" type="text" name="tel"
                                                        value="{{ $footer->tel }}">
                                                    <br /><br />
                                                    แผนที่:
                                                    <br />
                                                    <input class="form-control" type="text" name="location"
                                                        value="{{ $footer->location }}">
                                                    <br /><br />
                                                    วันเวลาเปิด - ปิด:
                                                    <br />
                                                    <input class="form-control" type="text" name="opencolse"
                                                        value="{{ $footer->opencolse }}">
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

@endsection