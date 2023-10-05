@include('component.component.head')
@include('component.component.topbar')
@include('component.component.sidebar')
<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">FORM DAFTAR NIKAH ONINE</h5>

              <!-- Basic Pagination -->
                  <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">1. JADWAL</a></li>
                  <li class="page-item"><a class="page-link active" href="#">2. LOKASI</a></li>
                  <li class="page-item"><a class="page-link" href="#">3. CALON SUAMI</a></li>
                  <li class="page-item"><a class="page-link" href="#">4. CALON ISTRI</a></li>
                  <li class="page-item"><a class="page-link" href="#">5. WALI NIKAH</a></li>
                  <li class="page-item"><a class="page-link" href="#">6. DOKUMEN</a></li>
                </ul>
              </nav><!-- End Basic Pagination -->
              <h5 class="card-title">Lokasi Pernikahan</h5>

              <form method="post" class="row g-3" action="{{url('/home/daftar-nikah/2')}}">
                @csrf
                <div class="col-md-12">
                  <label for="akad" class="form-label">Akad:</label>
                  <select id="akad" name="akad" class="form-select" required>
                    <option>Masjid</option>
                    <option>Kediaman Mempelai Wanita</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="alamat" class="form-label">Alamat:</label>
                  <textarea type="text" name="alamat" class="form-control" id="surat" required></textarea>
                </div>
                <div class="col-md-4">
                  <label for="provinsi" class="form-label">Provinsi:</label>
                  <select id="provinsi" name="provinsi" class="form-select" required>
                    <option>Provinsi</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="kota" class="form-label">Kabupaten/Kota:</label>
                  <select id="kota" name="kota" class="form-select" required>
                    <option>Kabupaten/Kota</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="kecamatan" class="form-label">Kecamatan:</label>
                  <select id="kecamatan" name="kecamatan" class="form-select" required>
                    <option>Kecamatan</option>
                  </select>
                </div>
                <div class="text-center" >
                  <button type="submit" class="btn btn-primary">Selajutnya</button>
                </div>
              </form><!-- End Multi Columns Form -->
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
            document.getElementById('kecamatan').innerHTML = '<option>Kecamatan</option>';
            data.forEach(element => {
                tampung += `<option data-vill="${element.id}" value="${element.name}">${element.name}</option>`;
            });
            document.getElementById('kecamatan').innerHTML = tampung;
        });
    });
</script>
@include('component.component.footer')
