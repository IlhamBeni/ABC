<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/satu') ? 'active' : '' }}" href="/dashboard/satu">
              <span data-feather="file" class="align-text-bottom"></span>
              A
            </a>
          </li>

          <li class="nav-item {{ Request::is('dashboard/dua') ? 'active' : '' }}">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              B
            </a>
          </li>

          <li class="nav-item {{ Request::is('dashboard/tiga') ? 'active' : '' }}">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              C
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/empat') ? 'active' : '' }}" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              D
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/lima') ? 'active' : '' }}" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              E
            </a>
          </li>
          
      </div>
    </nav>
    