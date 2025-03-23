<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="./index.html" class="brand-link">
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">Aplikasi Kepegawaian</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false"
      >
          <li class="nav-item">
              <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon bi bi-speedometer"></i>
              <p>Dashboard</p>
              </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-box-seam-fill"></i>
              <p>
                Data Master
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('jabatan.index') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('unit-kerja.index') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Unit Kerja</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
              <a href="{{ route('pegawai.index') }}" class="nav-link">
              <i class="nav-icon bi bi-people"></i>
              <p>Data Pegawai</p>
              </a>
          </li>
      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>