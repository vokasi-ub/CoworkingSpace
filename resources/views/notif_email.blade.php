<!DOCTYPE html>
<html>
<head>
    <title>Notifikasi Email</title>
    <link rel="stylesheet" href="{{ asset('assetsFrontend/css/bootstrap.min.css')}}">

</head>
<body>
    <h2>Anda telah membuat event pada : </h2> <hr><br>
    <div class="row">
        <div class="col-md-6">
            <h4>Nama Event  : {{$nama_event}}</h4><hr>
            <h4>Jenis Event : {{$jenis}}</h4><hr>
            <h4>Waktu Event : {{$waktu_event}}</h4><hr>
            <h4>Deskripsi Event : {!!$deskripsi_event!!}</h4><hr>
        </div>
    
    </div>
    <h3>Thanks For Using Us @onNextCoworking</h3>
</body>
</html>