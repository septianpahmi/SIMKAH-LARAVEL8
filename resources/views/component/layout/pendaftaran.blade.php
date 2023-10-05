@include('component.component.head')
@include('component.component.topbar')
@include('component.component.sidebar')
<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Pendaftaran</h5>

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
                      <a href="{{url('/home/pdf',$item->id)}}" target="_blank" class="btn btn-danger" type="button">Download</a>
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
</main><!-- End #main -->
@include('component.component.footer')
