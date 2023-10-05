@include('component.component.head')
{{-- @include('component.component.topbar') --}}
{{-- @include('component.component.sidebar') --}}
{{-- <main id="main" class="main"> --}}
<section class="section">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <div class="modal-header">
                      <h5 class="modal-title">FORM PENDAFTARAN NIKAH ONLINE</h5>
                    <button type="button" class="btn btn-danger">Back</button>
                  </div>
                    <hr>
                  <!-- Normal Sizing -->
                  <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                      <li class="page-item"><a class="page-link">1. JADWAL</a></li>
                      <li class="page-item active" aria-current="page">
                        <span class="page-link">2. LOKASI</span>
                      </li>
                      <li class="page-item"><a class="page-link">3. CALON SUAMI</a></li>
                      <li class="page-item"><a class="page-link">4. CALON ISTRI</a></li>
                      <li class="page-item"><a class="page-link">5. WALI NIKAH</a></li>
                      <li class="page-item"><a class="page-link">6. DATA DOKUMEN</a></li>
                    </ul>
                  </nav><!-- End Normal Sizing -->
                  <h5 class="card-title">Lokasi Akad</h5>
                  <hr>
                  <form action="{{url('/home/daftar-nikah/calon-suami')}}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-12">
                      <label for="desa" class="form-label">Desa/Kelurahan:</label>
                      <input type="text" id="desa" name="desa" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                      <label for="alamat" class="form-label">Alamat Lokasi Akad:</label>
                      <textarea type="text" id="alamat" name="alamat" class="form-control" required></textarea>
                    </div>
                    <div class="text-end">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-success">Selanjutnya >></button>
                    </div>
                  </form><!-- End No Labels Form -->
                </div>
              </div>
    
        </div>
      </div>
</section>
</main><!-- End #main -->

@include('component.component.footer')
