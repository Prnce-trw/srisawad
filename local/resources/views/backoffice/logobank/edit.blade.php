@extends('backoffice.layouts.master')
@section('title')
Dashboard
@endsection
@section('css')

@endsection
@section('content')
@php
$active = 'typecredits';
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
                                            <div class="panel-heading">แก้ไขสินเชื่อส่วนบุคคล</div>
                                            <div class="panel-body">
                                                <form action="{{ url('updatelogobank') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="{{ $logobank->id }}">

                                                    ไฟล์เอกสาร:<a
                                                        href="{{ asset('local/storage/pdf_files/'.$logobank->upload_file) }}"
                                                        target="_blank">ดาวน์โหลด</a>
                                                    <br />
                                                    <input class="form-control" type="file" name="upload_file"
                                                        id="file">
                                                    <br /><br />

                                                    อัพรูป: <span style="color:red;">*ขนาดรูป 115 x 95 pixel</span>
                                                    <br /><img
                                                        src="{{ asset('local/storage/picture_logobank/'.$logobank->image) }}">
                                                    <input type="file" class="form-control" name="image" />
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