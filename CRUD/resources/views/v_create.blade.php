@extends('layout.template')
@section('content')

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <strong>Whoops!</strong> There were some problems with your input.<br><br>
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
              <header class="panel-heading">
                Form Tambah
              </header>
              <div class="panel-body">
                <form class="form-horizontal" action="{{route('pengalaman_kerja.store')}}" method="POST">
                	@csrf
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jabatan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tahun Masuk</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="tahun_masuk">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tahun Keluar</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="tahun_keluar">
                    </div>
                  </div>
                  <div class="form-group">
                  	<input type="submit" value="simpan" class="btn btn-primary form-control">
                  </div>
                </form>
              </div>
            </section>
          </div>
        </div>
@endsection