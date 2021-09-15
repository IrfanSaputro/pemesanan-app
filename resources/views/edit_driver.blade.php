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
          <h3 class="menu_title text-warning text-center">Driver</h3>
          <div class="row mt-4 g-0">
            <div class="col-md-11 bg-white ms-5">
              {{-- @if ($errors->any()) --}}
              <form class="p-3" method="POST" action="/driver/update-data-driver/{{ $driver->id }}">
                @csrf
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Driver</label>
                  <input type="text" class="form-control @error('nama_driver') is-invalid @enderror" id="exampleFormControlInput1" name="nama_driver" value="{{ $driver->nama_driver }}"/>
                  @error('nama_driver')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control @error('usernamtempat_lahire') is-invalid @enderror" id="exampleFormControlInput1" name="tempat_lahir" value="{{ $driver->tempat_lahir }}"/>
                            @error('tempat_lahir')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-8">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="exampleFormControlInput1" name="tanggal_lahir" value="{{ $driver->tanggal_lahir }}"/>
                            @error('tanggal_lahir')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Telepon</label>
                  <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="exampleFormControlInput1" name="no_hp" value="{{ $driver->no_hp }}"/>
                   @error('no_hp')
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
