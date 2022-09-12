<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ public_path('css/idCard.css')}}">
    <title>ID Card</title>

</head>
<body>
        <div class="container">
            <div class="padding">
                <div class="font">
                    <div class="top" style="background-image: url('{{ public_path('images/log.png')}}');">
                        <p>Federal Police Intern</p>
                        <img src={{ storage_path('')}}>
                    </div>
                    <div class="bottom">
                        <p>{{$fname}}</p><p>{{$lname}}</p>
                        <p class="desi">{{$phone}}:</p>
                        <div class="barcode">
                            <img src="{{ public_path('qrcode.png')}}">
                        </div>
                        <br>
                        <p class="no">{{$role}}</p>
                        <p class="no">{{$school}}</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
</body>
</html>