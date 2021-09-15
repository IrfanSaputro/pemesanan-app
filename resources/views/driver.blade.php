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
          <a class="navbar-brand text-warning fw-bold" href="#">Driver</a>
          <div id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item me-3">
                <a href="/driver/tambah-data-driver" class="btn btn-info my-sm-0"><i class="fas fa-plus me-1"></i>Tambah Driver</a>
              {{-- </li>
              @foreach ($user as $user) --}}
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
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat, Tanggal Lahir</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php $number = 1 @endphp
                  @foreach ($driver as $dv)
                  <tr>
                    <th scope="row">{{ $number++ }}</th>
                    <td>{{ $dv->nama_driver }}</td>
                    <td>{{ $dv->tempat_lahir }}, {{ $dv->tanggal_lahir }}</td>
                    <td>{{ $dv->no_hp }}</td>
                    <td>
                      <a class="btn btn-warning" href="/driver/edit-data-driver/{{ $dv->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-edit"></i></a>
                      <a class="btn btn-danger" href="/driver/hapus-data-driver/{{ $dv->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="fas fa-trash" onclick="return confirm('Are you want to delete this user?');"></i></a>
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
