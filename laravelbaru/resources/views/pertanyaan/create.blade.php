@extends('adminlte.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan.create" method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputjudul">Judul</label>
                    <input type="text" class="form-control" id="exampleInputjudul" placeholder="Enter judul">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputisi">Isi</label>
                    <input type="text" class="form-control" id="exampleInputisi" placeholder="Enter isi">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputprofilid">Profil Id</label>
                    <input type="text" class="form-control" id="exampleInputprofilid" placeholder="profil Id">
                  </div>
                 
            

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection