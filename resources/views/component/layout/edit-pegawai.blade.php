@include('component.component.head')
@include('component.component.topbar')
@include('component.component.sidebar')
<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-13">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Pegawai</h5>
              <!-- Horizontal Form -->
              <form action="{{url('/home/pegawai/update', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" value="{{$data->name}}" name="name" id="name">
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
                    <input type="text" class="form-control" value="{{$data->alamat}}" name="alamat" id="alamat">
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
                  <a href="{{url('/home/pegawai')}}" class="btn btn-secondary">Back</a>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>
</section>
</main><!-- End #main -->

@include('component.component.footer')
