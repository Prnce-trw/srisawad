@extends('backoffice.layouts.master')
@section('title')
การจัดการแบนเนอร์
@endsection
@section('css')

@endsection
@section('content')
@php
$active = 'footer';
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
                            การจัดการfooter


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
                                                        <th class="text-center" width="40%">
                                                            รายละเอียด
                                                        </th>
                                                        <th class="text-center" width="10%">
                                                            อีเมล
                                                        </th>
                                                        <th class="text-center" width="15%">
                                                            เบอร์โทร
                                                        </th>

                                                        <th class="text-center">
                                                            ตำแหน่งแผนที่
                                                        </th>

                                                        <th class="text-center">
                                                            จัดการ
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($footer as $product)
                                                    <tr>
                                                        <td >
                                                            {{$product->detail}}
                                                        </td>
                                                        <td>
                                                            {{$product->email}}
                                                        </td>
                                                        <td>

                                                            {{$product->tel}}

                                                        </td>

                                                        <td>
                                                            {{$product->location}}

                                                        </td>



                                                        <td>

                                                            <a title="แก้ไข" href="{{url('editfooter',$product)}}"
                                                                class="btn btn-success btn-sm"><i
                                                                    class="fas fa-edit"></i>edit</a>



                                                            <form action="{{ url('delfooter') }}" method="post"
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