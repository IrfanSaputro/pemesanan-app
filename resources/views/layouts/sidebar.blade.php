        @if (auth()->user()->role == "pengawas")

        <div class="col-md-2 mt-2 pr-3 pt-4 bg-primary" id="sidebar">
          <ul class="nav flex-column ms-2">
            <li class="nav-item">
              <a class="nav-link text-light {{ ($title === "Dashboard") ? 'active' : ''}}" href="/"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
              <hr class="bg-light" />
            </li>
            <li class="nav-item">
              <a class="nav-link text-light {{ ($title === "Pesanan") ? 'active' : ''}}" href="/pesanan"><i class="fas fa-copy me-2"></i>Pesanan</a>
              <hr class="bg-light" />
            </li>
           </ul>
        </div>

        @else

        <div class="col-md-2 mt-2 pr-3 pt-4 bg-primary" id="sidebar">
          <ul class="nav flex-column ms-2">
            <li class="nav-item">
              <a class="nav-link text-light {{ ($title === "Dashboard") ? 'active' : ''}}" href="/"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
              <hr class="bg-light" />
            </li>
            <li class="nav-item">
              <a class="nav-link text-light {{ ($title === "Pesanan") ? 'active' : ''}}" href="/pesanan"><i class="fas fa-copy me-2"></i>Pesanan</a>
              <hr class="bg-light" />
            </li>
            <li class="nav-item">
              <a class="nav-link text-light {{ ($title === "Kendaraan") ? 'active' : ''}}" href="/kendaraan"><i class="fas fa-truck-pickup me-1"></i>Kendaraan</a>
              <hr class="bg-light" />
            </li>
            <li class="nav-item">
              <a class="nav-link text-light {{ ($title === "Driver") ? 'active' : ''}}" href="/driver"><i class="fas fa-user me-2"></i>Driver</a>
              <hr class="bg-light" />
            </li>
          </ul>
        </div>

        @endif

       