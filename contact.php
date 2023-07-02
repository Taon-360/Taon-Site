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
                            Rua Diamantino, Nº5 | Mooca<br>
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
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.9642729981043!2d-46.5782233499931!3d-23.542140870087385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e0db34e2a37%3A0xb4b8c78de963ae0d!2sR.%20Diamantino%2C%205%20-%20Quarta%20Parada%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003174-070%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1625152887299!5m2!1spt-BR!2sus"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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