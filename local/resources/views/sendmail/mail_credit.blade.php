<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{'ข้อมูลการสมัครสินเชื่อ ของ '.$credit_sand->cd_name.' '.$credit_sand->cd_lastname}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-12 text-center">
            <h1>{{'ข้อมูลการสมัครสินเชื่อ ของ '.$credit_sand->cd_name.' '.$credit_sand->cd_lastname}}</h1>
            <br>
            <table class="table table-bordered" width="50%">
                <thead>
                    <tr>
                        <td width="30%" class="text-right">เลขที่บัตรประชาชน : </td>
                        <td>{{$credit_sand->cd_card}}</td>
                    </tr>
                    <tr>
                        <td width="30%" class="text-right">เบอร์โทรศัพท์</td>
                        <td>{{$credit_sand->cd_tel}}</td>
                    </tr>
                    <tr>
                        <td width="30%" class="text-right">อีเมล</td>
                        <td>{{$credit_sand->cd_email}}</td>
                    </tr>
                    <tr>
                        <td width="30%" class="text-right">จังหวัด (ที่อยู่ปัจจุบัน)</td>
                        <td>{{$credit_sand->cd_province}}</td>
                    </tr>
                    <tr>
                        <td width="30%" class="text-right">อาชีพ</td>
                        <td>{{$credit_sand->cd_jobs}}</td>
                    </tr>
                    <tr>
                        <td  class="text-right">รายได้ต่อเดือน (บาท)</td>
                        <td>{{$credit_sand->cd_salary}}</td>
                    </tr>
                    <tr>
                        <td  class="text-right">ระยะเวลาการทำงาน</td>
                        <td>{{$credit_sand->cd_year}} ปี {{$credit_sand->cd_month}} เดือน</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>
