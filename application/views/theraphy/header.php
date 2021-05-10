<!-- HEADER -->
<div class="site-wrap">
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar" role="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-11 col-xl-4">
                    <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">LTF Andrea Hernández<span class="text-primary">.</span> </a></h1>
                </div>
                <div class="col-12 col-md-8 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="<?= base_url('LTF_AndreaH') ?>"><span>Inicio</span></a></li>
                            <li><a href="<?= base_url('LTF_AndreaH/About') ?>"><span>About</span></a></li>
                            <li class="has-children">
                                <a href="services.html"><span>Servicios</span></a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="#">Terapia Fisica</a></li>
                                    <li><a href="#">Terapia de Masajes</a></li>
                                    <li><a href="#">Terapia Quiropráctica</a></li>
                                    <!-- <li class="has-children">
                                        <a href="#">Más</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Physical Therapy</a></li>
                                            <li><a href="#">Massage Therapy</a></li>
                                            <li><a href="#">Chiropractic Therapy</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            <li><a href="tel://<?php echo $tphone ?>"><span>Contacto</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>
</div>
</header>

<!-- END HEADER -->