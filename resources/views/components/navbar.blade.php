<div class="container-xxl d-none d-lg-block pt-1 text-center" style="z-index: 1042">
    <div class="d-flex justify-content-between mx-4">
        <ul class="list-unstyled d-inline-flex">
            <li class="mx-2">
                <a href="#" class="nav-link text-info" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
            </li>
            <li class="mx-2">
                <a href="https://www.facebook.com/profile.php?id=100094789821949&mibextid=LQQJ4d"
                    class="nav-link text-info" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
            </li>
            <li class="mx-2">
                <a href="https://twitter.com/oseiasibey_esq/status/1683222586480549889?s=20" class="nav-link text-info"
                    target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-twitter fa-lg"></i>
                </a>
            </li>
            <li class="mx-2">
                <a href="#" class="nav-link text-info" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-linkedin fa-lg"></i>
                </a>
            </li>
            <li class="mx-2">
                <a href="https://youtube.com/@Dr.DicksonOsei-AsibeyEsq" class="nav-link text-info" target="_blank"
                    rel="noopener noreferrer">
                    <i class="fab fa-youtube fa-lg"></i>
                </a>
            </li>
        </ul>
        <div class="d-inline"><span class="date me-2"></span><span class="time ms-2"></span></div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow"
    style="background-color: #0072bb !important; z-index: 1050 !important;" aria-label="" style="z-index: 1042">
    <div class="container-xxl justify-content-between ps-0 flex-nowrap">
        <a class="navbar-brand bg-none rounded px-1 d-flex text-truncate" href="{{ route('home') }}">
            <img src="{{ url('assets/images/dr.osei-logo.jpg') }}" class="d-none d-md-block" width="80"
                alt="">
            <span class="ps-1">Dr. Lawyer Dickson Osei-Asibey </span>
        </a>
        <button class="btn my-auto d-lg-none border-radius-0 bg-gray-200 me-n2" type="button"
            data-bs-toggle="sidebar-offcanvas" aria-controls="sidebar-offcanvas" aria-label="Toggle navigation">
            <span id="x-toggle" class="fas text-white fa-bars"></span>
        </button>

        <div class="nav d-none d-lg-block d-flex justify-content-end" id="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('portfolio') }}">PORTFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news') }}">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('agenda') }}">AGENDA(JEHDU)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('issues') }}">ISSUES</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('join') }}" class="btn btn-danger">JOIN</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
