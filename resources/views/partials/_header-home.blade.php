<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"> <!-- <img src="img/logo.png" alt="logo"> --> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent" style="margin-right: -5vw;">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profil
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/visi-misi') }}">Visi dan Misi</a>
                                    <a class="dropdown-item" href="{{ url('/structure-organization') }}">Struktur Organisasi</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Galeri
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/gallery-photo') }}">Foto Dokumentasi</a>
                                    <a class="dropdown-item" href="{{ url('/gallery-video') }}">Video</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('news') }}">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('work-program') }}">Program Kerja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('services') }}">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.google.com" target="_blank">IRAMA</a>
                            </li>
                            <!-- <li class="d-none d-lg-block">
                                <a class="btn_1" href="#">Get a Quote</a>
                            </li> -->
                            <li style="margin-left: 12vw;" class="d-lg-none d-md-block">
                                <form class="input-group mb-3" style="margin-top: 1vw;">
                                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append" style="height: 38px;">
                                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search h4 text-body"></i></button>
                                    </div>
                                </form>
                            </li>

                            <li class="d-none d-lg-block">
                                <form class="input-group mb-3" style="margin-top: 1vw;">
                                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append" style="height: 38px;">
                                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search h4 text-body"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>