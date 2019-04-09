@extends('layouts.admin.masterAdmin')
@section('content')<div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit Data Tempat</h3>
                </div>
  
              </div>
            </div>
            <div class="card-body">
              <form method="post" action="{{ route('venue.update',$venue->id_venue)}}" enctype="multipart/form-data"> 
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
                        <label class="form-control-label" for="input-username">Nama Tempat</label>
                        <input type="text" name="nama_tempat" value="{{$venue->nama_tempat}}" class="form-control form-control-alternative" placeholder="Nama Tempat">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                    <label class="form-control-label" for="input-harga">Harga</label>
                        <input type="text" name="harga" value="{{$venue->harga}}" class="form-control form-control-alternative" placeholder="Harga">                    
                        </div>
                    </div>
                  </div>
                </div>               
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea id="summernote" name="deskripsi" rows="4">{{$venue->deskripsi}}</textarea><br>
                    
                    <?php if($venue->image >0){?>
                    <input type="hidden" class="form-control">
                    <?php } else {?>
                    <input type="file" name="image" class="form-control">
                    <?php }?>
                     <br><button class="btn btn-icon btn-3 btn-info  " type="submit">
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