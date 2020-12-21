@extends('backoffice.layouts.master')
@section('title')
การจัดการเป้าหมายบริษัท
@endsection
@section('css')

@endsection
@section('content')
@php
$active = 'target';
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
                            การจัดการเกี่ยวกับเรา

                            <!---------------- ตารางการจัดการ ----->
                            <br>
                            <br>
                            <a class="btn btn-primary btn-sm" href="{!! route('target.create') !!}"><i
                                    class="fa fa-plus"></i>&nbsp;สร้าง</a>

                                <br><br>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" width="15%">
                                                            หัวข้อ
                                                        </th>
                                                        <th class="text-center" width="50%">
                                                            รายละเอียด
                                                        </th>
                                                        <th class="text-center">
                                                            อัพรูป
                                                        </th>

                                                        <th width="10%" class="text-center">
                                                            จัดการ
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($target as $product)


                                                    <tr>
                                                        <td width="10%">


                                                            {{$product->name}}
                                                        </td>
                                                        <td class="text-left">


                                                            {{$product->detail}}

                                                        </td>
                                                        <td>

                                                            <img src="{{ asset('local/storage/picture_target/'.$product->image) }}"
                                                                width="100" height="80">

                                                        </td>

                                                        <td>

                                                            <a title="แก้ไข" href="{{url('edittarget',$product)}}"
                                                                class="btn btn-success btn-sm"><i class="fas fa-edit"></i>edit</a>

                                                            <form action="{{ url('del_target') }}" method="post"
                                                                enctype="multipart/form-data">

                                                                {!! csrf_field() !!}
                                                                <input type="hidden" name="id"
                                                                    value="{{ $product->id }}">

                                                                <button type="submit" onclick=""
                                                                    class="btn btn-danger btn-sm">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>

                                                            </form>


                                                        </td>
                                                    </tr>



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