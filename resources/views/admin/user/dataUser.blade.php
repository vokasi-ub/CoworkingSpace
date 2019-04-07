@extends('layouts.admin.masterAdmin')
@section('content')
<!-- Table -->
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Data User</h3>
                    </div>
                    <div class="col-4 text-right">

                        <div class="col-lg-12" style="margin-top:8%">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Search Username" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive" style="margin-top:-3%">
                    @if(session()->get('success'))
                      <div class="alert alert-success">
                        {{ session()->get('success') }}  
                      </div><br />
                    @endif
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>Action</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $row)

                        <tr>
                              <td>
                                 <form action="{{ route('user.destroy', $row->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                <a onclick="return confirm('Are you sure?')"><button class="btn btn-icon btn-sm btn-danger" type="submit">
                                <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                                <span class="btn-inner--text">Delete</span>
                                </button></a><br>
                                </form>

                                <a href="{{ route('user.edit',$row->id)}}"><button class="btn btn-icon btn-sm btn-info" type="button"  style="width:82px;margin-top:4%">
                                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                                <span class="btn-inner--text">Update</span>
                                </button></a>
                          
                            </td>            
                            <td>{{$row->nama}}</td>
                            <td>{{$row->username}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->no_telp}}</td>
                            <td>{{$row->status}}</td>
          
                        </tr>
                       @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
