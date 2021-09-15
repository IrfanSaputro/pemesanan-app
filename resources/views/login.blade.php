<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.head')

    <title>Penyewaan Kendaraan</title>
  </head>
  <body>
    <div class="container justify-content-center mt-5 pt-5">
      <div class="row g-0 justify-content-center">
        <div class="col-md-4 bg-primary">
          <h3 class="text-center text-warning fw-bold justify-content-center mt-5 pt-5" id="app-title">Penyewaan Kendaraan</h3>
        </div>
        <div class="col-md-6 bg-white">
          <form class="m-2 p-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-4">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password"/>
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-2">
              <button type="submit" class="btn btn-primary form-control">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
