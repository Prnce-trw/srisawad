@extends('backoffice.layouts.master')
@section('title')
การจัดการติดต่อกับเรา
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
                            การจัดการติดต่อกับเรา

                            <!---------------- ตารางการจัดการ ----->
                            <br>
                            <br>


                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th width="10%"> หัวข้อแบนเนอร์</th>
                                                        <th width="10%"> แบนเนอร์</th>
                                                        <th> ชื่อบริษัท</th>
                                                        <th> รูปบริษัท</th>
                                                        <th> ที่อยู่บริษัท</th>
                                                        <th> อีเมล</th>
                                                        <th> ศูนย์บริการลูกค้า</th>
                                                        <th> เว็บไซต์</th>
                                                        <th> ติดต่อสอบถาม</th>
                                                        <th class="text-center">จัดการ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($contactor as $product)
                                                    <tr>
                                                        <td width="10%">{{$product->name}}</td>
                                                        <td width="10%"><img
                                                                src="{{ asset('local/storage/picture_contactor/'.$product->image) }}"
                                                                alt="" width="80" height="80"></td>
                                                        <td width="10%">{{$product->name_company}}</td>
                                                        <td width="10%"><img
                                                                src="{{ asset('local/storage/picture_contactorcompany/'.$product->image) }}"
                                                                alt="" width="80" height="80"></td>
                                                        <td>{{$product->address_company}}</td>
                                                        <td>{{$product->email}}</td>
                                                        <td>{{$product->service}}</td>
                                                        <td>{{$product->web}}</td>
                                                        <td>{{$product->contact}}</td>

                                                        <td><a title="แก้ไข" href="{{url('editcontactor',$product)}}"
                                                                class="btn btn-success btn-sm"><i
                                                                    class="fa fa-pencil"></i>edit</a>
                                                            <form action="{{ url('delcontactor') }}" method="post"
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
