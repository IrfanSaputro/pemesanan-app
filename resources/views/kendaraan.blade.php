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
                <a href="/kendaraan/tambah-data-kendaraan" class="btn btn-info my-sm-0"><i class="fas fa-plus me-1"></i>Tambah Kendaraan</a>
              </li>
              {{-- @foreach ($user as $user) --}}
              <li class="nav-item">
                <div class="dropdown">
                  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="d-none d-sm-inline mx-1">{{ auth()->user()->name}}</span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                  </ul>
                </div>
              </li>
              {{-- @endforeach --}}
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
                    <th scope="col">Kendaraan</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Plat</th>
                    <th scope="col">Konsumsi<br>(km/liter)</th>
                    <th scope="col">Jadwal Service</th>
                    <th scope="col">Riwayat Pemakaian</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php $number = 1 @endphp
                  @foreach ($kendaraan as $kd)
                  <tr>
                    <th scope="row">{{ $number++ }}</th>
                    <td>{{ $kd->nama_kendaraan }}</td>
                    <td>{{ $kd->warna }}</td>
                    <td>{{ $kd->plat }}</td>
                    <td>{{ $kd->konsumsi_bbm }}</td>
                    <td>{{ $kd->jadwal_service }}</td>
                    <td><a class="btn btn-info" href="">Lihat Riwayat</a></td>
                    <td>
                      <a class="btn btn-warning" href="/kendaraan/edit-data-kendaraan/{{ $kd->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-edit"></i></a>
                      <a class="btn btn-danger" href="/kendaraan/hapus-data-kendaraan/{{ $kd->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="fas fa-trash" onclick="return confirm('Apakah anda ingin menghapus data ini?');"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
  </body>
</html>
