 <!-- ======= Footer ======= -->
 <footer id="footer">
     <div class="container">
         <div class="copyright">
             <?php $config = $this->Default_m->getWhere('tabel_config', ['id_config' => 1])->row(); ?>
             &copy; Copyright <strong><span><?= $config->copyright; ?></span></strong>. <?= date('Y'); ?>
         </div>
         <div class="credits">
             <!-- All the links in the footer should remain intact. -->
             <!-- You can delete the links only if you purchased the pro version. -->
             <!-- Licensing information: https://bootstrapmade.com/license/ -->
             <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
             Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
         </div>
     </div>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 <!-- Vendor JS Files -->
 <script src="<?= base_url('assets/vendor/eterna/'); ?>assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?= base_url('assets/vendor/eterna/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url('assets/vendor/eterna/'); ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
 <script src="<?= base_url('assets/vendor/eterna/'); ?>assets/vendor/php-email-form/validate.js"></script>
 <script src="<?= base_url('assets/vendor/eterna/'); ?>assets/vendor/jquery-sticky/jquery.sticky.js"></script>
 <script src="<?= base_url('assets/vendor/eterna/'); ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
 <script src="<?= base_url('assets/vendor/eterna/'); ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
 <script src="<?= base_url('assets/vendor/eterna/'); ?>assets/vendor/counterup/counterup.min.js"></script>
 <script src="<?= base_url('assets/vendor/eterna/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="<?= base_url('assets/vendor/eterna/'); ?>assets/vendor/venobox/venobox.min.js"></script>

 <!-- Template Main JS File -->
 <script src="<?= base_url('assets/vendor/eterna/'); ?>assets/js/main.js"></script>

 </body>

 </html>