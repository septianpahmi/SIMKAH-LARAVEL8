@include('user.component.head')
@include('user.component.topbar')
@include('user.component.welcome')  

<main id="main">
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Alur Pendaftaran Online</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">
            <div class="box">
              <h3>Langkah Pertama</h3>
              <ul>
                <li>Kunjungi Website SIMKAH Warungkondang</li>
                <li>Pilih Menu Masuk/Daftar.</li>
                <li>Apabila kamu sudah mendaftar dan sudah mempunyai akun maka perlu , maka kamu bisa langsung masuk.</li>
                <li>Kamu akan di arahkan ke menu dashboard area, silahkan lengkapi data diri kamu.</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
            <h3>Langkah Kedua</h3>
              <ul>
                <li>Pilih menu Daftar Nikah pada dashboard area.</li>
                <li>Siapkan dokumen-dokumen yang diperlukan.</li>
                <li>Isi dan lengkapi semua form-form yang disediakan.</li>
                <li>Apabila pernikahan dilakukan di kantor KUA, maka biaya layanan <b>GRATIS.</b></li>
                <li>Apabila pernikahan di luar kantor KUA, maka membayar biaya layanan sebesar Rp.600.000</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
            <h3>Langkah Ketiga</h3>
              <ul>
                <li>Pemeriksaan data nikah calon pengantin dan wali nikah di KUA tempat akad nikah oleh petugas KUA.</li>
                <li>Pelaksanaan akad nikah dan penyerahan buku nikah di lokasi nikah apabila pernikahan dilaksanakan diluar kantor KUA.</li>
                <li>Pelaksanaan akad nikah dan penyerahan buku nikah di kantor KUA apabila pernikahan dilaksanakan di kantor KUA.</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing1" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Alur Pendaftaran Offline</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">
            <div class="box">
              <h3>Langkah Pertama</h3>
              <ul>
                <li>Mendatangi RT/RW untuk mengurus surat pengantar nikah yang akan dibawa oleh calon pengantin ke kelurahan.</li>
                <li>Mendatangi kantor kelurahan untuk mengurus surat pengantar nikah (N1-N4) yang akan dibawa oleh calon pengantin ke KUA Kecamatan.</li>
                <li><b>Apabila pernikahan diadakan diluar kecamatan setempat,</b> maka perlu mengurus surat rekomendasi nikah untuk dibawa ke KUA kecamatan tempat calon pengantin melaksanakan akad nikah.</li>
                <li><b>Apabila pernikahan kurang dari 10 hari kerja,</b>   Maka mendatangi kantor kecamatan tempat akad nikah untuk memohon dispensasi nikah jika kurang dari 10 hari kerja.</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
            <h3>Langkah Kedua</h3>
              <ul>
                <li>Melakukan pendaftaran nikah di KUA tempat dilaksanakan akad nikah.</li>
                <li>Apabila pernikahan dilakukan di kantor KUA, maka biaya layanan <b>GRATIS.</b></li>
                <li>Apabila pernikahan di luar kantor KUA, maka membayar biaya layanan sebesar Rp.600.000 di BANK persepsi yang ada di wilayah KUA tempat menikah, dan menyerahkan slip setoran bea nikah ke KUA tempat akad nikah.</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
            <h3>Langkah Ketiga</h3>
              <ul>
                <li>Pemeriksaan data nikah calon pengantin dan wali nikah di KUA tempat akad nikah oleh petugas KUA.</li>
                <li>Pelaksanaan akad nikah dan penyerahan buku nikah di lokasi nikah apabila pernikahan dilaksanakan diluar kantor KUA.</li>
                <li>Pelaksanaan akad nikah dan penyerahan buku nikah di kantor KUA apabila pernikahan dilaksanakan di kantor KUA.</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            
        <div class="section-title">
            <h2>Team</h2>
        </div>
        <div class="row">
            
            @foreach($data as $item)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <div class="member-img">
                <img src="pegawai/{{$item->foto}}" style="width: 250px;" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>{{$item->name}}</h4>
                <span>{{$item->jabatan}}</span>
              </div>
            </div>
        </div>
        @endforeach
    </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->
@include('user.component.footer')