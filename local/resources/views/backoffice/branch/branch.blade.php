@extends('backoffice.layouts.master')
@section('title')
การจัดการแบนเนอร์
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
                            การจัดการสาขา

                            <br>
                            <br>
                            <!---------------- ตารางการจัดการ ----->
                            <a class="btn btn-primary btn-sm" href="{!! route('branch.create') !!}"><i
                                    class="fa fa-plus"></i>&nbsp;สร้าง</a>

                            <br>
                            <br>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th width="10%" class="text-center">
                                                            หัวข้อ
                                                        </th>
                                                        <th width="10%">
                                                            รายละเอียด
                                                        </th>
                                                        <th  width="10%" class="text-center">
                                                            เบอร์โทร
                                                        </th>

                                                        <th width="20%" class="text-center">
                                                            แผนที่ (ลิ้ง) 
                                                        </th>
                                                        <th width="20%" class="text-center">
                                                            แผนที่ (iframe) 
                                                        </th>
                                                        <th class="text-center">
                                                            จัดการ
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($branch as $product)
                                                    <tr>
                                                        <td style=" white-space: nowrap;" class="text-left">
                                                            {{$product->name}}
                                                        </td>
                                                        <td style=" white-space: nowrap;" class="text-left">
                                                            {!!$product->detail!!}
                                                        </td>
                                                        <td style=" white-space: nowrap;" class="text-center">
                                                            {{$product->tel}}
                                                        </td>
                                                        <td style=" white-space: nowrap;" class="text-left">
                                                            {!!$product->link!!}
                                                        </td>
                                                        <td style=" white-space: nowrap;" class="text-left">
                                                            {{$product->location}}
                                                        </td>
                                                        <td  style=" white-space: nowrap;" class="text-center">

                                                            <a title="แก้ไข" href="{{url('editbranch',$product)}}"
                                                                class="btn btn-success btn-sm"><i
                                                                    class="fas fa-edit"></i>edit</a>



                                                            <form action="{{ url('delbranch') }}" method="post"
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