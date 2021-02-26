<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Estratégia TI</h3>
        <p>
          Em parceria com <br>
          Estratégia Concursos<br>                    
          <strong>Email:<br></strong> contato.<br>estrategiaconcursosti@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Navegação</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php#quemsomos">Quem Somos</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php#cursos">Cursos</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php#servicos">Serviços</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="materiais.php">Materiais</a></li>
          <li><i class="bx bx-chevron-right"></i> <a target=_blank href="https://estrategiati.freeforums.net">Forum</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php#contato">Contato</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Nossos Serviços</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="discursivas.php">Discursivas</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="recursos.php">Recursos</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="coaching.php">Coaching e Mentoria</a></li>          
        </ul>
      </div>

      <script>
        grecaptcha.ready(function() {
          grecaptcha.execute('6LevWmcaAAAAAPNX6vXXo9u2Y4Go_qyZJzdhXm2y', {
            action: 'newsletter'
          }).then(function(token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse_newsletter');
            recaptchaResponse.value = token;
          });
        });
      </script>
      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Junte-se à nossa newsletter</h4>
        <p>Receba nossos emails sempre que tivermos novidades!</p>
        <form action="backend/newsletter.php" method="post">
          <input type="hidden" name="origem" value="footer">          
          <input type="email" name="email"><input type="submit" name="addtonewsletter" value="Inscrever-se">
          <input type="hidden" name="recaptcha_response" id="recaptchaResponse_newsletter">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container">

  <div class="copyright-wrap d-md-flex py-4">
    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>Estratégia Concursos TI</span></strong>. Todos os Direitos Reservados
      </div>

    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">            
      <a href="http://instagram.com/estrategiaconcursosti" class="instagram"><i class="bx bxl-instagram"></i></a>      
      <a href="t.me/estrategia_ti" class="telegram"><i class="bx bxl-telegram"></i></a>
      <a href="http://anchor.fm/estrategia-tech" class="podcast"><i class="bx bx-broadcast"></i></a>
    </div>
  </div>

</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>