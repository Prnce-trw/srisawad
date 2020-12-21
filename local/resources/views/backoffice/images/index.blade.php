@extends('backoffice.layouts.master')
@section('title')
การจัดการแบนเนอร์
@endsection
@section('css')

@endsection
@section('content')
@php
$active = 'images';
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
                            การจัดการรูปภาพ
                            <!---------------- ตารางการจัดการ ----->
                            <br>
                            <br>
                            <a class="btn btn-primary btn-sm" href="{!! url('backoffice/images/create') !!}"><i
                                    class="fa fa-plus"></i>&nbsp;สร้าง</a>

                            <br><br>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            ลิ้ง
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
                                                    @foreach ($images as $image)
                                                     <tr>
                                                       <td width="10%">
                                                            {{asset('').'local/storage/'.$image->im_link}}
                                                        </td>
                                                         <td>
                                                            <img src="{{ asset('local/storage/picture_images/'.$image->im_path) }}"
                                                                alt="" width="80" height="80">
                                                        </td>
                                                        <td>
                                                            <a title="แก้ไข" href="{{url('/backoffice/images/edit',$image->im_id)}}"
                                                                class="btn btn-success btn-sm"><i
                                                                    class="fas fa-edit"></i>edit</a>
                                                            <form action="{{ url('/backoffice/images/delete/'.$image->im_id) }}" method="post"
                                                                enctype="multipart/form-data">

                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $image->im_id }}">

                                                                <button type="submit"
                                                                    onclick="deleteRow('{!! $image->im_id !!}')"
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
