@extends('backoffice.layouts.master')
@section('title')
การจัดการบทความ
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
                            การจัดการวิสัยทัศ


                            <!---------------- ตารางการจัดการ ----->
                            <br>
                            <br>
                            <a class="btn btn-primary btn-sm" href="{!! route('vision.create') !!}"><i
                                    class="fa fa-plus"></i>&nbsp;สร้าง</a>
                                <br><br>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th width="15%">
                                                            หัวข้อ
                                                        </th>



                                                        <th class="text-center" width="30%">
                                                            รายละเอียดเนื้อหา
                                                        </th>
                                                        <th  class="text-center" width="30%">
                                                            รายละเอียดเนื้อหา2
                                                        </th>
                                                        <th class="text-center">
                                                            รูป
                                                        </th>

                                                        <th  width="10%" class="text-center">
                                                            จัดการ
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($vision as $product)


                                                    <tr>
                                                        <td width="10%">{{$product->name}} </td>

                                                        <td>{{$product->detail}} </td>
                                                        <td>{{$product->detail2}} </td>

                                                        <td>

                                                            <img src="{{ asset('local/storage/picture_vision/'.$product->image) }}"
                                                                width="150" height="80">

                                                        </td>

                                                        <td>

                                                            <a title="แก้ไข" href="{{url('editvision',$product)}}"
                                                                class="btn btn-success btn-sm"><i class="fas fa-edit"></i>edit</a>

                                                            <form action="{{ url('delvision') }}" method="post"
                                                                enctype="multipart/form-data">

                                                                {!! csrf_field() !!}
                                                                <input type="hidden" name="id"
                                                                    value="{{ $product->id }}">

                                                                <button type="submit"
                                                                    onclick="deleteRow('{!! $product->id !!}')"
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