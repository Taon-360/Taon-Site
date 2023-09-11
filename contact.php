<!doctype html>
<html lang="en">
<?php include('components/head.php'); ?>

<body>

    <?php include('components/preloader.php'); ?>

    <?php include('components/nav.php'); ?>

    <?php include('components/socialmedia.php'); ?>

    <main>

        <?php include('components/aside.php'); ?>

        <header class="page-header">
            <div class="video-bg">
                <video src="videos/video02.mp4" muted loop autoplay></video>
            </div>
            <!-- end video-bg -->
            <div class="inner">
                <div class="container">
                    <h1>Contato</h1>
                    <p>Entre em Contato com a Ta On Agência 360: Conectando Ideias e Oportunidades</p>
                </div>
                <!-- end container -->
            </div>
            <!-- end inner -->
        </header>
        <!-- end page-header -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h3 class="section-title">Fale Conosco <br>e Deixe um Olá</h3>
                    </div>
                    <!-- end col-5 -->
                    <div class="col-lg-4 col-md-6">
                        <h6>Sede Central</h6>
                        <address>
                            Rua Guilherme Ellis, Nº95 <br> Belenzinho |
                            São Paulo - SP
                        </address>
                    </div>
                    <!-- end col-4 -->
                    <div class="col-lg-3 col-md-6">
                        <h6>Contate-nos Já</h6>
                        <address>
                            <p>(11) 99215 - 0742</p>
                            <a target="_blank" href="mailto:agencia@taon360.com.br">agencia@taon360.com.br</a>
                        </address>
                    </div>
                    <!-- end col-3 -->
                    <div class="col-lg-5">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.601428470774!2d-46.596111699999994!3d-23.546833700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5933acb46c09%3A0x4f23654fc925d3d!2sRua%20Dr.%20Guilherme%20Ellis%2C%2095%20-%20Belenzinho%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003163-080!5e0!3m2!1spt-PT!2sbr!4v1694035854374!5m2!1spt-PT!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <!-- end map -->
                    </div>
                    <!-- end col-5 -->
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <form id="contact" name="contact" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" autocomplete="off" required>
                                    <span>Seu Nome</span>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <input type="text" name="email" id="email" autocomplete="off" required>
                                    <span>Seu e-mail</span>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" autocomplete="off" required>
                                    <span>Assunto</span>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <textarea name="message" id="message" autocomplete="off" required></textarea>
                                    <span>Sua Menssagem</span>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <button id="submit" type="submit" name="submit">
                                        <strong>Enviar<b></b> <i></i></strong>
                                    </button>
                                </div>
                                <!-- end form-group -->
                            </form>
                            <!-- end form -->
                            <div class="form-group">
                                <div id="success" class="alert alert-success" role="alert"> Sua Mensagem foi enviada com
                                    Sucesso! entraremos em contato o mais rápido possível! </div>
                                <!-- end success -->
                                <div id="error" class="alert alert-danger" role="alert"> Algo deu Errado! Tente
                                    recarregar a página antes de tentar novamente! </div>
                                <!-- end error -->
                            </div>
                            <!-- end form-group -->
                        </div>
                        <!-- end contact-form -->
                    </div>
                    <!-- col-7 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end blog -->
    </main>
    <!-- end main -->
    <?php include('components/footer.php'); ?>
</body>

</html>