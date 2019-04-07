@extends('layouts.admin.masterAdmin')
@section('content')<div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit Data Transaksi</h3>
                </div>
  
              </div>
            </div>
            <div class="card-body">
              <form method="post" action="{{ route('transaksi.update',$transaksi->id_transaksi)}}"> 
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
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                            <label for="sel1">Pilih Status :</label>
                            <select class="form-control" name="status_booking">
                                <option value="{{$transaksi->status_booking}}">{{$transaksi->status_booking}}</option>
                                <option value="booking">Booking</option>
                            </select>
                       
                      </div>
                    </div>

                  </div>
                </div>               
                <div class="pl-lg-4">
                  <div class="form-group">
                    <br>
                    
                       <button class="btn btn-icon btn-3 btn-info  " type="submit">
                            <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                            
                            <span class="btn-inner--text">Update</span>
                            
                        </button>  
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
@endsection