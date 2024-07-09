<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
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

    <header class="site-header absolute left-[16px] right-[16px] top-[40px] z-[999]">
      <div class="container py-3 rounded-lg flex flex-wrap items-center border-solid border-primary/10 bg-ss-grey-100/5 [box-shadow:4px_6px_24px_0px_rgba(0,_0,_0,_0.10)]">
        <div class="w-[87px]">
          <picture class="">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/cabo-sailing-logo.png" type="image/png">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/cabo-sailing-logo.png" alt="Cabo Sailing Logo" width="87" height="53" loading="lazy">
          </picture>
        </div>
        <div class="flex-1 flex justify-end">
          <ul class="flex flex-wrap gap-[15px]">
            <li class="max-sm:hidden">
              <a href="#contactForm" class="btn btn-secondary js-has-smooth relative overflow-hidden">
                <span class="absolute inset-0 bg-white"></span>
                <span class="absolute inset-0 flex justify-center items-center">
                  Contact Us
                </span>
                Contact Us
              </a>
            </li>
            <li>
              <a href="https://www.cabosailing.com/book-now/" class="btn btn-primary js-has-smooth relative overflow-hidden">
                <span class="absolute inset-0 bg-white"></span>
                <span class="absolute inset-0 flex justify-center items-center">
                  Book Now
                </span>
                Book Now
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!-- /.site-header -->

    <main class="site-content">
      <section class="relative z-[1] pt-36 lg:pt-48 pb-[137px] sm:pb-[240px] lg:pb-40 xl:pb-11 min-h-[640px] text-base">
        <div class="bg-no-repeat bg-center bg-cover absolute inset-0 z-[-1]" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/landing-page-bg01.jpg');">
        </div>
        <div class="container">
          <div class="text-white [&_h1]:text-white max-w-[672px]">
            <strong class="category">Welcome Aboard! <i class="icon-long-arrow-right"></i></strong>
            <h1>Cabo Sailing Ocean Adventures</h1>
            <strong class="block text-primary font-medium">Luxury Yachts & Sailing Rentals in Cabo San Lucas, Mexico</strong>
            <p>Our dedicated crew is committed to exceed your expectations from this moment on. We invite you to choose either your desired boat or desired cruise below.</p>
            <div class="pt-6 ">
              <a href="#contactForm" class="btn btn-primary js-has-smooth relative overflow-hidden">
                <span class="absolute inset-0 bg-white"></span>
                <span class="absolute inset-0 flex justify-center items-center">
                  Book Now
                </span>
                Book Now
              </a>
            </div>
          </div>
          <div class="absolute right-0 bottom-[-9%] sm:bottom-[-11%] lg:bottom-[-18%] z-[-1] w-[90%] sm:w-[75%] lg:w-[60%] xl:w-[46.4%]">
            <picture class="[&_img]:w-full">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/hero-boat-image.png" type="image/png">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hero-boat-image.png" width="845" height="578" loading="lazy" alt="Cabo Sailing Logo">
            </picture>
          </div>
        </div>
      </section>