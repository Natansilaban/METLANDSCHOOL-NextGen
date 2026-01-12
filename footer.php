    </main>
    <!-- Main Content End -->
    
    <!-- Footer -->
    <footer class="footer">
        <?php $base_path = get_base_path(); ?>
        <div class="footer-main section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Tentang SMK Metland</h4>
                            <p>SMK Metland Cileungsi adalah Sekolah Menengah Kejuruan dengan standar internasional yang fokus pada bidang Pariwisata. Berdiri di bawah naungan Yayasan Pendidikan Metland.</p>
                            <div class="footer-social">
                                <a href="https://wa.me/<?php echo SOCIAL_WHATSAPP; ?>" target="_blank" class="social-link">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" class="social-link">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" class="social-link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="<?php echo SOCIAL_YOUTUBE; ?>" target="_blank" class="social-link">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Menu</h4>
                            <ul class="footer-links">
                                <li><a href="<?php echo $base_path; ?>index.php">Beranda</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/tentang.php">Tentang Sekolah</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/program.php">Program Keahlian</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/kurikulum.php">Kurikulum</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/berita.php">Berita Sekolah</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/fasilitas.php">Fasilitas</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/kontak.php">Kontak</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/ebook.php">E-BOOK</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/college.php">College</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/bkk.php">BKK</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/ppdb.php">PPDB</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Program Keahlian</h4>
                            <ul class="footer-links">
                                <li><a href="<?php echo $base_path; ?>pages/program.php?jurusan=perhotelan">Perhotelan</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/program.php?jurusan=kuliner">Kuliner</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/program.php?jurusan=teknik-informatika">Teknologi Informasi</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/program.php?jurusan=akuntansi-bisnis">Akuntansi Bisnis</a></li>
                                <li><a href="<?php echo $base_path; ?>pages/program.php?jurusan=desain-komunikasi-visual">Desain Komunikasi Visual</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Kontak Kami</h4>
                            <ul class="footer-contact">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span><?php echo CONTACT_ADDRESS; ?></span>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <a href="tel:<?php echo CONTACT_PHONE; ?>"><?php echo CONTACT_PHONE; ?></a>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>
                                </li>
                                <li>
                                    <i class="fab fa-whatsapp"></i>
                                    <a href="https://wa.me/<?php echo SOCIAL_WHATSAPP; ?>" target="_blank">WhatsApp</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="copyright">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="developer">Developed with <i class="fas fa-heart"></i> for Education</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Back to Top Button -->
    <button id="back-to-top" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    
    <!-- JavaScript Files -->
    <script src="<?php echo get_asset_path('assets/js/main.js'); ?>?v=<?php echo ASSETS_VERSION; ?>"></script>
</body>
</html>
