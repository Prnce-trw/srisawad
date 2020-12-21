@extends('backoffice.layouts.master')
@section('title')
การจัดการแบนเนอร์
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/switchery/css/switchery.min.css')}}">
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
                            รายการข้อมูลการติดต่อ
                            <!---------------- การจัดการสินเชื่อส่วนบุคคล ----->
                            <br>
                            <br>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered table-striped" id="myTable">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">ชื่อ - นามสกุล</th>
                                                        <th class="text-center">สถานะสมาชิก</th>
                                                        <th class="text-center">เรื่อง</th>
                                                        <th class="text-center">เบอร์โทรศัพท์</th>
                                                        <th class="text-center">อีเมล์</th>
                                                        <th class="text-center">เนื้อหา</th>
                                                        <th class="text-center">จัดการ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($contacts as $key => $contact)
                                                    <tr>
                                                        <td class="text-center">{{++$key}}</td>
                                                        <td class="text-center">{{$contact->ct_name." ".$contact->ct_lastname}}</td>
                                                        <td class="text-center">{{$contact->ct_status}}</td>
                                                        <td class="text-center">{{$contact->ct_subject}}</td>
                                                        <td class="text-center">{{$contact->ct_tel}}</td>
                                                        <td class="text-center">{{$contact->ct_email}}</td>
                                                        <td class="text-center">{{$contact->ct_content}}</td>
                                                        <td class="text-center">
                                                           
                                                            <form action="{{ url('contactdel') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                {!! csrf_field() !!}
                                                                <input type="hidden" name="id"
                                                                    value="{{ $contact->ct_id }}">

                                                                <button type="submit" onclick=""
                                                                    class="btn btn-danger btn-sm">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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
</div>

@endsection
@section('js')

 <!-- Switch component js -->
 <script  src="{{asset('files/bower_components/switchery/js/switchery.min.js')}}"></script>
 <script  src="{{asset('files/assets/pages/advance-elements/swithces.js')}}"></script>

@endsection