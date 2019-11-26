<?php
    get_template_part('includes/header'); 
    b4st_main_before();
?>

<main id="main" class="container-fluid p-0">
  <?php //get_template_part('includes/loops/index-loop'); ?>
    <section id="cabeceraProyecto" class="container-fluid p-0">
      <div class="owl-carousel owl-theme owl-header">
        <div class="img-carousel" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/img-slide-02.png') center center / cover no-repeat">
            <div class="cuadroGris"></div>
            <h2 class="textoHeader text-white upper bolder text-shadow">Ver & Vivir</h2>
        </div>
        <div class="img-carousel" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/img-slide-03.png') center center / cover no-repeat">
            <div class="cuadroGris"></div>
            <h2 class="textoHeader text-white upper bolder text-shadow">Ver & Vivir</h2>
        </div>
      </div>
    </section>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/deco-matte.svg" class="decoMatte" alt="">
    <section id="proyecto" class="py-4 p-md-5 d-flex align-items-center justify-content-center bg-second">
      <div class="container d-flex flex-column">
        <div id="cuadroItems" class="d-flex justify-content-around align-items-stretch flex-row mt-md-5 p-2 text-center">
          <div class="d-none d-md-block borde-separador"></div>
          <div class="d-flex flex-column m-md-1 text-center text-white">
            <p class="text-item-proyecto upper m-0">2 <span class="punto">•</span> 3</p>
            <p class="text-item-proyecto m-0 upper light">Dorms.</p>
          </div>
          <div class="d-none d-md-block borde-separador"></div>
          <div class="d-flex flex-column m-md-1 text-left text-white upper bolder">
            <p class="text-item-proyecto m-0">Departamentos <span class="punto">•</span> Dúplex</p>
            <p class="text-item-proyecto m-0">Dúplex con rooftop</p>
          </div>
          <div class="d-none d-md-block borde-separador"></div>
          <div class="d-flex flex-column m-md-1 text-left text-white">
            <p class="text-item-proyecto m-0 upper light">Desde</p>
            <p class="text-item-proyecto m-0 upper bolder">Uf 6.490<span class="astericos">*</span></p>
          </div>
          <div class="d-none d-md-block borde-separador"></div>
        </div>
        <div class="d-none d-md-block">
            <div class="d-flex flex-wrap align-items-start justify-content-center mt-5 text-center">
                <div class="flex-column col-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-proyecto-01.svg" class="icono-proyecto mb-3" alt="">
                    <p class="text-light-gray">Training<br>Zone</p>
                </div>
                <div class="flex-column col-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-proyecto-02.svg" class="icono-proyecto mb-3" alt="">
                    <p class="text-light-gray">Pet<br>Zone</p>
                </div>
                <div class="flex-column col-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-proyecto-03.svg" class="icono-proyecto mb-3" alt="">
                    <p class="text-light-gray">Punto de<br>Reparación</p>
                </div>
                <div class="flex-column col-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-proyecto-04.svg" class="icono-proyecto mb-3" alt="">
                    <p class="text-light-gray">Ecommerce<br>Lockers</p>
                </div>
                <div class="flex-column col-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-proyecto-05.svg" class="icono-proyecto mb-3" alt="">
                    <p class="text-light-gray">Carga Eléctrica<br>para Autos</p>
                </div>
                <div class="flex-column col-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-proyecto-06.svg" class="icono-proyecto mb-3" alt="">
                    <p class="text-light-gray">Laundry<br>Zone</p>
                </div>
                <div class="flex-column col-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-proyecto-07.svg" class="icono-proyecto mb-3" alt="">
                    <p class="text-light-gray">Coffee<br>& Work</p>
                </div>
            </div>
        </div>
        <div class="d-md-none">
            <div class="owl-carousel owl-theme owl-mobile d-flex flex-wrap align-items-start justify-content-center mt-5 text-center">
                <div class="flex-column mx-auto col-6 col-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-04.svg" class="icono-proyecto mb-3" alt="">
                    <p class="text-light-gray">Piscina</p>
                </div>
                <div class="flex-column mx-auto col-6 col-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-05.svg" class="icono-proyecto mb-3" alt="">
                    <p class="text-light-gray">Quincho</p>
                </div>
                <div class="flex-column mx-auto col-6 col-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-06.svg" class="icono-proyecto mb-3" alt="">
                    <p class="text-light-gray">Hobby Room<br>(opcional)</p>
                </div>
                <div class="flex-column mx-auto col-6 col-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconos-07.svg" class="icono-proyecto mb-3" alt="">
                    <p class="text-light-gray">Ascensor de Acceso</p>
                </div>
                </div>
                <p class="text-center light text-light-gray legal">
                    (*) Precio desde corresponde a depto. 402, no incluye estacionamiento ni bodega. (**) Superficie total corresponde a departamento 203 incluido jardín privado.
                </p>
            </div>
        </div>
    </section>
    <section id="plantas" class="p-5 d-flex flex-column align-items-center justify-content-center">
        <div class="container d-flex flex-column my-5">
            <h2 class="upper light text-center w-100">Elije tu próximo departamento</h2>
            <p id="texto-proyecto" class="text-center w-100">
                Edificio de 7 pisos con sólo 48 departamentos.
                <br>
                2 y 3 Dormitorios, Dúplex y Dúplex con Rooftop de 62 m2 a 137 m2
            </p>
        </div>
        <div class="d-none d-md-block mt-5">
            <div class="container d-flex flex-wrap">
                <div class="owl-carousel owl-theme owl-plantas">
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-A-piso-1.png" alt="" width="70%" class="img-planta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-A-piso-1.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light">Modelo A | 3D 3B</p>
                            <p class="tipo-planta">Dúplex</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-B-piso-1.png" alt="" width="70%" class="img-planta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-B-piso-2.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light">Modelo B | 3D 3B</p>
                            <p class="tipo-planta">Dúplex</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-B-RT-piso-1.png" alt="" width="70%" class="img-planta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-B-RT-piso-2.png" alt="" width="70%" class="img-planta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-B-RT-piso-3.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light">Modelo B | 3D 3B</p>
                            <p class="tipo-planta">Dúplex con Rooftop</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-C-piso-1.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light mt-5">Modelo C | 3D 2B</p>
                            <p class="tipo-planta">Departamento</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-C-piso-1.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light mt-5">Modelo C | 3D 2B</p>
                            <p class="tipo-planta">Departamento</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-C-RT-piso-1.png" alt="" width="70%" class="img-planta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-C-RT-piso-2.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light mt-5">Modelo C | 3D 2B</p>
                            <p class="tipo-planta">Departamento con Rooftop</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-D-piso-1.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light mt-5">Modelo D | 2D 2B</p>
                            <p class="tipo-planta">Departamento</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-D-RT-piso-1.png" alt="" width="70%" class="img-planta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-D-RT-piso-2.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light mt-5">Modelo D | 2D 2B</p>
                            <p class="tipo-planta">Departamento con Rooftop</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-E-piso-1.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light mt-5">Modelo E | 2D 2B</p>
                            <p class="tipo-planta">Departamento</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-E-RT-piso-1.png" alt="" width="70%" class="img-planta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-E-RT-piso-2.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light mt-5">Modelo E | 2D 2B</p>
                            <p class="tipo-planta">Departamento con Rooftop</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-F-piso-1.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light mt-5">Modelo F | 2D 2B</p>
                            <p class="tipo-planta">Departamento</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="owl-carousel owl-theme owl-esquicios">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-F-RT-piso-1.png" alt="" width="70%" class="img-planta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-F-RT-piso-2.png" alt="" width="70%" class="img-planta">
                        </div>
                        <div class="w-100 mb-0 que-planta d-flex flex-column align-self-end">
                            <p class="m-0 light mt-5">Modelo F | 2D 2B</p>
                            <p class="tipo-planta">Departamento con Rooftop</p>
                            <a href="//http://www.comercialinmobiliarias.cl/cotizador_web_new/cotizador/index.php?id_subagrupaciones=4&key=ileben&open_dialog=true" class="bg-primary upper text-white col-4 mx-auto p-2">
                                <p class="m-0">Cotizar</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="d-none d-md-block">
        <section id="comodidades" class="p-0 d-flex flex-wrap align-items-center justify-content-center bg-primary text-white">
            <div class="d-flex flex-wrap justify-content-center align-items-center col-12 col-md-4 p-5">
                <h2 class="upper light">La vida de barrio<br>se vive con Leben</h2>
            </div>
            <div class="d-flex flex-wrap justify-content-center align-items-center col-12 col-md-8 bg-white-2 p-5 align-self-stretch">
                <div class="col-12 col-md-8 m-auto">
                    <h2 class="mb-4">Inspiración - Arte - Cultura - Sabores<br>Entretención - Conectividad</h2>
                    <p class="">Edificio Matte, a pasos de Barrio Italia, Providencia y parques, es un lugar urbano y conectado, donde la vida de barrio se vive en cada espacio.</p>
                </div>
            </div>
        </section>
    </div>
    <section id="galeria" class="">
        <div id="container" class="col-7 alto-pantalla" data-contenedor="galeriaEntorno" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 160 }'>
            <div class="grid">
                <div class="grid-sizer"></div>
                <div class="grid-item" data-toggle="modal" data-target="#modalEntorno">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelo-F-RT-piso-1.png" />
                </div>
                <div class="grid-item" data-toggle="modal" data-target="#modalEntorno">
                    <img src="img/Mackay-School.png" />
                </div>
                <div class="grid-item" data-toggle="modal" data-target="#modalEntorno">
                    <img src="img/club-espanol-renaca.jpg" />
                </div>
                <div class="grid-item" data-toggle="modal" data-target="#modalEntorno">
                    <img src="img/tottus-renaca.jpg" />
                </div>
                <div class="grid-item" data-toggle="modal" data-target="#modalEntorno">
                    <img src="https://static.emol.cl/emol50/Fotos/2019/01/23/file_20190123120040.jpg" />
                </div>
                <div class="grid-item" data-toggle="modal" data-target="#modalEntorno">
                    <img src="https://media-cdn.tripadvisor.com/media/vr-splice-j/06/e7/e6/f4.jpg" />
                </div>
                <div class="grid-item" data-toggle="modal" data-target="#modalEntorno">
                    <img src="https://i.ytimg.com/vi/WHQ17TQ41dE/maxresdefault.jpg" />
                </div>
                <div class="grid-item" data-toggle="modal" data-target="#modalEntorno">
                    <img src="https://s2.latercera.com/wp-content/uploads/2019/09/Estero-Ren%CC%83aca-1-900x600.jpg" />
                </div>
                <div class="grid-item" data-toggle="modal" data-target="#modalEntorno">
                    <img src="https://www.blumenplatz.cl/images/2018/06/13/ranaca-445.jpg" />
                </div>
                <div class="grid-item" data-toggle="modal" data-target="#modalEntorno">
                    <img src="https://static.emol.cl/emol50/Fotos/2019/01/23/file_20190123120040.jpg" />
                </div>
            </div>
        </div>
    </section>
    <div class="d-none d-md-block">
        <section id="lugaresParaDescubrir" class="p-5 d-flex flex-column justify-content-center align-items-center">
            <h2 class="upper light text-center w-100 mb-5">Lugares para descubrir</h2>
            <div class="container d-flex flex-wrap p-0">
                <div class="col-12 col-md-8 p-0 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mapa-matte.png" alt="" width="70%">
                </div>
                <div class="col-12 col-md-4 pl-md-5 d-flex flex-wrap justify-content-center align-items-end">
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">1.</span> Café Condell</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">2.</span> Plazuela Bernardita Morín</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">3.</span> Café Literario P. Balmaceda</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">4.</span> Café Literario P. Bustamante</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">5.</span> Barbería Clásica</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">6.</span> Cafetería La Fiora</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">7.</span> Starbucks</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">8.</span> Café San Juan</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">9.</span> Restaurante Casaluz</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">10.</span> Pizzería Tío Tomate</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">11.</span> Bar Goodstock</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">12.</span> Parrilladas La Uruguaya</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">13.</span> Líder Express</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">14.</span> IF Teatro Italia</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">15.</span> Factoría Italiana</div>
                    <div class="ml-5 mr-auto light pl-md-2 col-2 col-md-12"><span class="numeroEntorno black">16.</span> Hospital del Salvador</div>
                </div>
            </div>
            <a href="https://www.google.com/maps/place/La+Huasa+1945,+Lo+Barnechea,+Regi%C3%B3n+Metropolitana/@-33.35604,-70.5255167,17z/data=!3m1!4b1!4m5!3m4!1s0x9662cbded91d94b3:0x4f2d9672f924e848!8m2!3d-33.35604!4d-70.523328" target="_blank" class="bg-dark rounded upper text-white text-center mt-5 px-5 py-3">Ver en google maps</a>
        </section>
    </div>
    <div class="p-4 d-md-none bg-dark text-center text-wite upper bolder">
        <a href="https://www.waze.com/ul?ll=-33.35586607%2C-70.52334309&navigate=yes&zoom=17" class="text-white" target="_blank">Ver ubicación en Waze</a>
    </div>
    <section id="contacto" class="p-5 d-flex flex-column justify-content-center align-items-center bg-second-3">
        <h2 class="upper light text-center w-100 mb-5">Encontrémonos <strong>en</strong></h2>
        <div class="container d-flex flex-wrap justify-content-between p-0">
            <div class="col-12 col-md d-flex flex-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-contacto-14.svg" width="20px" class="align-self-start">
                <div class="col d-flex flex-column px-3">
                    <p class="mt-n1 medium">Ventas</p>
                    <p class="light">
                        La Huasa 1945, La Dehesa
                        <br>
                        Cercano a Mall Portal La Dehesa
                    </p>
                </div>
            </div>
            <div class="col-12 col-md d-flex flex-wrap border-contacto-left pl-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-contacto-15.svg" width="20px" class="align-self-start">
                <div class="col d-flex flex-column px-3">
                    <p class="mt-n1 medium">Horario de Atención</p>
                    <p class="light">
                    Lunes 15:00 a 19:00 hrs.
                    <br>
                    Martes a Domingo 10:30 a 19:00 hrs.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md d-flex flex-wrap border-contacto-left pl-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-contacto-16.svg" width="20px" class="align-self-start">
                <div class="col d-flex flex-column px-3">
                    <p class="mt-n1 medium">Contacto</p>
                    <div class="d-flex flex-wrap m-0 p-0">
                        <p class="light col-12 col-md m-0 p-0">
                            (+56) 2 2948 7793
                        </p>
                        <p class="light col-12 col-md m-0 p-0">
                            (+56) 9 4002 0856
                        </p>
                    </div>
                    <a href="mailto:parquelahuasa@ileben.cl" class="light col-12 col-md m-0 p-0">
                        parquelahuasa@ileben.cl
                    </a>
                </div>
            </div>
            <p class="text-center text-md-left mt-5 light text-light-gray legal">
            Las imágenes, textos y contenidos en este impreso fueron elaborados con fines ilustrativos y no constituyen necesariamente una representación exacta de la realidad. Su objetivo es mostrar una caracterización general del proyecto y no cada uno de sus detalles. Verifique las especificaciones de su departamento al momento de comprar. Esto se informa en virtud de lo señalado en la Ley N°19.496 y según la Ley N°21.014, y DDU 361 de fecha 16 de junio de 2017. (*) Precio desde corresponde a departamento 301, incluye descuento, no incluye estacionamiento ni bodega.
            </p>
        </div>
    </section>
    <footer class="bg-dark p-5 m-0">
        <div class="container d-flex flex-wrap justify-content-around">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-17.svg" width="230px" class="">
            <div class="col-12 col-md p-2 text-center text-md-right">
                <p class="light text-light m-0">Síguenos en <a href="https://www.facebook.com/lebengrupoinmobiliario/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-18.svg" alt="" class="iconoRedes"></a><a href="https://www.instagram.com/lebengrupoinmobiliario/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-19.svg" alt="" class="iconoRedes"></a></p>
                <p class="light text-light-gray m-0">Todos los derechos reservados © 2018 Leben Grupo Inmobiliario.</p>
            </div>
        </div>
    </footer>
</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_template_part('includes/footer'); 
?>
