@extends('layout.template')

@section('content')
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Advanced Table <a class="btn btn-primary" style="margin-left: 5px" href="{{route('pengalaman_kerja.create')}}">+</a>
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Nama</th>
                    <th><i class="icon_calendar"></i> Jabatan</th>
                    <th><i class="icon_calendar"></i> Tahun Masuk</th>
                    <th><i class="icon_calendar"></i> Tahun Keluar</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>

                  @foreach ($pengalaman_kerja as $item)
                  <tr>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jabatan}}</td>
                    <td>{{$item->tahun_masuk}}</td>
                    <td>{{$item->tahun_keluar}}</td>
                    <td>
                      <div class="btn-group">
                        <form action="{{route('pengalaman_kerja.destroy',$item->id)}}" method="POST">
                        <a class="btn btn-success" href="{{route('pengalaman_kerja.edit',$item->id)}}">edit</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </section>
          </div>
        </div>
    <!--/.row-->
@endsection
