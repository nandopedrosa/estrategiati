<?php
include_once 'header.inc.php';
?>

<style>
  i {font-size:1.3rem; color: gray}  
</style>

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2 style="padding-left:40px">Materiais</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Materiais</li>
        </ol>
      </div>
    </div>
  </section><!-- End Breadcrumbs -->

  <section style="padding-top:50px;padding-bottom:50px;">

    <div class="col-lg-12">
      <?php
      require_once "backend/mensagens.php";
      ?>
    </div>

    <div class="container text-justify newsletter" style="padding-left:55px; padding-right:55px;">

      <p>Confira nossos materiais <span class="font-weight-bold">gratuitos</span> para estudos de Tecnologia da Informação para Concursos.</p>

      <p>Caso você queira se aprofundar e ter acesso aos últimos materiais (versões atualizadas) temos muito mais em nossos planos de assinatura (ver pacotes do Estratégia Concursos), tais como vídeos, resumos, mapas mentais, áudios, etc.</p>
      


      <!-- Recaptcha -->
      <script src="https://www.google.com/recaptcha/api.js?render=6LeQro8aAAAAAPSVQ5dx5-jL1thWs_S0VdKJxdm9"></script>
      <script>
        grecaptcha.ready(function() {
          grecaptcha.execute('6LeQro8aAAAAAPSVQ5dx5-jL1thWs_S0VdKJxdm9', {
            action: 'newsletter'
          }).then(function(token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse_newsletter');
            recaptchaResponse.value = token;
          });
        });
      </script>

      <h4 style="margin-top:48px;">Junte-se à nossa newsletter</h4>
      <p>Receba nossos emails sempre que tivermos novos materiais e outras novidades!</p>
      <form class="form-inline" action="backend/newsletter.php" method="post">
        <input type="hidden" name="origem" value="materiais">
        <input type="email" class="form-control mr-sm-2" name="email" id="email" placeholder="Seu Email" required />
        <button class="btn  btn-success" type="submit" name="addtonewsletter">Inscrever-se</button>
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse_newsletter">
      </form>


      <h2 class="mt-5 mb-5">Gestão e Governança de TI</h2>

      <div class="row">

        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">PMBOK 5a. edição</h5>
              <p class="card-text">Professor: Fernando Pedrosa</p>
              <p class="card-text">Formato: Apresentação <i class="bx bx-file"></i></p>
              <a href="https://drive.google.com/file/d/1aT_ohvQKfHoYHqhGc_ptaJ4PomEyQXRk/view?usp=sharing" class="btn btn-primary">Baixar</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">PMBOK 5a. edição (mapa)</h5>
              <p class="card-text">Professor: Fernando Pedrosa</p>
              <p class="card-text">Formato: Mapa Mental <i class="bx bx-sitemap"></i> </p>
              <a href="https://drive.google.com/file/d/1A2t1wCw6idCa_ZX3xyf-rqFuDYDsHG99/view?usp=sharing" class="btn btn-primary">Baixar</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">ITIL v3</h5>
              <p class="card-text">Professor: Fernando Pedrosa</p>
              <p class="card-text">Formato: Apresentação <i class="bx bx-file"></i></p>
              <a href="https://drive.google.com/file/d/186dtjb_U_jNTUfoavqXyath10XU9BaJm/view?usp=sharing" class="btn btn-primary">Baixar</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">COBIT 5</h5>
              <p class="card-text">Professor: Fernando Pedrosa</p>
              <p class="card-text">Formato: Apresentação <i class="bx bx-file"></i></p>
              <a href="https://drive.google.com/file/d/1C8fKrsPRg93kXEXanVGUuQIrlLuunA43/view?usp=sharing" class="btn btn-primary">Baixar</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">CMMI 1.3</h5>
              <p class="card-text">Professor: Fernando Pedrosa</p>
              <p class="card-text">Formato: Apresentação <i class="bx bx-file"></i></p>
              <a href="https://drive.google.com/file/d/1sfHxvTYaybIlmQOfnV4LtmR0qvi7dXXQ/view?usp=sharing" class="btn btn-primary">Baixar</a>
            </div>
          </div>
        </div>

      </div> <!-- END ROW -->

      <h2 class="mt-5 mb-5">Engenharia de Software</h2>

      <div class="row">

        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Pontos de Função</h5>
              <p class="card-text">Professor: Fernando Pedrosa</p>
              <p class="card-text">Formato: Apresentação <i class="bx bx-file"></i></p>
              <a href="https://drive.google.com/file/d/18kD4ZQ0jItfngMZ4pv-o_jv2kDCsbPSd/view?usp=sharing" class="btn btn-primary">Baixar</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Padrões de Projeto</h5>
              <p class="card-text">Professor: Fernando Pedrosa</p>
              <p class="card-text">Formato: Apresentação <i class="bx bx-file"></i></p>
              <a href="https://drive.google.com/file/d/1v5eANEiAC6xBd3X2ThJaXIlbHneMUZYY/view?usp=sharing" class="btn btn-primary">Baixar</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Padrões de Projeto (mapa)</h5>
              <p class="card-text">Professor: Fernando Pedrosa</p>
              <p class="card-text">Formato: Mapa Mental <i class="bx bx-sitemap"></i></p>
              <a href="https://drive.google.com/file/d/1pjmwuNo8SGNIFc7Mod9fDJxKkUFiUULW/view?usp=sharing" class="btn btn-primary">Baixar</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">UML</h5>
              <p class="card-text">Professor: Fernando Pedrosa</p>
              <p class="card-text">Formato: Apresentação <i class="bx bx-file"></i></p>
              <a href="https://drive.google.com/file/d/13s2H4YVqpasgd7-VylshW6w9y6swUzFr/view?usp=sharing" class="btn btn-primary">Baixar</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Scrum e XP</h5>
              <p class="card-text">Professor: Fernando Pedrosa</p>
              <p class="card-text">Formato: Apresentação <i class="bx bx-file"></i></p>
              <a href="https://drive.google.com/file/d/1-IyT1jzeUOWG6R6vI3GsFStanjs8wQ1L/view?usp=sharing" class="btn btn-primary">Baixar</a>
            </div>
          </div>
        </div>




      </div> <!-- END ROW -->


    </div>
  </section>

</main><!-- End #main -->

<?php
include_once 'footer.inc.php';
?>

<script>
  jQuery('header').addClass('header-inner-pages');
</script>