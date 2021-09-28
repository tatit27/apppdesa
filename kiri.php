<div class="nav fixed-top">
    <a class="nav-link" href="media.php?modul=home">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Beranda
    </a>
    <div class="sb-sidenav-menu-heading">Master Data</div>
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts" >
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        Data Umum
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="?modul=dtumum">Identitas Desa</a>
            <a class="nav-link" href="?modul=dtperades">Identitas Pegawai</a>
        </nav>
    </div>

    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        Data Penduduk
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="layout-static.html">Kepala Keluarga</a>
            <a class="nav-link" href="layout-sidenav-light.html">Individu</a>
        </nav>
    </div>

    <div class="sb-sidenav-menu-heading">Pelayanan</div>
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
        Surat-Menyurat
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                Kasi Pemerintahan
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="login.html">SKU</a>
                    <a class="nav-link" href="register.html">SKTM</a>
                    <a class="nav-link" href="password.html">N1</a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth2" aria-expanded="false" aria-controls="pagesCollapseAuth2">
                Kasi Pelayanan
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="pagesCollapseAuth2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="login.html">N1</a>
                    <a class="nav-link" href="register.html">N2</a>
                    <a class="nav-link" href="password.html">N3</a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth3" aria-expanded="false" aria-controls="pagesCollapseAuth3">
                Kaur Umum
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="pagesCollapseAuth3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="login.html">N1</a>
                    <a class="nav-link" href="register.html">N2</a>
                    <a class="nav-link" href="password.html">N3</a>
                </nav>
            </div>

        </nav>
    </div>
    <div class="sb-sidenav-menu-heading">Pengguna</div>
    <a class="nav-link collapsed" href="?modul=user">
        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
        Akun User
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <a class="nav-link" href="logout.php" onclick="return confirm('Apakah anda yakin ingin log out?')">
        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
        Log Out
    </a>
</div>