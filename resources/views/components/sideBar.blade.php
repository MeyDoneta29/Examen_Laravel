<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
      <!--begin::Brand Link-->
      <a href="../index.html" class="brand-link">
        <!--begin::Brand Image-->
        <img
          src="{{asset("assets/img/AdminLTELogo.png")}}"
          alt="AdminLTE Logo"
          class="brand-image opacity-75 shadow"
        />
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">Gestion|Notes</span>
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
            <a href="{{route('dashboard')}}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : ''}}">
              <i class="nav-icon bi bi-speedometer"></i>
              <p>Menu</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('Etudiant.index')}}" class="nav-link {{ request()->routeIs('Etudiant.index') ? 'active' : ''}}">
              <i class="nav-icon bi bi-person-circle"></i>
              <p>Etudiants</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('evaluation.noter')}}" class="nav-link {{ request()->routeIs('evaluation.noter') ? 'active' : ''}}">
              <i class="nav-icon bi bi-person-circle"></i>
              <p>Evaluation</p>
            </a>
          </li>

        </ul>
        <!--end::Sidebar Menu-->
      </nav>
    </div>
    <!--end::Sidebar Wrapper-->
  </aside>