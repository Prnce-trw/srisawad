@extends('backoffice.layouts.master')
@section('title')
Dashboard
@endsection
@section('css')

@endsection
@section('content')
@php
$active = 'typecredits';
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


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel panel-default">
                                            <div class="row">
                                                <div class="col-12">
                                                    @if(\Session::has('status'))
                                                    <div class="alert alert-success border-success"
                                                        style="margin-bottom:0px;">
                                                        <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                            <i class="icofont-close-line-circled"></i>
                                                        </button>
                                                        {{ \Session::get('status') }}
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="panel-heading">แก้ไขสินเชื่อส่วนบุคคล</div>
                                            <div class="panel-body">
                                                <form action="{{ url('update_credits') }}" id="creditsForm"
                                                    method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="{{ $credits->id }}">


                                                    <br /><br />
                                                    <h5>ประเภท:</h5>
                                                    <br />
                                                    <div class="form-group">
                                                        <select class="form-control" id="creditstype"
                                                            name="creditstype">
                                                            @foreach ($typecredits as $creditstype)
                                                            @if($creditstype->id == $credits->credittype_id)
                                                            <option selected value="{{$creditstype->id}}">
                                                                {{$creditstype->name}}</option>
                                                            @else
                                                            <option value="{{$creditstype->id}}">{{$creditstype->name}}
                                                            </option>
                                                            @endif
                                                            @endforeach
                                                        </select>

                                                    </div>




                                                    <br /><br />


                                                    <h5>หัวข้อ:</h5>
                                                    <br />
                                                    <br>

                                                    @foreach($detailcredit as $d)
                                                    @if(strpos($credits->name_credit, '"'.$d->id.'"'))
                                                    <label><input id="name_credit" name="name_credit" checked
                                                            type="checkbox" value="{{$d->id}}" /> {{$d->name}}</label>
                                                    @else
                                                    <label><input id="name_credit" name="name_credit" type="checkbox"
                                                            value="{{$d->id}}" /> {{$d->name}}</label>
                                                    @endif
                                                    <br>
                                                    @endforeach
                                                    <br /><br />





                                                    <br /><br />
                                                    <h5>คุณสมบัติ:</h5>
                                                    <br />
                                                    <br>

                                                    @foreach($qualification as $qft)
                                                    @if(strpos($credits->qualification_id, '"'.$qft->id.'"'))
                                                    <label><input id="qualification" name="qualification" checked
                                                            type="checkbox" value="{{$qft->id}}" />
                                                        {{$qft->name}}</label>
                                                    @else
                                                    <label><input id="qualification" name="qualification"
                                                            type="checkbox" value="{{$qft->id}}" />
                                                        {{$qft->name}}</label>
                                                    @endif
                                                    <br>
                                                    @endforeach
                                                    <br /><br />
                                                    <h5>เอกสารที่ใช้:</h5><br>
                                                    <br />
                                                    @foreach($document as $doc)
                                                    @if(strpos($credits->document_id, '"'.$doc->id.'"'))
                                                    <label><input id="document" checked name="document" type="checkbox"
                                                            value="{{$doc->id}}" /> {{$doc->name}}</label>
                                                    @else
                                                    <label><input id="document" name="document" type="checkbox"
                                                            value="{{$doc->id}}" /> {{$doc->name}}</label>
                                                    @endif
                                                    <br>
                                                    @endforeach
                                                    <br /><br />
                                                    <h5>เอกสารที่ใช้ดาวน์โหลด:</h5><br>
                                                    <br />
                                                    @foreach($downloaddoc as $down)
                                                    @if(strpos($credits->download_id, '"'.$down->id.'"'))
                                                    <label><input id="downloaddoc" checked name="downloaddoc"
                                                            type="checkbox" value="{{$down->id}}" />
                                                        {{$down->name}}</label>
                                                    @else
                                                    <label><input id="downloaddoc" name="downloaddoc" type="checkbox"
                                                            value="{{$down->id}}" /> {{$down->name}}</label>
                                                    @endif
                                                    <br>
                                                    @endforeach
                                                    <br /><br />
                                                    <h5>ช่องทางชำระเงิน:</h5>
                                                    <br />
                                                    @foreach($logobank as $bank)
                                                    @if(strpos($credits->bank_id, '"'.$bank->id.'"'))
                                                    <label><input id="payment" checked name="payment" type="checkbox"
                                                            value="{{$bank->id}}" /> {{$bank->name}}</label>
                                                    @else
                                                    <label><input id="payment" name="payment" type="checkbox"
                                                            value="{{$bank->id}}" /> {{$bank->name}}</label>
                                                    @endif
                                                    <br>
                                                    @endforeach
                                                    <br>
                                                    <br>
                                                    <h5>ประเภทดอกเบี้ย:</h5>
                                                    <input name="select_credit" type="radio" value="1">ดอกเบี้ยคงที่
                                                   <br>
                                                    <input name="select_credit" type="radio" value="2">ดอกเบี้ยลดต้นลดดอก
                                                    <br /><br />

                                                    อัพรูป: <span style="color:red;">*ขนาดรูป 390 x 490 pixel</span>
                                                    <br /><img
                                                        src="{{ asset('local/storage/picture_credits/'.$credits->image) }}" class="img-fluid">
                                                    <input type="file" class="form-control" name="image" />
                                                    <br /><br />

                                                    
                                                    <input name="qualificationvalue" id="qualificationvalue"
                                                        type="hidden" />
                                                    <input name="documentvalue" id="documentvalue" type="hidden" />
                                                    <input name="paymentvalue" id="paymentvalue" type="hidden" />
                                                    <input name="downloadvalue" id="downloadvalue" type="hidden" />
                                                    <input name="name_creditvalue" id="name_creditvalue"
                                                        type="hidden" />

                                                    <input class="btn btn-primary" type="button" value="save"
                                                        onclick="submit123()" />
                                                </form>
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

<script>
    function submit123() {
        var name_credit = document.querySelectorAll('input#name_credit:checked');
        var qualification = document.querySelectorAll('input#qualification:checked');
        var document1 = document.querySelectorAll('input#document:checked');
        var payment = document.querySelectorAll('input#payment:checked');
        var download = document.querySelectorAll('input#downloaddoc:checked');
        var qft = [];
        var doc = [];
        var bank = [];
        var down = [];
        var d = [];
        name_credit.forEach(checked => d.push('"' + checked.value + '"'))
        qualification.forEach(checked => qft.push('"' + checked.value + '"'))
        document1.forEach(checked => doc.push('"' + checked.value + '"'))
        payment.forEach(checked => bank.push('"' + checked.value + '"'))
        download.forEach(checked => down.push('"' + checked.value + '"'))
        $('#qualificationvalue').val(qft);
        $('#documentvalue').val(doc);
        $('#paymentvalue').val(bank);
        $('#downloadvalue').val(down);
        $('#name_creditvalue').val(d);
        console.log($('#qualificationvalue').val());
        console.log($('#documentvalue').val());
        console.log($('#paymentvalue').val());
        document.getElementById("creditsForm").submit();

    }
</script>
@endsection
@section('js')

@endsection