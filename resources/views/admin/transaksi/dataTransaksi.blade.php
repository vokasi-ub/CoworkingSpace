@extends('layouts.admin.masterAdmin')
@section('content')
<!-- Table -->
<div class="row">
    <div class="col">
        <div class="card shadow">
             <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-12">
                        <center><h2 class="mb-0">Data Transaksi</h2>
                    </div>
                </div>
            </div><br><br>

            <div class="table-responsive" style="margin-top:-3%">
                    @if(session()->get('success'))
                      <div class="alert alert-success">
                        {{ session()->get('success') }}  
                      </div><br />
                    @endif
                <table id="example2" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>Action</th>
                            <th>Status</th>
                            <th>Kode Transaksi</th>
                            <th>Nama Pemesan</th>
                            <th>Venue</th>
                            <th>Total Pembayaran</th>
                            <th>Bukti Pembayaran</th>
                            <th>Tanggal sewa</th>
                            <th>Tanggal Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $row)

                        <tr>
                              <td>
                     
                                 <form action="{{ route('transaksi.destroy', $row->id_transaksi)}}" method="post" id="confirm_delete">
                                      @csrf
                                      @method('DELETE')
                                <a onclick="return confirm('Are you sure?')"><button class="btn btn-icon btn-sm btn-danger" type="submit">
                                    <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                                    <span class="btn-inner--text">Delete</span>
                                </button></a><br>
                                </form>

                                <a href="{{ route('transaksi.edit',$row->id_transaksi)}}"><button class="btn btn-icon btn-sm btn-info" type="button"  style="width:82px;margin-top:4%">
                                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                                <span class="btn-inner--text">Update</span>
                                </button></a>
                          
                            </td>      
                            <td>
                                <?php 
                                if($row->status_booking == 'belum terverifikasi') {?>
                                   <button class="btn btn-danger btn-sm">{{$row->status_booking}}</button>
                                <?php } else if($row->status_booking == 'booking') {?>
                                   <button class="btn btn-success btn-sm">{{$row->status_booking}}</button>

                                <?php } ?>
                                
                                
                            </td>
                            <td>{{$row->kode_transaksi}}</td>
                            <td>{{$row->get_users->nama}}</td>
                            <td>{{$row->get_venue->nama_tempat}}</td>
                            <td>{{$row->total_pembayaran}}</td>
                            <td><a href="images/{{ $row->bukti_pembayaran }}"><img src="images/{{ $row->bukti_pembayaran }}" width="200px" heigth="200px"></a></td>
                            <td>{{$row->tgl_sewa}}</td>
                            <td>{{$row->tgl_selesai}}</td>
                        </tr>
                       @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $( "#confirm_delete" ).submit(function( event ) {
            event.preventDefault();
            swal({
                title: 'Are you sure?',
                text: "Please click confirm to delete this item",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: true
            }).then(function() {
                    $("#confirm_delete").off("submit").submit();
            }, function(dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                    swal('Cancelled', 'Delete Cancelled :)', 'error');
                }
            })
        });
    });
</script>
@endsection
