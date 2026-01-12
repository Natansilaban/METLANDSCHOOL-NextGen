<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') : htmlspecialchars(SITE_NAME . ' - ' . SITE_TAGLINE, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="SMK Metland Cileungsi - Sekolah Menengah Kejuruan dengan standar internasional di bidang Pariwisata. Penerimaan Peserta Didik Baru Tahun Ajaran 2026/2027.">
    <meta name="keywords" content="SMK Metland, SMK Cileungsi, Sekolah Kejuruan, Pariwisata, Perhotelan, Tata Boga, UPW, PPDB">
    <meta name="author" content="SMK Metland Cileungsi">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars(SITE_URL, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:title" content="<?php echo isset($page_title) ? htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') : htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="SMK Metland Cileungsi - The High Standard in Vocational Education">
    <meta property="og:image" content="<?php echo htmlspecialchars(get_asset_path('assets/images/og-image.jpg'), ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo htmlspecialchars(get_asset_path('assets/images/favicon.ico'), ENT_QUOTES, 'UTF-8'); ?>?v=<?php echo rawurlencode(ASSETS_VERSION); ?>">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo htmlspecialchars(get_asset_path('style.css'), ENT_QUOTES, 'UTF-8'); ?>?v=<?php echo rawurlencode(ASSETS_VERSION); ?>">
    
    <!-- Font Awesome (using CDN for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="<?php echo htmlspecialchars(isset($current_page) ? $current_page : 'home', ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Navigation -->
    <header class="site-header animate-header">
    <!-- Top Bar with Logo and PPDB -->
    <div class="navbar-top">
        <div class="container">
            <div class="navbar-top-wrapper">
                <?php $base_path = htmlspecialchars(get_base_path(), ENT_QUOTES, 'UTF-8'); ?>
                <a href="<?php echo $base_path; ?>index.php" class="navbar-brand animate-brand" aria-label="<?php echo htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8'); ?> Home">
                    <div class="logo-container">
                        <img src="<?php echo htmlspecialchars(get_asset_path('assets/images/cropped-cropped-cropped-LOGO-SMK-METLAND2-copy-1024x1024-4-120x120.png'), ENT_QUOTES, 'UTF-8'); ?>?v=<?php echo rawurlencode(ASSETS_VERSION); ?>" alt="<?php echo htmlspecialchars(SITE_NAME . ' - ' . SITE_TAGLINE, ENT_QUOTES, 'UTF-8'); ?>" class="logo-img animate-logo" onerror="this.style.display='none';">
                        <div class="logo-glow"></div>
                    </div>
                    <div class="brand-text animate-text">
                        <h3 class="brand-title">SMK Metland</h3>
                        <p class="brand-subtitle">Cileungsi</p>
                    </div>
                </a>
                <a href="<?php echo $base_path; ?>pages/ppdb.php" class="ppdb-link animate-cta">
                    <span class="ppdb-text">PPDB</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Bottom Bar with Menu -->
    <nav class="navbar navbar-main" role="navigation" aria-label="Main navigation">
        <div class="container">
            <div class="navbar-wrapper">
                <button class="navbar-toggler animate-toggler" type="button" id="mobile-menu-toggle" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="toggler-icon">
                        <span class="toggler-line"></span>
                        <span class="toggler-line"></span>
                        <span class="toggler-line"></span>
                    </div>
                    <span class="visually-hidden">Toggle navigation</span>
                </button>

                <div class="navbar-menu animate-menu" id="navbar-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item animate-nav-item <?php echo ($current_page == 'beranda') ? 'active' : ''; ?>">
                            <a href="<?php echo $base_path; ?>index.php" class="nav-link animate-link">
                                <span class="link-text">Beranda</span>
                                <span class="link-underline"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown animate-nav-item <?php echo (in_array($current_page, ['tentang','kampus'])) ? 'active' : ''; ?>">
                            <a href="<?php echo $base_path; ?>pages/tentang.php" class="nav-link dropdown-toggle animate-link" aria-haspopup="true" aria-expanded="false">
                                <span class="link-text">Tentang Sekolah</span>
                                <i class="fas fa-chevron-down dropdown-arrow" aria-hidden="true"></i>
                                <span class="link-underline"></span>
                            </a>
                            <ul class="dropdown-menu animate-dropdown">
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/tentang.php#sejarah">Sejarah SMK Metland</a></li>
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/tentang.php#visi-misi">VISI & MISI</a></li>
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/tentang.php#nilai-budaya">Nilai Budaya Sekolah</a></li>
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/kampus-cibitung.php">Kampus Cibitung</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown animate-nav-item <?php echo ($current_page == 'program') ? 'active' : ''; ?>">
                            <a href="<?php echo $base_path; ?>pages/program.php" class="nav-link dropdown-toggle animate-link" aria-haspopup="true" aria-expanded="false">
                                <span class="link-text">Program</span>
                                <i class="fas fa-chevron-down dropdown-arrow" aria-hidden="true"></i>
                                <span class="link-underline"></span>
                            </a>
                            <ul class="dropdown-menu animate-dropdown">
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/program.php?jurusan=perhotelan">Perhotelan</a></li>
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/program.php?jurusan=kuliner">Kuliner</a></li>
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/program.php?jurusan=teknik-informatika">Teknologi Informasi</a></li>
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/program.php?jurusan=akuntansi-bisnis">Akuntansi Bisnis</a></li>
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/program.php?jurusan=desain-komunikasi-visual">Desain Komunikasi Visual</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown animate-nav-item <?php echo (in_array($current_page, ['kurikulum','sarana','organisasi','ekstrakurikuler'])) ? 'active' : ''; ?>">
                            <a href="<?php echo $base_path; ?>pages/kurikulum.php" class="nav-link dropdown-toggle animate-link" aria-haspopup="true" aria-expanded="false">
                                <span class="link-text">Kurikulum</span>
                                <i class="fas fa-chevron-down dropdown-arrow" aria-hidden="true"></i>
                                <span class="link-underline"></span>
                            </a>
                            <ul class="dropdown-menu animate-dropdown">
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/kurikulum.php#kos">Kurikulum Operasional Sekolah</a></li>
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/sarana-praktik.php">Sarana Praktik Siswa</a></li>
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/organisasi.php">Organisasi</a></li>
                                <li class="dropdown-item"><a href="<?php echo $base_path; ?>pages/ekstrakurikuler.php">Ekstrakulikuler</a></li>
                            </ul>
                        </li>
                        <li class="nav-item animate-nav-item <?php echo ($current_page == 'berita') ? 'active' : ''; ?>">
                            <a href="<?php echo $base_path; ?>pages/berita.php" class="nav-link animate-link">
                                <span class="link-text">Berita Sekolah</span>
                                <span class="link-underline"></span>
                            </a>
                        </li>
                        <li class="nav-item animate-nav-item <?php echo ($current_page == 'fasilitas') ? 'active' : ''; ?>">
                            <a href="<?php echo $base_path; ?>pages/fasilitas.php" class="nav-link animate-link">
                                <span class="link-text">Fasilitas</span>
                                <span class="link-underline"></span>
                            </a>
                        </li>
                        <li class="nav-item animate-nav-item <?php echo ($current_page == 'kontak') ? 'active' : ''; ?>">
                            <a href="<?php echo $base_path; ?>pages/kontak.php" class="nav-link animate-link">
                                <span class="link-text">Kontak</span>
                                <span class="link-underline"></span>
                            </a>
                        </li>
                        <li class="nav-item animate-nav-item <?php echo ($current_page == 'ebook') ? 'active' : ''; ?>">
                            <a href="<?php echo $base_path; ?>pages/ebook.php" class="nav-link animate-link">
                                <span class="link-text">E-BOOK</span>
                                <span class="link-underline"></span>
                            </a>
                        </li>
                        <li class="nav-item animate-nav-item <?php echo ($current_page == 'college') ? 'active' : ''; ?>">
                            <a href="<?php echo $base_path; ?>pages/college.php" class="nav-link animate-link">
                                <span class="link-text">College</span>
                                <span class="link-underline"></span>
                            </a>
                        </li>
                        <li class="nav-item animate-nav-item <?php echo ($current_page == 'bkk') ? 'active' : ''; ?>">
                            <a href="<?php echo $base_path; ?>pages/bkk.php" class="nav-link animate-link">
                                <span class="link-text">BKK</span>
                                <span class="link-underline"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    </header>

    <script>
        (function(){
            // Scroll detection for hiding header
            var header = document.querySelector('.site-header');
            var lastScrollTop = 0;
            var isMenuOpen = false;

            window.addEventListener('scroll', function() {
                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                // Check if menu is open
                var menu = document.getElementById('navbar-menu');
                isMenuOpen = menu && (menu.classList.contains('open') || menu.classList.contains('active'));
                
                // Don't hide header if menu is open
                if (isMenuOpen) {
                    header.classList.remove('header-hidden');
                    return;
                }

                if (scrollTop > lastScrollTop) {
                    // Scrolling DOWN - hide header
                    if (scrollTop > 100) {
                        header.classList.add('header-hidden');
                    }
                } else {
                    // Scrolling UP - show header
                    header.classList.remove('header-hidden');
                }
                
                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
            }, false);

            var btn = document.getElementById('mobile-menu-toggle');
            var menu = document.getElementById('navbar-menu');
            if(!btn || !menu) return;
            btn.addEventListener('click', function(){
                var expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', (!expanded).toString());
                this.classList.toggle('active');
                menu.classList.toggle('open');
                // keep old class for compatibility with existing CSS
                menu.classList.toggle('active');
            });

            // Dropdown toggles for touch / mobile
            var dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            dropdownToggles.forEach(function(toggle){
                toggle.addEventListener('click', function(e){
                    if(window.innerWidth > 768) return; // let hover handle desktop
                    e.preventDefault();
                    var parent = this.closest('.nav-item');
                    var isOpen = parent.classList.contains('open');
                    if(isOpen){
                        parent.classList.remove('open');
                        this.setAttribute('aria-expanded','false');
                    } else {
                        parent.classList.add('open');
                        this.setAttribute('aria-expanded','true');
                    }
                });
            });
        })();
    </script>
    
    <!-- Main Content Start -->
    <main class="main-content">
