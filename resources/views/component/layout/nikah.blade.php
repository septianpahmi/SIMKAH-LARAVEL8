@include('component.component.head')
@include('component.component.topbar')
@include('component.component.sidebar')
<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              
              <form method="post" class="row g-3" action="{{url('/home/daftar-nikah/1')}}">
                @csrf
                <h5 class="card-title">FORM PENDAFTARAN NIKAH ONLINE</h5>
                
              <!-- Pills Tabs -->
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">1. LOKASI</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2. CALON SUAMI</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">3. CALON ISTRI</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-wali-tab" data-bs-toggle="pill" data-bs-target="#pills-wali" type="button" role="tab" aria-controls="pills-wali" aria-selected="false">4. WALI NIKAH</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                  <h5 class="card-title">Lokasi KUA & Jadwal Nikah</h5>
                  <div class="col-md-12">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <textarea id="alamat" name="alamat" class="form-control" required></textarea>
                  </div>
                  <div class="col-md-12 pt-2">
                    <label for="tgl_nikah" class="form-label">Tanggal:</label>
                    <input type="date" id="tgl_nikah" name="tgl_nikah" class="form-control" required>
                  </div>
                  <div class="col-md-12 pt-2">
                    <label for="waktu" class="form-label">Waktu:</label>
                    <input type="time" id="waktu" name="waktu" class="form-control" required>
                  </div>
                  <div class="col-md-12 pt-2">
                    <label for="tempat" class="form-label">Tempat:</label>
                    <select id="tempat" name="tempat" class="form-select" required>
                      <option>Di KUA</option>
                      <option>Luar KUA</option>
                    </select>
                  </div>
                  <div class="col-md-12 pt-2">
                      <label for="surat" class="form-label">No. Surat Dispensasi Kecamatan:</label>
                      <input type="text" name="surat" class="form-control" id="surat" required>
                  </div>
                </div>
                
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                  <h5 class="card-title">Data Calon Pria</h5>
                  <div class="col-md-12 pt-2">
                    <label for="nama_pria" class="form-label">Nama Lengkap:</label>
                    <input type="text" id="nama_pria" name="nama_pria" class="form-control" required>
                  </div>
                  <div class="col-md-12 pt-2">
                    <label for="nik_pria" class="form-label">NIK:</label>
                    <input type="text" id="nik_pria" name="nik_pria" class="form-control" required>
                  </div>
                  <div class="col-md-12 pt-2">
                    <label for="agama_pria" class="form-label">Agama:</label>
                    <select id="agama_pria" name="agama_pria" class="form-select" required>
                      <option>Islam</option>
                      <option>Kristen</option>
                      <option>Hindu</option>
                      <option>Budhha</option>
                    </select>
                  </div>
                  
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
                  <h5 class="card-title">Data Calon Wanita</h5>
                  <div class="col-md-12 pt-2">
                    <label for="nama_wanita" class="form-label">Nama Lengkap:</label>
                    <input type="text" id="nama_wanita" name="nama_wanita" class="form-control" required>
                  </div>
                  <div class="col-md-12 pt-2">
                    <label for="nik_wanita" class="form-label">NIK:</label>
                    <input type="text" id="nik_wanita" name="nik_wanita" class="form-control" required>
                  </div>
                  <div class="col-md-12 pt-2">
                    <label for="agama_wanita" class="form-label">Agama:</label>
                    <select id="agama_wanita" name="agama_wanita" class="form-select" required>
                      <option>Islam</option>
                      <option>Kristen</option>
                      <option>Hindu</option>
                      <option>Budhha</option>
                    </select>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-wali" role="tabpanel" aria-labelledby="wali-tab">
                  <h5 class="card-title">Data Wali & Saksi</h5>
                  <div class="col-md-12 pt-2">
                    <label for="wali_id" class="form-label">Wali:</label>
                    <select id="wali_id" name="wali_id" class="form-select" required>
                      @foreach ($wali as $walis)
                      <option value="{{$walis->id}}">{{$walis->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-12 pt-2">
                    <label for="saksi1_id" class="form-label">Saksi:</label>
                    <select id="saksi1_id" name="saksi1_id" class="form-select" required>
                      @foreach ($saksi as $saksis)
                      <option value="{{$saksis->id}}">{{$saksis->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="text-center pt-3" >
                    <button type="submit" class="btn btn-primary">Selajutnya</button>
                  </div>
                </div>
              </div><!-- End Pills Tabs -->
              </form>
            </div>
          </div>

        </div>
</section>
</main><!-- End #main -->
<script>
    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
        .then(response => response.json())
        .then(provinces => {
            var data = provinces;
            var tampung = `<option>Provinsi</option>`;
            data.forEach(element => {
                tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
            });
            document.getElementById('provinsi').innerHTML = tampung;
        });
</script>
<script>
    const selectProvinsi = document.getElementById('provinsi');
    selectProvinsi.addEventListener('change', (e)=>{
        var provinsi = e.target.options[e.target.selectedIndex].dataset.reg;
        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
        .then(response => response.json())
        .then(regencies => {
            var data = regencies;
            var tampung = `<option>Kabupaten/Kota</option>`;
            document.getElementById('kota').innerHTML = '<option>Kabupaten/Kota</option>';
            document.getElementById('kecamatan').innerHTML = '<option>Kecamatan</option>';
            data.forEach(element => {
                tampung += `<option data-dist="${element.id}" value="${element.name}">${element.name}</option>`;
            });
            document.getElementById('kota').innerHTML = tampung;
        });
    });

    const selectKota = document.getElementById('kota');
    selectKota.addEventListener('change', (e)=>{
        var kota = e.target.options[e.target.selectedIndex].dataset.dist;
        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kota}.json`)
        .then(response => response.json())
        .then(districts => {
            var data = districts;
            var tampung = `<option>Kecamatan</option>`;
            var tampung1 = `<option>KUA</option>`;
            document.getElementById('kecamatan').innerHTML = '<option>Kecamatan</option>';
            data.forEach(element => {
                tampung += `<option data-vill="${element.id}" value="${element.name}">${element.name}</option>`;
                tampung1 += `<option data-dist="${element.id}" value="KUA ${element.name}">KUA ${element.name}</option>`;
            });
            document.getElementById('kecamatan').innerHTML = tampung;
            document.getElementById('kua').innerHTML = tampung1;
        });
    });
</script>
@include('component.component.footer')
