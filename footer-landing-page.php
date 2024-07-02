</main>

<footer class="site-footer">
  <section class=" relative bg-[url('../../assets/images/get-in-touch-bg-img')] bg-no-repeat bg-cover py-10 lg:py-12 xl:py-16 before:absolute before:inset-0 before:bg-gradient-to-r from-black from-1.25% via-black/90 via-42.53% to-white/0 to-99.24% before:opacity-90">
    <div class="container relative z-10 text-white [&_h2]:text-white">
      <div class="flex justify-center items-center -mx-12 max-lg:flex-wrap max-lg:gap-y-12 ">
        <div class="px-12">
          <strong class="category text-white"> Contact Us <span class="icon-long-arrow-right text-white"></span></strong>
          <h2>Get In Touch With Us.</h2>
          <div class="flex max-lg:justify-center justify-start flex-wrap -mx-4 xl:-mx-9 mb-5 sm:mb-6 lg:mb-8 2xl:mb-10"> <!-- Wrapper -->
            <div class="w-full sm:w-1/2 [&_p]:relative [&_p]:before:absolute [&_p]:before:bottom-[0.35rem] [&_p]:pl-9 [&_p]:before:left-0 [&_p]:before:bg-white [&_p]:before:w-[29px] [&_p]:before:h-[2px] [&_p]:before:rounded-lg px-4 lg:px-9 [&_p]:text-[12px]">
              <p>Phone Number and email</p>
              <div class="flex flex-col justify-around [&_a]:relative [&_a]:pl-14 [&_a]:text-white hover:[&_a]:text-white/50 [&_a]:duration-300 pb-8 min-h-[148px]">
                <a href="tel:526241438485"><i class="icon-call bg-white/15 size-[40px] flex justify-center items-center rounded-full absolute top-1/2 left-0 -translate-y-1/2"></i>+52 624 143 8485</a>
                <a href="tel:526241916997"><i class="icon-whatsapp bg-white/15 size-[40px] flex justify-center items-center rounded-full absolute top-1/2 left-0 -translate-y-1/2"></i>52 624 191 6997 <span>(Whatsapp)</span></a>
              </div>
            </div>
            <div class="w-full sm:w-1/2 min-h-[148px] [&_p]:relative [&_p]:before:absolute [&_p]:before:bottom-[0.35rem] [&_p]:pl-9 [&_p]:before:left-0 [&_p]:before:bg-white [&_p]:before:w-[29px] [&_p]:before:h-[2px] [&_p]:before:rounded-lg px-4 xl:px-9 [&_p]:text-[12px]">
              <p>Phone Number and email</p>
              <div class="flex flex-col justify-evenly [&_a]:relative [&_a]:pl-14 [&_a]:text-white hover:[&_a]:text-white/50 [&_a]:duration-300 min-h-[124px]">
                <a href="#"><i class="icon-pin bg-white/15 size-[40px] flex justify-center items-center rounded-full absolute top-1/2 left-0 -translate-y-1/2"></i>Plaza Nautica Local C-5
                  Blvd. Marina, Cabo San Lucas
                </a>
                <a href="mailto:info@cabosailing.com"><i class="icon-mail bg-white/15 size-[40px] flex justify-center items-center rounded-full absolute top-1/2 left-0 -translate-y-1/2"></i>info@cabosailing.com</a>
              </div>
            </div>
            <div class="w-full lg:w-1/2 [&_p]:relative [&_p]:before:absolute [&_p]:before:bottom-[0.35rem] [&_p]:pl-9 [&_p]:before:left-0 [&_p]:before:bg-white [&_p]:before:w-[29px] [&_p]:before:h-[2px] [&_p]:before:rounded-lg px-9 [&_p]:text-[12px]">
              <p>Follow Us on</p>
              <div class="flex gap-4 [&_a]:size-[40px] [&_a]:rounded-full [&_a]:bg-white/20 [&_a]:flex [&_a]:items-center [&_a]:justify-center hover:[&_a]:bg-white/30">
                <a href="#"><i class="icon-facebook"></i></a>
                <a href="#"><i class="icon-instagram"></i></a>
                <a href="#"><i class="icon-youtube"></i></a>
              </div>
            </div>
          </div>
          <!-- <span class="copyright">Footer Copyright text goes here</span> -->
          <div class="bg-white/15 p-5 border-solid border-[0.5px] border-primary/50 max-w-[580px] max-lg:mx-auto [&_h3]:text-white">
            <div class="flex items-center gap-x-5 [&_h3]:mb-0 mb-4">
              <h3>Cancellation Policy</h3>
              <i class="icon-long-arrow-right text-5xl"></i>
            </div>
            <p>We require a<span class="font-bold"> 24-hour notice of cancellation.</span></p>
            <p>Beacuse we reserve time specially for you , please make any schedule changes the day before service to avoid incurring a <span class="text-primary font-extrabold">$75 late cancellation fee.</span></p>
            <div class="flex items-center gap-2">
              <a href="#">Read More</a>
              <i class="icon-arrow-right streched-link"></i>
            </div>
          </div>
        </div>
        <div class="lead-form w-[643px] h-[743px] bg-white rounded-2xl px-12">
          <?php echo do_shortcode('[wpforms id="41390" title="false"]');?>
        </div>
      </div>
    </div>
  </section>
  <div class="bg-ss-blue py-8">
    <div class="container flex justify-between items-center">
      <picture>
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/footer-logo.png" alt="Footer Logo" width="117" height="72" loding="lazy">
      </picture>
      <div class="text-white [&_p]:mb-0">
        <p>Copyright <?php echo date("Y"); ?> Cabo Sailing. All Rights Reserved By Cabo Sailing</p>
      </div>
    </div>
  </div>
</footer>

</div> <!-- /.site-wrapper -->

<?php wp_footer(); ?>
</body>

</html>