<!DOCTYPE html>
<html lang="en">
  <head>
    @include('/layouts.head')

    <title>{{ $title }}</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-primary bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-warning fw-bold" href="#">Penyewaan Kendaraan</a>
          <div id="navbarSupportedContent">
            <ul class="navbar-nav">
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
          <h3 class="menu_title text-warning text-center">Edit Data Kendaraan</h3>
          <div class="row mt-4 g-0">
            <div class="col-md-11 bg-white ms-5">
              {{-- @if ($errors->any()) --}}
              <form class="p-3" method="POST" action="/kendaraan/update-data-kendaraan/{{ $kendaraan->id }}">
                @csrf
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Kendaraan</label>
                  <input type="text" class="form-control @error('nama_kendaraan') is-invalid @enderror" id="exampleFormControlInput1" name="nama_kendaraan" value="{{ $kendaraan->nama_kendaraan }}"/>
                  @error('nama_kendaraan')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Warna</label>
                  <input type="text" class="form-control @error('warna') is-invalid @enderror" id="exampleFormControlInput1" name="warna" value="{{ $kendaraan->warna }}"/>
                   @error('warna')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Plat</label>
                  <input type="text" class="form-control @error('plat') is-invalid @enderror" id="exampleFormControlInput1" name="plat" value="{{ $kendaraan->plat }}"/>
                   @error('plat')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Konsumsi (km/liter)</label>
                  <input type="text" class="form-control @error('konsumsi_bbm') is-invalid @enderror" id="exampleFormControlInput1" name="konsumsi_bbm" value="{{ $kendaraan->konsumsi_bbm }}"/>
                   @error('konsumsi_bbm')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Jadwal Service</label>
                  <input type="date" class="form-control @error('jadwal_service') is-invalid @enderror" id="exampleFormControlInput1" name="jadwal_service" value="{{ $kendaraan->jadwal_service }}"/>
                   @error('jadwal_service')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="pt-3 px-3">
                  <input class="btn btn-danger" type="reset" value="Reset" onclick="document.getElementById('exampleFormControlInput1').reset()"/>
                  <input class="btn btn-info float-end" type="submit" value="Update" />
                </div>
              </form>
              {{-- @endif --}}
            </div>
          </div>
        </div>
      </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
