@extends('backoffice.layouts.master')
@section('title')
การจัดการบทความ
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
                            การจัดการแบนเนอร์บทความ


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
                                                        <th width="10%">
                                                            หัวข้อ
                                                        </th>

                                                        <th>
                                                            รายละเอียดหัวข้อ
                                                        </th>

                                                        <th>
                                                            รายละเอียดเนื้อหา
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

                                                    @foreach ($articlebanner as $product)


                                                    <tr>
                                                        <td width="10%">

                                                            {{$product->name}}


                                                        </td>



                                                        <td>

                                                            {{$product->name_detail}}

                                                        </td>

                                                        <td>

                                                            {{$product->detail}}

                                                        </td>


                                                        <td>

                                                            <img src="{{ asset('local/storage/picture_articlebanner/'.$product->image) }}"
                                                                width="80" height="80">

                                                        </td>

                                                        <td>

                                                            <a title="แก้ไข"
                                                                href="{{url('editarticlebanner',$product)}}"
                                                                class="btn btn-success btn-sm"><i
                                                                    class="fa fa-pencil"></i>edit</a>




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
