@extends('backoffice.layouts.master')
@section('title')
การจัดการแบนเนอร์
@endsection
@section('css')

@endsection
@section('content')
@php
$active = 'regis';
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
                            รายการข้อมูลการสมัครสินเชื่อ
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
                                                        <th class="text-center">เลขบัตรประชาชน</th>
                                                        <th class="text-center">เบอร์โทรศัพท์</th>
                                                        <th class="text-center">จังหวัด</th>
                                                        <th class="text-center">อาชีพ</th>
                                                        <th class="text-center">เงินเดือน</th>
                                                        <th class="text-center">เริ่มทำงาน</th>
                                                        <th class="text-center">จัดการ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($registers as $key => $register)
                                                    <tr>
                                                        <td class="text-center">{{++$key}}</td>
                                                        <td class="text-center">{{$register->cd_name." ".$register->cd_lastname}}</td>
                                                        <td class="text-center">{{$register->cd_card}}</td>
                                                        <td class="text-center">{{$register->cd_tel}}</td>
                                                        <td class="text-center">{{$register->cd_province}}</td>
                                                        <td class="text-center">{{$register->cd_jobs}}</td>
                                                        <td class="text-center">{{$register->cd_salary}}</td>
                                                        <td class="text-center">{{$register->cd_month.'  '.$register->cd_year   }}</td>
                                                        <td class="text-center">
                                                           
                                                            <form action="{{ url('registerdel') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                {!! csrf_field() !!}
                                                                <input type="hidden" name="id"
                                                                    value="{{ $register->cd_id }}">

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



@endsection