@extends('layouts.front.masterReg')
@section('content')
<div class="main-banner" style="background-image: url('{{ asset('assetsFrontend/uploads/page-header-bg.jpg')}}');height:280px">
    <center>
        <div class="jarak"></div>
        <h4 class="judul" style="margin-top:10%">Upload Bukti Pembayaran</h4>
        </b><br>
        <hr class="garisT">
    </center>
</div>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="right-box-pro wow fadeIn">
                <img src="{{ asset('assetsFrontend/uploads/banner4.jpg')}}" alt="" class="img-fluid img-rounded">
            </div>
            <!-- end media -->
        </div>
        <div class="col-md-6">
            <div class="message-box">
                <div style="margin-left:12%">
                    <h2>Upload Payment</h2>
                    <hr class="garis">
                    <br><br>
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}  
                    </div>
                    <br />
                    @endif
                    <form action="{{ route('home.update',$transaksi->id_transaksi)}}" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        @if ($errors->any())
                        <div class="col-md-10">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif     
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="font-size:14px;">Bukti Pembayaran : </label>
                            <div class="col-sm-11">
                                <input type="file" name="bukti_pembayaran" class="form-control" placeholder="Enter nama event">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
                            </div>
                        </div>
                </div>
           
                </form>    
            </div>
        </div>
        <!-- end messagebox -->
    </div>
    <!-- end col -->
</div>
</div><br><br><br><br><br><br><br><br><br>
@endsection6:43 07/04/2019