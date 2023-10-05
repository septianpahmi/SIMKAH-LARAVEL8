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
                      <li class="page-item active" aria-current="page">
                        <span class="page-link">1. JADWAL</span>
                      </li>
                      <li class="page-item"><a class="page-link">2. LOKASI</a></li>
                      <li class="page-item"><a class="page-link">3. CALON SUAMI</a></li>
                      <li class="page-item"><a class="page-link">4. CALON ISTRI</a></li>
                      <li class="page-item"><a class="page-link">5. WALI NIKAH</a></li>
                      <li class="page-item"><a class="page-link">6. DATA DOKUMEN</a></li>
                    </ul>
                  </nav><!-- End Normal Sizing -->
                  <h5 class="card-title">Lokasi KUA & Jadwal Nikah</h5>
                  <hr>
                  <form action="{{url('/home/daftar-nikah/lokasi')}}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                      <label for="provinsi" class="form-label">Provinsi:</label>
                      <select id="provinsi" name="provinsi" class="form-select" required>
                        <option>Provinsi</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="kota" class="form-label">Kabupaten/Kota:</label>
                      <select id="kota" name="kabupaten" class="form-select" required>
                        <option>Kabupaten/Kota</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="kecamatan" class="form-label">Kecamatan:</label>
                      <select id="kecamatan" name="kecamatan" class="form-select" required>
                        <option>Kecamatan</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="kua" class="form-label">KUA:</label>
                      <select id="kua" name="kua" class="form-select" required>
                        <option>KUA</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="nikah_di" class="form-label">Nikah di:</label>
                      <select id="nikah_di" name="nikah_di" class="form-select" required>
                        <option>DI KUA / KANTOR</option>
                        <option>DILUAR KUA</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="tanggal_akad" class="form-label">Tanggal:</label>
                      <input type="date" id="tanggal_akad" name="tanggal_akad" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                      <label for="surat" class="form-label">No. Surat Dispensasi Kecamatan:</label>
                      <input type="text" id="surat" name="surat" class="form-control" required>
                    </div>
                    <span>Catatan: Pemilihan jam Akad dilakukan pada saat pemeriksaan Nikah di KUA, karena terkait penjadwalan dan kondisi jumlah penghuli di KUA masing - masing.</span>
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
