@extends('backoffice.layouts.master')
@section('title')
การจัดการแบนเนอร์
@endsection
@section('css')

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
                            การจัดการแบนเนอร์


                            <!---------------- ตารางการจัดการ ----->
                            <br>
                            <br>
                            <a class="btn btn-primary btn-sm" href="{!! route('banner.create') !!}"><i
                                    class="fa fa-plus"></i>&nbsp;สร้าง</a>

                            <br><br>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered table-striped">

                                                <thead>
                                                    <tr>
                                                        <th width="30%">
                                                            หัวข้อ
                                                        </th>
                                                        <th width="30%">
                                                            รายละเอียด
                                                        </th>
                                                        <th>
                                                            รูป
                                                        </th>

                                                        <th class="text-center">
                                                            จัดการ
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    @foreach ($banners as $product)

                                                    <tr>
                                                        <th>
                                                            {{$product->name}}
                                                            </td>
                                                        <td>
                                                            {{$product->detail}}

                                                        </td>
                                                        <td>
                                                            @if ($product->image)
                                                            <img src="{{ asset('local/storage/picture/'.$product->image) }}"
                                                                width="80" height="50">
                                                            @else
                                                            No image available
                                                            @endif
                                                        </td>
                                                        <td>

                                                            <a title="แก้ไข" href="{{url('editbanners',$product)}}"
                                                                class="btn btn-success btn-sm"><i class="fas fa-edit"></i>edit</a>
                                                            <form action="{{ url('delete') }}" method="post"
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

@endsection
@section('js')

@endsection