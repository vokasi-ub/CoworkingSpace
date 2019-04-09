@extends('layouts.admin.masterAdmin')
@section('content')
<!-- Table -->
<div class="row">
    <div class="col">
        <div class="card shadow">
          <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Data User</h3>
                </div>
                <div class="col-4 text-right">
                    <form action="{{ url()->current() }}" class="sidebar">
                      <div class="input-group float-right mr-3 mb-3">
                        <input type="text" name="keyword" class="form-control" placeholder="Search Nama User  ">
                          <span class="input-group-btn">
                            <button type="submit" name="Search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                          </span>
                        </input>
                      </div>
                    </form>
                </div>
              </div>
        </div>

            <div class="table-responsive">
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
