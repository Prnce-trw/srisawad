<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$contact_sand->ct_subject.' ของ '.$contact_sand->ct_name.' '.$contact_sand->ct_lastname}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="col-12 text-center">
            <h1>{{$contact_sand->ct_subject.' ของ '.$contact_sand->ct_name.' '.$contact_sand->ct_lastname}}</h1>
            <h4>{{$contact_sand->ct_status}}</h4>
            <br>
            <table class="table table-bordered" width="50%">
                <thead>
                    <tr>
                        <td width="30%" class="text-right">ชื่อ - นามสกุล</td>
                        <td>{{$contact_sand->ct_name.' '.$contact_sand->ct_lastname}}</td>
                    </tr>
                    <tr>
                        <td width="30%" class="text-right">เบอร์โทรศัพท์</td>
                        <td>{{$contact_sand->ct_tel}}</td>
                    </tr>
                    <tr>
                        <td width="30%" class="text-right">อีเมล</td>
                        <td>{{$contact_sand->ct_email}}</td>
                    </tr>
                </thead>
            </table>
            <hr>
            <p>{{$contact_sand->ct_content}}</p>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>