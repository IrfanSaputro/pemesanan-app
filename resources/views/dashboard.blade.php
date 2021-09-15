<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.head')

    <title>{{ $title }}</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-primary bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-warning fw-bold" href="#">Penyewaan Kendaraan</a>
          <div id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item me-3">
                <a href="/dashboard/export-excel" class="btn btn-warning my-sm-0">Export</a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="d-none d-sm-inline me-1">{{ auth()->user()->name}}</span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <body>
      <div class="row g-0 mt-5">
        @include('layouts.sidebar')
        <div class="col-md-10 ms-auto pt-3">
          <!-- <h3 class="menu_title text-warning text-center">Dashboard</h3> -->
           <div class="row mt-4 g-0">
            <div class="col-md-11 bg-white ms-5">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tanggal Pesan</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Driver</th>
                    <th scope="col">Kendaraan</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @php $number = 1 @endphp
                  @foreach ($pesanan as $ps)
                  <tr>
                    <th scope="row">{{ $number++ }}</th>
                    <td>{{ $ps->tanggal_pesan }}</td>
                    <td>{{ $ps->tanggal_kembali }}</td>
                    <td>{{ $ps->nama_pemesan }}</td>
                    <td>{{ $ps->driver->nama_driver ?? 'None'}}</td>
                    <td>{{ $ps->kendaraan->nama_kendaraan ?? 'None'}}</td>
                    <td>Sudah Disetujui</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </body>
    {{-- @endforeach --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
