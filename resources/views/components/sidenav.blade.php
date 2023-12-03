<nav class="sidebar sidebar-offcanvas overflow-y-auto" aria-label="sidebar-offcanvas">
    <div class="navbar-vertical m-3">
        <div class="sidenav-header text-center">

            <div class="d-flex justify-content-center mt-2">
                <div class="flex-column">
                    <div class="mx-2 date"></div>
                    <div class="mx-2 time"></div>
                </div>
            </div>
        </div>
        <hr class="horizontal mt-4 dark d-block" style="height: 4px">
        <div class="navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news') }}">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('agenda') }}">Agenda(JEHDU)</a>
              </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('issues') }}">Issues</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-danger" href="{{ route('join') }}">Join</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="backdrop"></div>
