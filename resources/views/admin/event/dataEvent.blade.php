@extends('layouts.admin.masterAdmin')
@section('content')
<!-- Table -->
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-12">
                        <center><h2 class="mb-0">Data Event</h2>
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
                            <th>Nama</th>
                            <th>Nama Event</th>
                            <th>Jenis Event</th>
                            <th>Venue</th>
                            <th>Image</th>
                            <th>Pemateri</th>
                            <th>Waktu Event</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($event as $row)

                        <tr>
                              <td>
                                 <form action="{{ route('event.destroy', $row->id_event)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                <a onclick="return confirm('Are you sure?')"><button class="btn btn-icon btn-sm btn-danger" type="submit">
                                <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                                <span class="btn-inner--text">Delete</span>
                                </button></a><br>
                                </form>

                                <a href="{{ route('event.edit',$row->id_event)}}"><button class="btn btn-icon btn-sm btn-info" type="button"  style="width:82px;margin-top:4%">
                                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                                <span class="btn-inner--text">Update</span>
                                </button></a>
                          
                            </td>      
                            <td>{{$row->get_users->nama}}</td>
                            <td>{{$row->nama_event}}</td>
                            <td>{{$row->jenis}}</td>
                            <td>{{$row->get_venue->nama_tempat}}</td>
                            <td><a href="images/{{ $row->image_event }}"><img src="images/{{ $row->image_event }}" width="200px" heigth="200px"></a></td>
                            <td>{{$row->waktu_event}}</td>
                            <td>{{$row->pemateri}}</td>
                            <td>{!!$row->deskripsi_event!!}</td>
                        </tr>
                       @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
