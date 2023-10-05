@include('component.component.head')
{{-- @include('component.component.topbar') --}}
{{-- @include('component.component.sidebar') --}}
{{-- <main id="main" class="main"> --}}
<section class="section">
      <div class="row">
        <div class="col-lg-13">
            <div class="card">
                <div class="card-body">
                    <br>
                    <div class="modal-header">
                      <h5 class="modal-title">FORM PENDAFTARAN NIKAH ONLINE</h5>
                  </div>
                    <hr>
                  <!-- Normal Sizing -->
                  <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                      <li class="page-item"><a class="page-link">1. JADWAL</a></li>
                      <li class="page-item"><a class="page-link">2. LOKASI</a></li>
                      <li class="page-item active" aria-current="page">
                        <span class="page-link">3. CALON SUAMI</span>
                      </li>
                      <li class="page-item"><a class="page-link">4. CALON ISTRI</a></li>
                      <li class="page-item"><a class="page-link">5. WALI NIKAH</a></li>
                      <li class="page-item"><a class="page-link">6. DATA DOKUMEN</a></li>
                    </ul>
                  </nav><!-- End Normal Sizing -->
                  <br>

                  <div class="card">
                    <div class="card-body">
                        <br>
                        <nav aria-label="...">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link">SUAMI</a></li>
                              <li class="page-item"><a class="page-link">AYAH SUAMI</a></li>

                              <li class="page-item active" aria-current="page">
                                <span class="page-link">IBU SUAMI</span>
                              </li>
                            </ul>
                          </nav><!-- End Small Sizing -->
        
                      <!-- Multi Columns Form -->
                      <form action="{{url('/home/daftar-nikah/calon-istri')}}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-2">
                            <label for="warganegara" class="form-label">Warga Negara:</label>
                            <select id="warganegara" name="warganegara" class="form-select" required>
                              <option>WNI</option>
                              <option>WNA</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                          <label for="negara_asal" class="form-label">Negara Asal:</label>
                          <input type="text" class="form-control" name="negara_asal" id="negara_asal" disabled>
                        </div>
                        <div class="col-md-2">
                          <label for="paspor" class="form-label">No. Paspor:</label>
                          <input type="text" class="form-control" name="paspor" id="paspor" disabled>
                        </div>
                        <div class="col-md-3">
                          <label for="nik" class="form-label">NIK:</label>
                          <input type="text" class="form-control" name="nik" id="nik" required>
                          <div id="nik_result"></div>
                        </div>
                        <div class="col-md-2">
                            <label for="nik" class="form-label">&nbsp;</label>
                            <button type="button" class="form-control btn btn-primary" id="cek_nik_button">CEK NIK</button>
                        </div>
                        <div class="col-md-6">
                          <label for="nama" class="form-label">Nama:</label>
                          <input type="text" name="nama" class="form-control" id="nama" required>
                        </div>
                        <div class="col-md-2">
                          <label for="tempat_lahir" class="form-label">Tempat Lahir:</label>
                          <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" required >
                        </div>
                        <div class="col-md-2">
                          <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                          <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
                        </div>
                        <div class="col-md-2">
                          <label for="umur" class="form-label">Umur:</label>
                          <input type="text" name="umur" class="form-control" id="umur" required>
                        </div>
                        <div class="col-md-6">
                            <label for="agama" class="form-label">Agama:</label>
                            <select id="agama" name="agama" class="form-select" required>
                              <option>ISLAM</option>
                              <option>KRITEN</option>
                              <option>HINDU</option>
                              <option>BUDDHA</option>
                              <option>KHONGHUCU</option>
                            </select>
                        </div>
                        <div class="col-6">
                          <label for="pekerjaan" class="form-label">Pekerjaan:</label>
                          <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
                        </div>
                        <div class="col-12">
                          <label for="alamat" class="form-label">Alamat:</label>
                          <textarea type="text" class="form-control" name="alamat" id="alamat" required></textarea>
                        </div>
                        <div class="text-end">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-success">Selanjutnya >></button>
                        </div>
                      </form><!-- End Multi Columns Form -->
        
                    </div>
                  </div>
        
                </div>
                  
                </div>
              </div>
    
        </div>
      </div>
</section>
</main><!-- End #main -->

@include('component.component.footer')
