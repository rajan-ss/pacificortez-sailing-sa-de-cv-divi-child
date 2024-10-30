<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="site-wrapper">

    <header class="site-header py-3 lg:py-6 bg-white"">
      <div class="container flex flex-wrap items-center">
        <div class="w-[87px] xl:w-[102px]">
          <picture class="[&_img]:w-full">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/cabo-sailing-logo.png" type="image/png">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/cabo-sailing-logo.png" alt="Cabo Sailing Logo" width="87" height="53" loading="lazy">
          </picture>
        </div>
        <div class="nav-holder flex-1 flex justify-end">
          <nav class="nav xl:gap-[4%]">
            <ul class="nav-list">
              <li><a class="js-has-smooth" href="#about-us">About Us</a></li>
              <li><a class="js-has-smooth" href="#services">Services</a></li>
              <li><a class="js-has-smooth" href="#vessels">Vessels</a></li>
              <li><a class="js-has-smooth" href="#promotions">Promotions</a></li>
              <li><a class="js-has-smooth" href="#why-choose-us">Why Choose Us</a></li>
              <li><a class="js-has-smooth" href="#testimonials">Testimonials</a></li>
            </ul>
            <ul class="flex flex-wrap gap-[15px]">
              <li>
                <a href="#contactForm" class="btn btn-secondary js-has-smooth relative overflow-hidden">
                  <span class="absolute inset-0 bg-white"></span>
                  <span class="absolute inset-0 flex justify-center items-center">
                    Contact Us
                  </span>
                  Contact Us
                </a>
              </li>
              <li>
                <a href="#headerbooknow" class="btn btn-primary relative overflow-hidden" data-fancybox>
                  <span class="absolute inset-0 bg-white"></span>
                  <span class="absolute inset-0 flex justify-center items-center">
                    Book Now
                  </span>
                  Book Now
                </a>
                <div id="headerbooknow" class="hidden">
                  <iframe seamless="" width="100%" height="1000px" frameborder="0" class="rezdy" src="https://cabosailing.rezdy.com/catalog/561444/private-yachts?iframe=true"></iframe>
                </div>
              </li>
            </ul>
          </nav>
        </div>
        <a href="#" class="opener"><span></span></a>
      </div>
    </header>
    <!-- /.site-header -->

    <main class="site-content">
      <section class="flex items-center relative bg-cover bg-center bg-no-repeat z-[1] pt-28 pb-16 lg:pt-52 lg:pb-40 xl:pb-28 2xl:min-h-[718px] md:text-base before:absolute before:top-0 before:left-0 before:right-0 before:bottom-0 before:bg-[linear-gradient(to_top,_rgba(0,68,147,0)_0%,rgba(0,68,147,0)_18%,rgba(0,63,135,0.56)_40%,rgba(0,63,135,1)_100%)] lg:before:bg-[linear-gradient(to_left,_rgba(0,68,147,0)_38%,rgba(0,68,147,0)_39%,rgba(0,63,135,0.60)_65%,rgba(0,63,135,1)_100%)] before:z-[-1]" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/hero-banner.png');">
        <div class="container">
          <div class="text-white [&_h1]:text-white max-w-[672px]">
            <strong class="category tracking-[1px] lg:tracking-[2px] xl:tracking-[3.20px]">Welcome Aboard! <i class="icon-long-arrow-right"></i></strong>
            <h1>Cabo Sailing Ocean Adventures</h1>
            <strong class="block text-primary font-medium mb-1 lg:mb-2">Luxury Yachts & Sailing Rentals in Cabo San Lucas, Mexico</strong>
            <p>Our dedicated crew is committed to exceed your expectations from this moment on. We invite you to choose either your desired boat or desired cruise below.</p>
            <div class="pt-6 ">
              <a href="#herobooknow" class="btn btn-primary relative overflow-hidden" data-fancybox>
                <span class="absolute inset-0 bg-white"></span>
                <span class="absolute inset-0 flex justify-center items-center">
                  Book Now
                </span>
                Book Now
              </a>
              <div id="herobooknow" class="hidden">
                <iframe seamless="" width="100%" height="1000px" frameborder="0" class="rezdy" src="https://cabosailing.rezdy.com/catalog/561444/private-yachts?iframe=true"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>