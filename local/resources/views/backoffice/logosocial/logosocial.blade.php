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
                            การจัดการโซเชี่ยล


                            <!---------------- ตารางการจัดการ ----->
                            <br>
                            <br>
                            <a class="btn btn-primary btn-sm" href="{!! route('logosocial.create') !!}"><i
                                    class="fa fa-plus"></i>&nbsp;สร้าง</a>

                            <br><br>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" width="25%">
                                                            หัวข้อ
                                                        </th>
                                                        <th class="text-center" width="25%">
                                                            รายละเอียด
                                                        </th>
                                                        <th class="text-center">
                                                            รูป
                                                        </th>

                                                        <th width="10%" class="text-center">
                                                            จัดการ
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($logosocial as $product)


                                                    <tr>
                                                        <td width="10%">

                                                            {{$product->name}}


                                                        </td>
                                                        <td width="10%">

                                                            {{$product->detail}}



                                                        </td>
                                                        <td>

                                                            <img src="{{ asset('local/storage/picture_logosocial/'.$product->image) }}"
                                                                alt="" width="80" height="80">

                                                        </td>

                                                        <td>

                                                            <a title="แก้ไข" href="{{url('editlogosocial',$product)}}"
                                                                class="btn btn-success btn-sm"><i
                                                                    class="fas fa-edit"></i>edit</a>



                                                            <form action="{{ url('dellogosocial') }}" method="post"
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



                                <script>
                                    function deleteRow(id) {
                                        var r = confirm("ต้องการลบข้อมูลใช่หรือไม่");
                                        if (r) {
                                            $("#formDelete" + id).submit();
                                        }
                                    }
                                </script>


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