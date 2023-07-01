<!DOCTYPE html>
<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

  <?php include('components/preloader.php'); ?>

  <?php include('components/nav.php'); ?>

    <div class="social-media">
      <div class="layer"></div>
      <!-- end layer -->
      <div class="inner">
        <h5>Redes Sociais</h5>
        <ul>
          <li>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <main>

    <?php include('components/aside.php'); ?>
      
      <header class="slider">
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <div
              class="swiper-slide"
              data-background="images/slide01.png"
            ></div>
            <div
              class="swiper-slide"
              data-background="images/slide02.jpg"
            ></div>
            <div
              class="swiper-slide"
              data-background="images/slide02.jpg"
            ></div>
          </div>
          <!-- end swiper-wrapper -->
          <div class="slide-progress">
            <!-- <span>01</span> -->
            <div class="swiper-pagination"></div>
            <!-- <span>03</span> -->
          </div>
          <!-- end slide-progress -->
          <div class="swiper-button-prev">PREV</div>
          <!-- end button-prev -->
          <div class="swiper-button-next">NEXT</div>
          <!-- end buttin-next -->
        </div>
        <!-- end gallery-top -->
        <div class="swiper-container gallery-thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <span>Transforme</span> <a href="#">Ideias em Resultados!</a><?= "teste" ?>
            </div>
            <div class="swiper-slide">
              <span>Desperte</span>
              <a href="#">sua Marca para o Mundo Digital!</a>
            </div>
            <div class="swiper-slide">
              <span>Amplie</span>
              <a href="#">seu Alcance, Aumente seu Sucesso!</a>
            </div>
          </div>
          <!-- end swiper-wrapper -->
        </div>
        <!-- end gallery-thumbs -->
      </header>
      <section class="icon-content-block">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 wow" data-splitting>
              <h3 class="section-title">
                IDÉIAS PARA<br />
                TRANSFORMAR SUA MARCA
              </h3>
            </div>
            <!-- end col-12 -->
            <div class="col-lg-3 col-md-4 wow" data-splitting>
              <div class="content-block">
                <figure><img src="images/icon01.png" alt="Image" /></figure>
                <h6>Branding</h6>
                <ul>
                  <li>Desenvolvimento de Logomarca</li>
                  <li>Flyers</li>
                  <li>Cartões</li>
                  <li>Identidade Visual</li>
                </ul>
              </div>
              <!-- end content-block -->
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-4 wow" data-splitting>
              <div class="content-block selected">
                <figure><img src="images/icon02.png" alt="Image" /></figure>
                <h6>Desenvolvimento</h6>
                <ul>
                  <li>Sites</li>
                  <li>Banco de Dados</li>
                  <li>Aplicativos Mobile</li>
                  <li>Aplicações Robustas</li>
                </ul>
              </div>
              <!-- end content-block -->
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-4 wow" data-splitting>
              <div class="content-block">
                <figure><img src="images/icon03.png" alt="Image" /></figure>
                <h6>Marketing Digital</h6>
                <ul>
                  <li>Redes Sociais</li>
                  <li>Vídeos</li>
                  <li>Animações</li>
                  <li>Carrossel de Imagens</li>
                </ul>
              </div>
              <!-- end content-block -->
            </div>
            <!-- end col-3 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
      <!-- end icon-content-block -->
      <section class="works">
        <ul>
          <li>
            <figure class="reveal-effect masker wow">
              <a href="case-single.php"
                ><img src="images/Site_01_780x1000_02.jpg" alt="Image"
              /></a>
            </figure>
            <div class="caption wow" data-splitting>
              <h3>Mike's Friday</h3>
              <small>BRANDING, DIGITAL, MARKETING</small>
            </div>
            <!-- end caption -->
          </li>
          <li>
            <figure class="reveal-effect masker wow">
              <a href="images/works02.jpg" data-fancybox
                ><img src="images/works02.jpg" alt="Image"
              /></a>
            </figure>
            <div class="caption wow" data-splitting>
              <h3>Goddes Cover Art</h3>
              <small>PRINT, DIGITAL, DEVELOPMENT</small>
            </div>
            <!-- end caption -->
          </li>
          <li>
            <figure class="reveal-effect masker wow">
              <a href="images/works03.jpg" data-fancybox
                ><img src="images/works03.jpg" alt="Image"
              /></a>
            </figure>
            <div class="caption wow" data-splitting>
              <h3>Hard Employee</h3>
              <small>WEB, DIGITAL, DEVELOPMENT</small>
            </div>
            <!-- end caption -->
          </li>
          <li>
            <figure class="reveal-effect masker wow">
              <a href="images/works04.jpg" data-fancybox
                ><img src="images/works04.jpg" alt="Image"
              /></a>
            </figure>
            <div class="caption wow" data-splitting>
              <h3>Sweet Berry Pie</h3>
              <small>DIGITAL, PRINT, DEVELOPMENT</small>
            </div>
            <!-- end caption -->
          </li>
          <li>
            <figure class="reveal-effect masker wow">
              <a href="images/works05.jpg" data-fancybox
                ><img src="images/works05.jpg" alt="Image"
              /></a>
            </figure>
            <div class="caption wow" data-splitting>
              <h3>King of Roosters</h3>
              <small>PRINT, DIGITAL, DEVELOPMENT</small>
            </div>
            <!-- end caption -->
          </li>
          <li>
            <figure class="reveal-effect masker wow">
              <a href="images/works06.jpg" data-fancybox
                ><img src="images/works06.jpg" alt="Image" />
              </a>
            </figure>
            <div class="caption wow" data-splitting>
              <h3>Primero Car</h3>
              <small>WEB, DIGITAL, DEVELOPMENT</small>
            </div>
            <!-- end caption -->
          </li>
        </ul>
      </section>
      <!-- end works -->
      <section class="clients">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 wow" data-splitting>
              <h3 class="section-title">
                EMPRESAS QUE<br />
                DERAM UM<br />
                TÁ-ON EM SEU <br />
                CONTEÚDO
              </h3>
            </div>
            <!-- end col-5 -->
            <div class="col-lg-7">
              <ul>
                <li class="reveal-effect masker wow">
                  <img src="images/logo01.png" alt="Image" />
                </li>
                <li class="reveal-effect masker wow">
                  <img src="images/logo02.png" alt="Image" />
                </li>
                <li class="reveal-effect masker wow">
                  <img src="images/logo03.png" alt="Image" />
                </li>
                <li class="reveal-effect masker wow">
                  <img src="images/logo04.png" alt="Image" />
                </li>
                <li class="reveal-effect masker wow">
                  <img src="images/logo05.png" alt="Image" />
                </li>
                <li class="reveal-effect masker wow">
                  <img src="images/logo06.png" alt="Image" />
                </li>
                <li class="reveal-effect masker wow">
                  <img src="images/logo07.png" alt="Image" />
                </li>
                <li class="reveal-effect masker wow">
                  <img src="images/logo08.png" alt="Image" />
                </li>
                <li class="reveal-effect masker wow">
                  <img src="images/logo09.png" alt="Image" />
                </li>
              </ul>
            </div>
            <!-- end col-7 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
      <!-- end clients -->
    </main>
    <!-- end main -->

    <?php include('components/footer.php'); ?>

  </body>
</html>