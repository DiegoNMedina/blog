<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                        <h2 class="footer-heading mb-4">Servicios</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">Terapia Física</a></li>
                            <li><a href="#">Terapía de Masajes</a></li>
                            <li><a href="#">Terapia Quiropráctica</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                        <h2 class="footer-heading mb-4">Enlaces</h2>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('LTF_AndreaH/About') ?>">About</a></li>
                            <li><a href="<?= base_url('LTF_AndreaH/Servicios') ?>">Servicios</a></li>
                            <li><a href="tel://<?php echo $tphone ?>">Contáctame</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                        <h2 class="footer-heading mb-4">Contácto</h2>
                        <ul class="list-unstyled">
                            <li><a href="tel://<?php echo $tphone ?>"><?= $tphone ?></a></li>
                            <li><a href="#"><?= $tname ?></a></li>
                            <li><a href="#"><?= $theraphymail ?></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                        <h2 class="footer-heading mb-4">Sigueme</h2>
                        <a href="<?= $tfacebook ?>" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="<?= $tinsta ?>" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Suscríbete</h2>
                <form action="#" method="post" class="subscription">
                    <div class="input-group mb-3  d-flex align-items-stretch">
                        <input type="text" class="form-control bg-transparent" placeholder="Ingresa tu email" aria-label="Enter Email" aria-describedby="button-addon2">
                        <button class="btn btn-primary text-white" type="button" id="button-addon2">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-5 mt-5">
            <div class="col-12 text-md-center text-left">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | <a href="https://diegomedina.ml/"> <?= $name ?> </a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
</div>