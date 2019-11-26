<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>

<section class="container-fluid fixed-top bg-second-alpha d-none d-md-block">
    <nav id="menu" class="menu container d-flex flex-wrap justify-content-between align-items-end px-0">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-17.svg" alt=""></a>
        <ul class="nav justify-content-end align-items-center">
            <li class="upper mx-2">
                <a class="bolder" href="#proyecto">Proyecto</a>
            </li>
            <li class="upper mx-2">
                <a class="bolder" href="#plantas">Plantas</a>
            </li>
            <li class="upper mx-2">
                <a class="bolder" href="#lugaresParaDescubrir">Ubicación</a>
            </li>
            <li class="upper mx-2">
                <a class="bolder" href="#contacto">Contacto</a>
            </li>
            <li class="upper mx-2 bg-primary px-2 py-1 rounded d-flex align-items-center justify-content-center">
                <a class="text-white bolder" href="#plantas">Cotizar</a>
            </li>
        </ul>
    </nav>
</section>
<nav class="d-none bg-alpha fixed-top p-4 justify-content-around align-items-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_La_Huasa-03.svg" alt="">
    <a href="#plantas" class="btn-verde rounded upper px-3 py-1">Cotizar</a>
</nav>
<?php b4st_navbar_after();?>