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
                  </div>
                    <hr>
                  <!-- Normal Sizing -->
                  <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link">1. JADWAL</a></li>
                        <li class="page-item"><a class="page-link">2. LOKASI</a></li>
                      <li class="page-item"><a class="page-link">3. CALON SUAMI</a></li>
                      <li class="page-item"><a class="page-link">4. CALON ISTRI</a></li>
                      <li class="page-item"><a class="page-link">5. WALI NIKAH</a></li>
                      <li class="page-item active" aria-current="page">
                        <span class="page-link">6. DATA DOKUMEN</span>
                      </li>
                    </ul>
                  </nav><!-- End Normal Sizing -->
                  <h5 class="card-title">Dokumen Yang Harus Dibawa</h5>
                  <form action="{{url('/home/daftar-nikah/daftar-post')}}" method="POST" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="nik" class="form-label">Persyaratan Dokumen Suami</label>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" name="suratketerangan_suami" type="checkbox" id="gridCheck1" value="yes" checked>
                            <label class="form-check-label" for="gridCheck1">
                              Surat Keterangan Untuk Nikah (Didapat dari Kelurahan)
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="persetujuan_suami" type="checkbox" id="gridCheck2" value="yes" checked>
                            <label class="form-check-label" for="gridCheck2">
                              Persetujuan Calon Mempelai
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="akta_suami" type="checkbox" id="gridCheck3" value="yes" checked>
                            <label class="form-check-label" for="gridCheck3">
                              Fotokopi Akta Kelahran
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="ktp_suami" type="checkbox" id="gridCheck4" value="yes" checked>
                            <label class="form-check-label" for="gridCheck4">
                              Fotokopi KTP 
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="kk_suami" type="checkbox" id="gridCheck5" value="yes" checked>
                            <label class="form-check-label" for="gridCheck5">
                              Fotokopi Kartu Keluarga
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="paspoto2x3_suami" type="checkbox" id="gridCheck6" value="yes" checked>
                            <label class="form-check-label" for="gridCheck6">
                              Paspoto 2x3 4 Lembar
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="paspoto4x6_suami" type="checkbox" id="gridCheck30" value="yes" checked>
                            <label class="form-check-label" for="gridCheck30">
                              Paspoto 4x6 6 Lembar
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_izin_suami" type="checkbox" id="gridCheck7" value="yes" >
                            <label class="form-check-label" for="gridCheck7">
                              Surat Izin Orang Tua
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_dispen_suami" type="checkbox" id="gridCheck8" value="yes" >
                            <label class="form-check-label" for="gridCheck8">
                              Surat Dispensasi Pengadilan Agama bagi Calon berusia dibawah 19 Tahun
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_cerai_suami" type="checkbox" id="gridCheck9" value="yes" >
                            <label class="form-check-label" for="gridCheck9">
                              Surat Akta Cerai (Jika calon pengantin sudah cerai)
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_komandan_suami" type="checkbox" id="gridCheck10" value="yes" >
                            <label class="form-check-label" for="gridCheck10">
                              Surat Izin Komandan (Jika calon pengantin TNI atau POLRI)
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_kematian_suami" type="checkbox" id="gridCheck11" value="yes">
                            <label class="form-check-label" for="gridCheck11">
                              Surat Akta Kematian (Jika calon pengantin duda/janda ditinggal mati) & N5
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_wna_suami" type="checkbox" id="gridCheck12" value="yes">
                            <label class="form-check-label" for="gridCheck12">
                              Surat Izin Kedutaan bagi WNA
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_rekomendasi_suami" type="checkbox" id="gridCheck13" value="yes">
                            <label class="form-check-label" for="gridCheck13">
                              Surat Rekomendasi Nikah dari KUA setempat (Jika pernikahan diluar wilayah KUA)
                            </label>
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <label for="nik" class="form-label">Persyaratan Dokumen Istri</label>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" name="suratketerangan_istri" type="checkbox" id="gridCheck14" value="yes" checked>
                            <label class="form-check-label" for="gridCheck14">
                              Surat Keterangan Untuk Nikah (Didapat dari Kelurahan)
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="persetujuan_istri" type="checkbox" id="gridCheck15" value="yes" checked>
                            <label class="form-check-label" for="gridCheck15">
                              Persetujuan Calon Mempelai
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="akta_istri" type="checkbox" id="gridCheck16" value="yes" checked>
                            <label class="form-check-label" for="gridCheck16">
                              Fotokopi Akta Kelahran
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="ktp_istri" type="checkbox" id="gridCheck17" value="yes" checked>
                            <label class="form-check-label" for="gridCheck17">
                              Fotokopi KTP 
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="kk_istri" type="checkbox" id="gridCheck18" value="yes" checked>
                            <label class="form-check-label" for="gridCheck18">
                              Fotokopi Kartu Keluarga
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="paspoto2x3_istri" type="checkbox" id="gridCheck19" value="yes" checked>
                            <label class="form-check-label" for="gridCheck19">
                              Paspoto 2x3 4 Lembar
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="paspoto4x6_istri" type="checkbox" id="gridCheck20" value="yes" checked>
                            <label class="form-check-label" for="gridCheck20">
                              Paspoto 4x6 6 Lembar
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_izin_istri" type="checkbox" id="gridCheck21" value="yes">
                            <label class="form-check-label" for="gridCheck21">
                              Surat Izin Orang Tua
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_dispen_istri" type="checkbox" id="gridCheck22" value="yes">
                            <label class="form-check-label" for="gridCheck22">
                              Surat Dispensasi Pengadilan Agama bagi Calon berusia dibawah 19 Tahun
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_cerai_istri" type="checkbox" id="gridCheck23" value="yes">
                            <label class="form-check-label" for="gridCheck23">
                              Surat Akta Cerai (Jika calon pengantin sudah cerai)
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_komandan_istri" type="checkbox" id="gridCheck24" value="yes">
                            <label class="form-check-label" for="gridCheck24">
                              Surat Izin Komandan (Jika calon pengantin TNI atau POLRI)
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_kematian_istri" type="checkbox" id="gridCheck25" value="yes" >
                            <label class="form-check-label" for="gridCheck25">
                              Surat Akta Kematian (Jika calon pengantin duda/janda ditinggal mati) & N5
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_wna_istri" type="checkbox" id="gridCheck26" value="yes">
                            <label class="form-check-label" for="gridCheck26">
                              Surat Izin Kedutaan bagi WNA
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" name="surat_rekomendasi_istri" type="checkbox" id="gridCheck27" value="yes">
                            <label class="form-check-label" for="gridCheck27">
                              Surat Rekomendasi Nikah dari KUA setempat (Jika pernikahan diluar wilayah KUA)
                            </label>
                        </div>    
                    </div>
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" name="pedoman" type="checkbox" id="gridCheck28" value="yes" required>
                        <label class="form-check-label" for="gridCheck28">
                          Dengan mengklik ceklis ini, maka Anda SETUJU dan MEMPEDOMANI hal ini.
                        </label>
                    </div>  
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#largeModal">Pedoman</button>
                        <button type="submit" class="btn btn-success">Selanjutnya >></button>
                    </div>
                    <div class="modal fade" id="largeModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">PERHATIAN! </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Sebelum mensubmit data Anda wajib mempedomani hal berikut: <br>1. Data yang dimasukan valid
                                dan bisa dipertanggungjawabkan. Kesalahan penginputan bukan menjadi tanggungjawab KUA karena pengisian dilakukan
                                secara online. <br>2. Jika ada perbedaan data pada saat validasi berkas di KUA, maka Anda wajib melakukan pembaruan data 
                                terlebih dahulu di dinas Dukcapil daerah setempat. <br>3. Berdasarkan Peraturan Mentri Agama No. 20 Tahun 2019 Tentang pencatatan 
                                pernikahan, bagi calon pengantin yang sudah mendaftar secara online segera membawa berkas fisik ke kantor KUA yang dituju 
                                terkait Pemeriksaan Nikah MAKSIMAL 15 Hari kerja setelah pendaftaran onine. Jika tidak, maka calon pengantin harus MENGULANG 
                                mendaftar online kembali.
                            </div>
                        
                          </div>
                        </div>
                      </div><!-- End Large Modal-->        
                  </form><!-- End Multi Columns Form -->
    
                </div>
              </div>
    
        </div>
      </div>
</section>
</main><!-- End #main -->

@include('component.component.footer')
