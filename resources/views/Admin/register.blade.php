
@extends('Master_Admin.tampilan')
@section('title','Register Admin')
@section('content')
@if(Session::get('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> {{Session::get('pesan')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
  <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Regiter Admin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
                <form method="post" action="">
        @csrf
        
        <div class="grup">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
        @error('name')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

        <div class="grup">
        <label>E-mail</label>
        <input type="text" name="email" class="form-control">
        @error('email')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

        <div class="grup">
        <label>Username</label>
        <input type="text" name="username" class="form-control">
        @error('username')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <div class="grup">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
        @error('password')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <button class="btn btn-primary mt-4">Register</button>
      </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->


     <div class="card" style="padding:10px;">
       
       <h1>List Admin</h1>
        <table class="table" id="myTable">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          
            <?php $no=1 ?>
            @foreach($user as $data)
            <tr>
            <td>{{$no++;}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->username}}</td>
            <td>
              
            </td>

            @endforeach
          </tr>
        </tbody>
      </table>
     </div>

    </section>

@endsection