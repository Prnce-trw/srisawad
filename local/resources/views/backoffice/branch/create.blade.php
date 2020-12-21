@extends('backoffice.layouts.master')
@section('title')
Dashboard
@endsection
@section('css')

@endsection
@section('content')
@php
$active = 'branch';
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
                                            <div class="panel-heading">เพิ่มสาขา</div>
                                            <div class="panel-body">
                                                <form action="{{ url('/branch/create/') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    ข้อหัว:
                                                    <br />
                                                    <input class="form-control" type="text" name="name" />
                                                    <br /><br />
                                                    รายละเอียด:
                                                    <br />
                                                    <textarea class="form-control" name="detail"></textarea>
                                                    <br /><br />
                                                    เบอร์โทร:
                                                    <br />
                                                    <input class="form-control" type="text" name="tel" />
                                                    <br /><br />

                                                    แผนที่ (ลิ้ง):
                                                    <br />
                                                    <input class="form-control" type="text" name="location_link" />
                                                    <br /><br />

                                                    แผนที่ (iframe):
                                                    <br />
                                                    <input class="form-control" type="text" name="location" />
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