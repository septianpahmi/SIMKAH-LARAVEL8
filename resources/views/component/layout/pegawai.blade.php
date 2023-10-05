@include('component.component.head')
@include('component.component.topbar')
@include('component.component.sidebar')
<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-13">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Pegawai</h5>
              @if(session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              @if(session()->has('edit'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{session()->get('edit')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Horizontal Form -->
              <form action="{{url('/home/pegawai/tambah')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
                <div class="row md-3">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <select id="jabatan" name="jabatan" class="form-select">
                            <option selected>Pilih...</option>
                            <option value="Kepala KUA">Kepala KUA</option>
                            <option value="Penyuluh Agama Islam">Penyuluh Agama Islam</option>
                            <option value="Penghulu">Penghulu</option>
                            <option value="Pengadministrasi Umum">Pengadministrasi Umum</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                  <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="foto" id="foto">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Pegawai</h5>
              @if(session()->has('delete'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{session()->get('delete')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <table class="table">
                <thead>
                  <tr align="center">
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                @foreach($data as $item)
                <tbody>
                  <tr align="center">
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->jabatan}}</td>
                    <td>{{$item->alamat}}</td>
                    <td><img src="pegawai/{{$item->foto}}" style="width: 50px;" class="rounded-circle" alt=""></td>
                    <td>
                        <a href="{{url('/home/pegawai/edit', $item->id)}}" class="btn btn-primary">Edit</a>
                        
                        <a href="{{url('/home/pegawai/hapus', $item->id)}}" onclick="return confirm('Yakin ingin menghapus?') " class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  
                </tbody>
                @endforeach
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
</section>
</main><!-- End #main -->

@include('component.component.footer')
