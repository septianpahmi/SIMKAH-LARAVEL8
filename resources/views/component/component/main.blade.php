<main id="main" class="main">

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <h1 class="breadcrumb-item active">Selamat Datang, </h1>
      <h1>&nbsp; {{Auth::user()->name}}</h1>
    </ol>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">Sistem Informasi Manajemen Nikah Kecamatan Warungkondang</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{session()->get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              
<section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-6 col-md-7">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Daftar Nikah Online</h5>
                    <div class="post-item clearfix">
                    <img src="assets1/img/bg-dashboard.jpg" style="width: 535px;"  alt="Nama Gambar" class="gambar">
                      <a href="{{url('/home/daftar-nikah', auth()->user()->id)}}" class="tombol" style="btn btn-primary">DAFTAR NIKAH</a>
                    </div>
                  
                </div>
              
              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-5">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title"></span></h5>

                    <div class="text-center">
                    <img src="assets1/img/profile-img.jpg" class="rounded-circle" alt="">
                    <h6>{{Auth::user()->name}}</h6>
                    <span class="text-muted small pt-2 ps-1">{{Auth::user()->email}}</span>
                </div>

              </div>
            </div><!-- End Revenue Card -->
          </div>
</section>
@if (Auth::user()->role== 'admin')
    
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Pendaftaran</h5>
          @if(session()->has('verif'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{session()->get('verif')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              @if(session()->has('tolak'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-x-circle me-1"></i>
                {{session()->get('tolak')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              @if(session()->has('delete'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-x-circle me-1"></i>
                {{session()->get('delete')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">No. Pendaftaran</th>
                <th scope="col">Nama Suami</th>
                <th scope="col">Nama Istri</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $item)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $item->kode_pendaftaran }}</td>
                <td>{{ $item->suamiId->nama}}</td>
                <td>{{ $item->istriId->nama}}</td>
                <td>{{ $item->jadwalId->tanggal_akad }}</td>
                <td>{{ $item->status }}</td>
                <td>
                  <a href="{{url('/home/daftar-nikah/delete',$item->id)}}" onclick="return confirm('Anda yakin ingin menghapus?')" class="badge bg-danger" type="button"><span class="bi bi-trash-fill"></span></a>
                  <a href="{{url('/home/daftar-nikah/verif',$item->id)}}" class="badge bg-success" type="button"><span class="bi bi-check-circle"></span></a>
                  <a href="{{url('/home/daftar-nikah/tolak',$item->id)}}" class="badge bg-dark" type="button"><span class="bi bi-x-circle"></span></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>
@endif
</main><!-- End #main -->