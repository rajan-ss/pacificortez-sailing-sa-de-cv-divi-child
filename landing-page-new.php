<?php

/**
 * Template Name: New Landing Page
 *
 */
include 'header-landing-page-new.php'; ?>

<section id="vessels" class="pt-16 pb-10 md:py-16 lg:py-28 bg-ss-dark">
	<div class="container">
		<div class="text-center max-w-[827px] mx-auto mb-7 lg:mb-[60px]">
			<strong class="category ss-blue">
				<i class="icon-long-arrow-left text-ss-blue"></i>Luxury Vessels <i class="icon-long-arrow-right text-ss-blue"></i>
			</strong>
			<h2>Top Cabo Boat Tour Experience</h2>
			<p>Dive into vibrant reefs. Cruise at sunset. Explore endless adventures with Cabo Sailing Ocean Adventures. Embark on your next journey!</p>
		</div>
		<div class="ss-custom-tab luxury-tab space-y-2 lg:space-y-4 flex flex-col justify-between overflow-hidden">
			<div class="mobile-dropdown mb-6 lg:mb-8 xl:mb-12 flex flex-col">
				<button class="dropBtn relative inline-block text-left w-full p-4 leading-normal border border-gray-300 md:text-base font-lead font-normal capitalize lg:hidden">Select Option</button>
				<ul class="tabNav relative list-none pb-[6px] lg:before:border-b-[6px] lg:before:border-ss-light-gray-100 before:absolute before:bottom-0 before:left-[-9999px] before:right-[-9999px] pl-0 lg:flex max-lg:border hidden [&_a]:text-center lg:[&_a]:text-lg lg:[&_a]:w-auto [&_a]:font-semibold [&_a]:text-ss-blue lg:[&_a]:inline-flex justify-center lg:before:[&_a]:absolute lg:before:[&_a]:left-0 lg:before:[&_a]:right-0 lg:before:[&_a]:bg-ss-blue lg:before:[&_a]:h-[7px] lg:before:[&_a]:bottom-[-25px] lg:after:[&_a]:absolute lg:after:[&_a]:bottom-[-40px] lg:after:[&_a]:left-1/2 lg:after:[&_a]:-translate-y-1/2 lg:after:[&_a]:bg-[url('../.<?php echo get_theme_file_uri(); ?>/assets/images/promotions-slider-img01.webptraingle.svg')] lg:after:[&_a]:size-[11px] lg:after:[&_a]:opacity-0 lg:before:[&_a]:opacity-0 lg:after:[&_a]:transition-all before:[&_a]:transition-all">
					<li class="max-md:p-2 max-lg:p-4 lg:mb-[18px] lg:w-1/3 lg:text-center relative before:absolute before:right-0 before:top-0 before:bottom-0 before:w-[1px] before:h-full before:bg-gray-200">
						<a href="#tab-yacths" class="nav-item hover:text-primary lg:text-lg font-semibold font-lead lg:px-4 relative w-full text-center transition-all duration-300 active">Private <br class="hidden lg:block">yachts</a>
					</li>

					<li class="max-md:p-2 max-lg:p-4 lg:mb-[18px] lg:w-1/3 lg:text-center relative before:absolute before:right-0 before:top-0 before:bottom-0 before:w-[1px] before:h-full before:bg-gray-200">
						<a href="#tab-snorkeling" class="nav-item hover:text-primary lg:text-lg font-semibold font-lead lg:px-4 relative w-full text-center transition-all duration-300"> Shared Snorkeling <br class="hidden lg:block"> or Sunset Sailing </a>
					</li>

					<li class="max-md:p-2 max-lg:p-4 lg:mb-[18px] relative lg:w-1/3 lg:text-center">
						<a href="#tab-sailing" class="nav-item hover:text-primary lg:text-lg font-semibold font-lead lg:px-4 relative w-full text-center transition-all duration-300">Private <br class="hidden lg:block"> Sailing</a>
					</li>
				</ul>
			</div>
			<div class="tabContent">
				<div class="tabPane" id="tab-yacths">
					<div class="flex flex-col-reverse lg:flex-row flex-wrap items-center">
						<div class="lg:w-1/2 pr-5 w-full">
							<div class="max-w-[543px] lg:text-lg [&_h3]:text-ss-blue [&_ul_li]:mb-3 [&_ul]:mb-10 [&_h3]:mb-5 lg:[&_h3]:mb-7">
								<h3>Private yachts</h3>
								<ul class="dot-list">
									<li>
										We Offer <span class="text-primary">42', 45'</span> and <span class="text-primary">46'</span> Private Yachts
									</li>
									<li>
										3 hour cruise / Cap. 18 to 20 guests.
									</li>
									<li>Experience the best of Cabo San Lucas with our Cabo yacht charters! Ranging from 42 to 46 feet, our Cabo yacht rentals are custom-built for maximum comfort and smooth cruising. </li>
									<li>We offer multiple cruises per day and you will have the option to choose your activity including Cabo snorkeling or a Cabo sunset cruise. This luxurious Cabo boat tour is a must-do experience while visiting Cabo San Lucas</li>
								</ul>
								<a href="#contactForm" class="js-has-smooth btn btn-white relative overflow-hidden">
									<span class="absolute inset-0 bg-ss-blue"></span>
									<span class="absolute inset-0 flex justify-center items-center">
										Book Now
									</span>
									Book Now
								</a>
							</div>
						</div>
						<div class="lg:w-1/2 w-full max-lg:mb-6">
							<figure class="[&_img]:w-full [&_img]:h-full w-full">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/luxury-vessel-img07.webp" alt="Luxury vessel feature image" width="1260" height="960" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
				<div class="tabPane hidden" id="tab-snorkeling">
					<div class="flex flex-col-reverse lg:flex-row flex-wrap items-center">
						<div class="lg:w-1/2 pr-5 w-full">
							<div class="max-w-[543px] lg:text-lg [&_h3]:text-ss-blue [&_ul_li]:mb-3 [&_ul]:mb-10 [&_h3]:mb-5 lg:[&_h3]:mb-7">
								<h3>Snorkeling or Sunset Sailing</h3>
								<ul class="dot-list">
									<li>3 hours Snorkeling & 2 hours Sunset cruise.</li>
									<li>Cap. 14 guests.</li>
									<li>Explore the sparkling turquoise waters of the Sea of Cortez on this sightseeing snorkel adventure or romantic Sunset Cruise of Los Cabos’ Land’s End Arch!</li>
								</ul>
								<a href="#contactForm" class="js-has-smooth btn btn-white relative overflow-hidden">
									<span class="absolute inset-0 bg-ss-blue"></span>
									<span class="absolute inset-0 flex justify-center items-center">
										Book Now
									</span>
									Book Now
								</a>
							</div>
						</div>
						<div class="lg:w-1/2 w-full max-lg:mb-6">
							<figure class="[&_img]:w-full [&_img]:h-full w-full">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/luxury-vessel-img08.webp" alt="Luxury vessel feature image" width="1260" height="960" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
				<div class="tabPane hidden" id="tab-sailing">
					<div class="flex flex-col-reverse lg:flex-row flex-wrap items-center">
						<div class="lg:w-1/2 pr-5 w-full">
							<div class="max-w-[543px] lg:text-lg [&_h3]:text-ss-blue [&_ul_li]:mb-3 [&_ul]:mb-10 [&_h3]:mb-5 lg:[&_h3]:mb-7">
								<h3>Private Sailing</h3>
								<ul class="dot-list">
									<li>3 hour cruise / Cap. 12 guests.</li>
									<li>Unlimited Bar, Paddle-Board & Snorkeling Gear</li>
									<li>Sail Cabo San Lucas on a beautiful private 38 feet sailing boat and snorkel in tropical waters alongside colorful sea life.</li>
								</ul>
								<a href="#contactForm" class="js-has-smooth btn btn-white relative overflow-hidden">
									<span class="absolute inset-0 bg-ss-blue"></span>
									<span class="absolute inset-0 flex justify-center items-center">
										Book Now
									</span>
									Book Now
								</a>
							</div>
						</div>
						<div class="lg:w-1/2 w-full max-lg:mb-6">
							<figure class="[&_img]:w-full [&_img]:h-full w-full">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/luxury-vessel-img09.webp" alt="Luxury vessel feature image" width="1260" height="960" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /section {Vessels} -->

<section id="services" class="pb-10 lg:pb-16 pt-10 md:pt-12 lg:pt-[72px] bg-gray-100">
	<div class="container">
		<div class="flex justify-center lg:justify-between mb-4 lg:mb-10 items-end max-lg:flex-wrap lg:gap-y-14 relative">
			<div class="max-lg:w-full lg:max-w-[770px] mx-auto text-center">
				<strong class="category ss-blue"><i class="icon-long-arrow-left"></i>Services<i class="icon-long-arrow-right"></i></strong>
				<h2>Our Most Popular Activities</h2>
			</div>
		</div>
		<div class="swiper services-mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide h-auto">
					<div class="h-full p-5 pb-8 bg-gray-100 rounded border-solid border border-primary card-shadow card">
						<picture class="pb-8 [&_img]:w-full [&_img]:rounded-lg [&_img]:overflow-hidden [&_img]:object-cover [&_img]:object-center [&_img]:h-[276px]">
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/cabo-snorkeling-img-01.jpg" type="image/jpg">
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/cabo-snorkeling-img-01.jpg" alt="Cabo Snorkeling Feature Img" width="370" height="280" loading="lazy">
						</picture>
						<div class="[&_h4]:text-ss-blue [&_h4]:border-solid [&_h4]:border-b [&_h4]:border-black/10 [&_h4]:pb-4 [&_h4]:mb-4">
							<h4>Cabo Snorkeling</h4>
							<h6>Discover the Wonders of Cabo's Underwater World</h6>
							<p>Dive into the crystal-clear waters of the Sea of Cortez and uncover the vibrant marine life. Leave in awe of the natural beauty that lies beneath the surface.</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide h-auto">
					<div class="h-full p-5 pb-8 bg-gray-100 rounded border-solid border border-primary card-shadow card">
						<picture class="pb-8 [&_img]:w-full [&_img]:rounded-lg [&_img]:overflow-hidden [&_img]:object-cover [&_img]:object-center [&_img]:h-[276px]">
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/cabo-snorkeling-img-02.jpg" type="image/jpg">
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/cabo-snorkeling-img-02.jpg" alt="Cabo Snorkeling Feature Img" width="370" height="280" loading="lazy">
						</picture>
						<div class="[&_h4]:text-ss-blue [&_h4]:border-solid [&_h4]:border-b [&_h4]:border-black/10 [&_h4]:pb-4 [&_h4]:mb-4">
							<h4>Cabo Sunset Cruise</h4>
							<h6>Sail Into The Golden Glow Of The Day's End</h6>
							<p>Witness the awe-inspiring sunsets at the land's end in the stunning Sea of Cortez. The ultimate way to savor the end of your day in this stunning coastal destination.</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide h-auto">
					<div class="h-full p-5 pb-8 bg-gray-100 rounded border-solid border border-primary card-shadow card">
						<picture class="pb-8 [&_img]:w-full [&_img]:rounded-lg [&_img]:overflow-hidden [&_img]:object-cover [&_img]:object-center [&_img]:h-[276px]">
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/cabo-snorkeling-img-03.jpg" type="image/jpg">
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/cabo-snorkeling-img-03.jpg" alt="Cabo Snorkeling Feature Img" width="370" height="280" loading="lazy">
						</picture>
						<div class="[&_h4]:text-ss-blue [&_h4]:border-solid [&_h4]:border-b [&_h4]:border-black/10 [&_h4]:pb-4 [&_h4]:mb-4">
							<h4>Whale Watching</h4>
							<h6>Discover the Majestic Whales of Cabo</h6>
							<p>Be awestruck as you encounter the gentle giants of the deep. From December through April, watch in wonder as the humpback whales breach the surface, showcasing their sheer size and power.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="services-swiper navigation-buttons flex justify-center mt-6">
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>

		<div class="flex justify-center gap-6 mt-6 md:mt-8 lg:mt-10 2xl:mt-12 flex-wrap">
			<a href="#contactForm" class="btn btn-primary js-has-smooth relative overflow-hidden">
				<span class="absolute inset-0 bg-white"></span>
				<span class="absolute inset-0 flex justify-center items-center">
					Request a Quote
				</span>
				Request a Quote
			</a>
		</div>
	</div>
</section>
<!-- /section {Services} -->

<section id="about-us" class="py-12 lg:pt-24 lg:pb-0 relative font-light md:text-base">
	<div class="container lg:flex flex-wrap items-center">
		<div class="max-w-[620px] max-h-[560px] lg:w-[48.1%] flex space-x-2 xl:space-x-4 [&_picture]:block [&_picture]:rounded-lg [&_picture]:overflow-hidden [&_picture]:h-full [&_img]:w-full [&_img]:h-full max-lg:mb-8">
			<div class="w-1/2">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/about-feature-img01.jpg" type="image/png">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-feature-img01.jpg" alt="Cabo Sailing Logo" width="845" height="578" loading="lazy">
				</picture>
			</div>
			<div class="w-1/2 flex flex-col space-y-2 xl:space-y-4">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/about-feature-img02.jpg" type="image/png">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-feature-img02.jpg" alt="Cabo Sailing Logo" width="845" height="578" loading="lazy">
				</picture>
				<picture>
					<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/about-feature-img03.jpg" type="image/png">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-feature-img03.jpg" alt="Cabo Sailing Logo" width="845" height="578" loading="lazy">
				</picture>
			</div>
		</div>
		<div class="lg:flex-1 lg:pl-6 xl:pl-[6%] xl:[&_h2]:mb-4 md:[&_p]:text-base [&_p]:font-light [&_p]:leading-7 [&_p]:text-ss-dark-gray">
			<strong class="category ss-blue">About Us <span class="icon-long-arrow-right"></span></strong>
			<h2>Beyond our Guests Expectations</h2>
			<p>For nearly two decades, Cabo Sailing has redefined the yachting and sailing charter experience in the stunning waters of Cabo San Lucas. Our reputation is built on unparalleled service and a relentless commitment to exceeding the expectations of our distinguished guests. With an unwavering focus on luxury and bespoke experiences, we meticulously curate every moment of your journey, ensuring that no detail is overlooked in crafting an unforgettable voyage.</p>
		</div>
	</div>
	<div class="absolute right-0 top-[10%] z-[-1]">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/decor-boat.png" type="image/png">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/decor-boat.png" alt="Cabo Sailing Logo" width="249" height="276" loading="lazy">
		</picture>
	</div>
</section>
<!-- /section {About Us} -->

<section id="why-choose-us" class="container relative py-10 sm:py-12 md:py-16 lg:py-24 2xl:py-[120px]">
	<div class="container relative">
		<div class="text-center pb-8 lg:pb-10 2xl:pb-12">
			<strong class="category ss-blue"><i class="icon-long-arrow-left"></i>Why Choose Us<i class="icon-long-arrow-right"></i></strong>
			<h2>One Of A Kind</h2>
		</div>
		<div class="flex justify-center flex-wrap relative -mx-5 gap-y-5 lg:gap-y-7 2xl:gap-y-10"> <!-- Card Wrapper -->
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-light-gray-100 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 xl:pt-11 pb-8 md:pb-7 lg:pb-10 px-4 lg:px-5 xl:px-6 [&_h3]:h4 [&_h3]:lg:text-2xl [&_h3]:text-ss-blue [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:font-base [&_h4]:mb-0 [&_h4]:text-base [&_h4]:text-base md:[&_h4]:text-lg [&_h4]:leading-[25px] [&_h4]:font-normal">
					<h3>Luxurious Boats</h3>
					<h4>Sail Away in Luxury</h4>
				</div>
			</div> <!-- /Card -->
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-light-gray-100 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 xl:pt-11 pb-8 md:pb-7 lg:pb-10 px-4 lg:px-5 xl:px-6 [&_h3]:h4 [&_h3]:lg:text-2xl [&_h3]:text-ss-blue [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:font-base [&_h4]:mb-0 [&_h4]:text-base md:[&_h4]:text-lg [&_h4]:leading-[25px] [&_h4]:font-normal">
					<h3>Exclusive Access</h3>
					<h4>Discover Cabo's Hidden Wonders</h4>
				</div>
			</div> <!-- /Card -->
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-light-gray-100 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 xl:pt-11 pb-8 md:pb-7 lg:pb-10 px-4 lg:px-5 xl:px-6 [&_h3]:h4 [&_h3]:lg:text-2xl [&_h3]:text-ss-blue [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:font-base [&_h4]:mb-0 [&_h4]:text-base md:[&_h4]:text-lg [&_h4]:leading-[25px] [&_h4]:font-normal">
					<h3>Expert Guides</h3>
					<h4>Passionate Experts, Unforgettable Experiences</h4>
				</div>
			</div> <!-- /Card -->
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-light-gray-100 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 xl:pt-11 pb-8 md:pb-7 lg:pb-10 px-4 lg:px-5 xl:px-6 [&_h3]:h4 [&_h3]:lg:text-2xl [&_h3]:text-ss-blue [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:font-base [&_h4]:mb-0 [&_h4]:text-base md:[&_h4]:text-lg [&_h4]:leading-[25px] [&_h4]:font-normal">
					<h3>Premium Bar</h3>
					<h4>Sail Away with Delightful Drinks</h4>
				</div>
			</div> <!-- /Card -->
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-light-gray-100 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 xl:pt-11 pb-8 md:pb-7 lg:pb-10 px-4 lg:px-5 xl:px-6 [&_h3]:h4 [&_h3]:lg:text-2xl [&_h3]:text-ss-blue [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:font-base [&_h4]:mb-0 [&_h4]:text-base md:[&_h4]:text-lg [&_h4]:leading-[25px] [&_h4]:font-normal">
					<h3>Social Connection</h3>
					<h4>Sail Away with Your Loved Ones Into Unforgettable Moments</h4>
				</div>
			</div> <!-- /Card -->
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-light-gray-100 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 xl:pt-11 pb-8 md:pb-7 lg:pb-10 px-4 lg:px-5 xl:px-6 [&_h3]:h4 [&_h3]:lg:text-2xl [&_h3]:text-ss-blue [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:font-base [&_h4]:mb-0 [&_h4]:text-base md:[&_h4]:text-lg [&_h4]:leading-[25px] [&_h4]:font-normal">
					<h3>Safety First</h3>
					<h4>Sail with Confidence, Ease, and Peace of Mind</h4>
				</div>
			</div> <!-- /Card -->
			<div class="absolute top-[33.5%] left-[27.5%] xl:top-[35.5%] xl:left-[28.5%] 2xl:left-[28.9%] max-lg:top-[18%] max-lg:left-[42%] max-w-[120px] animation max-md:hidden">
				<picture class="[&_img]:w-full [&_img]:rounded-full">
					<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/cargo-steering.jpg" type="image/jpg">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/cargo-steering.jpg" alt="Cargo Steering Image" width="158" height="158" loading="lazy">
				</picture>
			</div>
			<div class="absolute top-[33.5%] left-[61%] xl:top-[35.5%] xl:left-[62%] 2xl:left-[62.3%] max-lg:top-[54%] max-lg:left-[42%] max-w-[120px] animation max-md:hidden">
				<picture class="[&_img]:w-full [&_img]:rounded-full">
					<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/cargo-steering.jpg" type="image/jpg">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/cargo-steering.jpg" alt="Cargo Steering Image" width="158" height="158" loading="lazy">
				</picture>
			</div>
		</div> <!-- /Card Wrapper -->
	</div>
</section>
<!-- /section {why choose us} -->

<!-- Image Slider Section  -->
<section id="promotions" class="relative pb-8">
	<div class="swiper banner-slider pb-14">
		<div class="swiper-wrapper [&_h2]:text-white lg:[&_h2]:text-[52px] [&_h2]:mb-2">
			<div class="swiper-slide h-auto">
				<div class="relative h-full flex items-center min-h-[560px] sm:min-h-[580px] lg:min-h-[600px] xl:min-h-[620px] py-12 sm:pt-16 pb-[80px]">
					<div class="bg-no-repeat bg-center bg-cover absolute inset-0 z-[-1] before:absolute before:inset-0 before:bg-gradient-to-r before:from-ss-blue before:via-ss-blue-100/80 before:to-ss-blue-100/0" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/promotions-slider-img01.webp');">
					</div>
					<div class="absolute top-0 right-0 w-full max-w-[140px] sm:max-w-[160px] md:max-w-[180px] lg:max-w-[200px] xl:max-w-[220px] 2xl:max-w-[260px]">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/save-15-percent-off.svg" type="image/png">
							<img width="353" height="320" loading="lazy" src="<?php echo get_theme_file_uri(); ?>/assets/images/save-15-percent-off.svg" alt="Save 15 Percent Off">
						</picture>
					</div>
					<div class="container">
						<div class="max-w-[80%] lg:max-w-[600px] [&_h2]:font-medium">
							<strong class="category !text-white">Promotions <i class="icon-long-arrow-right"></i></strong>
							<h2>Safe <strong>15%</strong> On Any Yacht Or Sailing Tours</h2>
							<div class="max-w-[480px] border-l-2 lg:border-l-4 p-4 lg:p-6 border-solid border-primary bg-gradient-to-r from-white/20 to-white/0 [&_h3]:text-white [&_h3]:mb-3 lg:[&_h3]:mb-[14px] [&_h3]:font-medium [&_h3]:text-base md:[&_h3]:text-xl lg:[&_h3]:text-2xl">
								<h3><i>Can be applied to Private and Shared Cruises</i></h3>
								<div class="flex gap-6 flex-wrap">
									<a href="#contactForm" class="js-has-smooth btn btn-primary relative overflow-hidden">
										<span class="absolute inset-0 bg-white"></span>
										<span class="absolute inset-0 flex justify-center items-center">
											Private Cruise
										</span>
										Private Cruise
									</a>
									<a href="#contactForm" class="js-has-smooth btn btn-transparent relative overflow-hidden">
										<span class="absolute inset-0 bg-primary"></span>
										<span class="absolute inset-0 flex justify-center items-center">
											Shared Cruise
										</span>
										Shared Cruise
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-slide h-auto">
				<div class="relative h-full flex items-center min-h-[560px] sm:min-h-[580px] lg:min-h-[600px] xl:min-h-[620px] py-12 sm:pt-16 pb-[80px]">
					<div class="bg-no-repeat bg-center bg-cover absolute inset-0 z-[-1] before:absolute before:inset-0 before:bg-gradient-to-r before:from-ss-blue before:via-ss-blue-100/80 before:to-ss-blue-100/0" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/promotions-slider-img02.webp');">
					</div>
					<div class="absolute top-0 right-0 w-full max-w-[140px] sm:max-w-[160px] md:max-w-[180px] lg:max-w-[200px] xl:max-w-[220px] 2xl:max-w-[260px]">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/save-20-percent-off.svg" type="image/png">
							<img width="353" height="320" loading="lazy" src="<?php echo get_theme_file_uri(); ?>/assets/images/save-20-percent-off.svg" alt="Save 20 Percent Off">
						</picture>
					</div>
					<div class="container">
						<div class="max-w-[80%] lg:max-w-[720px] [&_h2]:font-medium">
							<strong class="category !text-white">Promotions <i class="icon-long-arrow-right"></i></strong>
							<h2>Safe <strong>20%</strong> When Booking A Second Tour During Your Stay</h2>
							<div class="max-w-[520px] border-l-2 lg:border-l-4 p-4 lg:p-6 border-solid border-primary bg-gradient-to-r from-white/20 to-white/0 [&_h3]:text-white [&_h3]:mb-3 lg:[&_h3]:mb-[14px] [&_h3]:font-medium [&_h3]:text-xl lg:[&_h3]:text-2xl">
								<h3><i>This offer can only be applied if two cruises are taken no more than 8 days apart.</i></h3>
								<div class="flex gap-6 flex-wrap">
									<a href="#contactForm" class="js-has-smooth btn btn-primary relative overflow-hidden">
										<span class="absolute inset-0 bg-white"></span>
										<span class="absolute inset-0 flex justify-center items-center">
											Inquiry Form
										</span>
										Inquiry Form
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-slide h-auto">
				<div class="relative h-full flex items-center min-h-[560px] sm:min-h-[580px] lg:min-h-[600px] xl:min-h-[620px] py-12 sm:pt-16 pb-[80px]">
					<div class="bg-no-repeat bg-center bg-cover absolute inset-0 z-[-1] before:absolute before:inset-0 before:bg-gradient-to-r before:from-ss-blue before:via-ss-blue-100/80 before:to-ss-blue-100/0" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/promotions-slider-img03.webp');">
					</div>
					<div class="container">
						<div class="max-w-[100%] lg:max-w-[790px] [&_h2]:font-medium">
							<strong class="category !text-white">Promotions <i class="icon-long-arrow-right"></i></strong>
							<h2>Unlimited Bachelorette Package</h2>
							<div class="max-w-[540px] border-l-2 lg:border-l-4 p-4 lg:p-6 border-solid border-primary bg-gradient-to-r from-white/20 to-white/0 [&_h3]:text-white [&_h3]:mb-3 lg:[&_h3]:mb-[14px] [&_h3]:font-medium [&_h3]:text-xl lg:[&_h3]:text-2xl">
								<h3><i>Package Includes:</i></h3>
								<ul class="list-check text-white mb-4">
									<li>
										<i>Private Round-Trip Transportation</i>
									</li>
									<li>
										<i>Our Unlimited Premium Bar Plus An Additional Addition Of Prosecco Sparkling Wine (1 Bottle for every 2 guests)</i>
									</li>
									<li>
										<i>Choice Of 5 Appetizers (List Included In Form)</i>
									</li>
									<li>
										<i>Chocolate Strawberries</i>
									</li>
									<li>
										<i>Option To Add A Professional Photographer For $180.</i>
									</li>
								</ul>
								<div class="flex gap-6 flex-wrap">
									<a href="#contactForm" class="js-has-smooth btn btn-primary relative overflow-hidden">
										<span class="absolute inset-0 bg-white"></span>
										<span class="absolute inset-0 flex justify-center items-center">
											Unlimited Bachelorette Package
										</span>
										Unlimited Bachelorette Package
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-slide h-auto">
				<div class="relative h-full flex items-center min-h-[560px] sm:min-h-[580px] lg:min-h-[600px] xl:min-h-[620px] py-12 sm:pt-16 pb-[80px]">
					<div class="bg-no-repeat bg-center bg-cover absolute inset-0 z-[-1] before:absolute before:inset-0 before:bg-gradient-to-r before:from-ss-blue before:via-ss-blue-100/80 before:to-ss-blue-100/0" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/promotions-slider-img04.webp');">
					</div>
					<div class="container">
						<div class="max-w-[100%] lg:max-w-[790px] [&_h2]:font-medium">
							<strong class="category !text-white">Promotions <i class="icon-long-arrow-right"></i></strong>
							<h2>Add A Private Chef To Your Voyage</h2>
							<div class="max-w-[540px] border-l-2 lg:border-l-4 p-4 lg:p-6 border-solid border-primary bg-gradient-to-r from-white/20 to-white/0 [&_h3]:text-white [&_h3]:mb-3 lg:[&_h3]:mb-[14px] [&_h3]:font-medium [&_h3]:text-xl lg:[&_h3]:text-2xl">
								<h3>
									<i>Choose between a 3 course Surf & Turf gourmet dinner to our selection of amazing finger food appetizers prepared by our house chef. All accompanied with unlimited ice-cold mixed drinks and wine</i>
								</h3>
								<div class="flex gap-6 flex-wrap">
									<a href="#contactForm" class="js-has-smooth btn btn-primary relative overflow-hidden">
										<span class="absolute inset-0 bg-white"></span>
										<span class="absolute inset-0 flex justify-center items-center">
											Add A Private Chef
										</span>
										Add A Private Chef
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-slide h-auto">
				<div class="relative h-full flex items-center min-h-[560px] sm:min-h-[580px] lg:min-h-[600px] xl:min-h-[620px] py-12 sm:pt-16 pb-[80px]">
					<div class="bg-no-repeat bg-center bg-cover absolute inset-0 z-[-1] before:absolute before:inset-0 before:bg-gradient-to-r before:from-ss-blue before:via-ss-blue-100/80 before:to-ss-blue-100/0" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/promotions-slider-img05.webp');">
					</div>
					<div class="container">
						<div class="max-w-[100%] lg:max-w-[790px] [&_h2]:font-medium">
							<strong class="category !text-white">Promotions <i class="icon-long-arrow-right"></i></strong>
							<h2>Book A Romantic Private Cruise</h2>
							<div class="max-w-[760px] border-l-2 lg:border-l-4 p-4 lg:p-6 border-solid border-primary bg-gradient-to-r from-white/20 to-white/0 [&_h3]:text-white [&_h3]:mb-3 lg:[&_h3]:mb-[14px] [&_h3]:font-medium [&_h3]:text-xl lg:[&_h3]:text-2xl">
								<h3><i>Personal and intimate time on the water. Perfect for proposals, anniversaries, birthdays and any special moment worth celebrating!</i></h3>
								<h3><i>Includes:</i></h3>
								<ul class="list-check text-white mb-4">
									<li>
										<i>Private Round-Trip Transportation</i>
									</li>
									<li>
										<i>Unlimited Premium Bar With Additional Sparkling Wine (1 Bottle For Every 2 Guests)</i>
									</li>
									<li>
										<i>Roses Bouquet or Personalized Celebration Cake.</i>
									</li>
									<li>
										<i>Add a professional photographer for $250.</i>
									</li>
								</ul>
								<div class="flex gap-6 flex-wrap">
									<a href="#contactForm" class="js-has-smooth btn btn-primary relative overflow-hidden">
										<span class="absolute inset-0 bg-white"></span>
										<span class="absolute inset-0 flex justify-center items-center">
											Romantic Private Cruise
										</span>
										Romantic Private Cruise
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-pagination"></div>
		<!-- If we need navigation buttons -->
		<div class="navigation-buttons">
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	</div>
</section>
<!-- /Section {Image Slider}  -->

<section id="testimonials" class="py-10 md:py-16 xl:pt-24 xl:pb-32">
	<div class="container">
		<div class="lg:mb-12 text-center [&_p]:text-xl [&_p]:italic [&_p]:font-medium [&_p]:uppercase [&_i]:text-[53px] [&_p]:mb-0">
			<strong class="category ss-blue"><i class="icon-long-arrow-left"></i>Testimonials<i class="icon-long-arrow-right"></i></strong>
			<h2>What Our Client Says</h2>
		</div>
		<div class="relative">
			<div class="swiper testimonial-slider">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide">
						<div class="flex flex-col-reverse lg:flex-row lg:gap-5 xl::gap-x-20 items-start justify-between">
							<div class="w-full lg:max-w-[450px] 2xl:max-w-[540px] shadow-[0_4px_30px_0px] shadow-ss-grey-900/10 space-y-5 p-[30px] bg-white rounded-xl border border-solid border-ss-blue/15">
								<div class="flex flex-col sm:flex-row sm:space-x-5">
									<div class="flex justify-center size-[70px] items-center rounded-full border border-solid border-ss-blue bg-ss-grey-100">
										<span class="h4 mb-0 font-semibold uppercase">CB</span>
									</div>
									<div class="flex flex-col justify-center [&_p]:h4 [&_p]:mb-1">
										<p>Courtney Byrd</p>
										<ul class="list-none flex space-x-[2px] [&_i]:text-primary">
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="[&_p]:text-sm [&_p]:text-ss-grey-900 [&_p]:font-light [&_p]:leading-7 [&_p]:line-clamp-3">
									<p>Cabo Sailing Company is always my GO TO company for boating when I am visiting Cabo. I just recently had my second charter with them in June 2024 and they were awesome! My first charter with them was back in March 2021.
										There are too many names to name and I have sadly forgotten some but I do remember Ali, Pedro and JJ.
										Anyone who asks for a referral always gets their name company from me!
										The captain and first mate do everything to make your charter special. Getting awesome pictures, helping you with water toys, making delicious heavy hor devours and most of all keeping you safe! They even have hotel pick up available.
										I have done sunset charter twice and it’s the best! Can’t wait to go back next time and see my friends at Cabo Sailing yet again!</p>
									<a href="#content-1" class="capitalize" data-fancybox>Read more</a>
									<div id="content-1" class="hidden">
										<p>Cabo Sailing Company is always my GO TO company for boating when I am visiting Cabo. I just recently had my second charter with them in June 2024 and they were awesome! My first charter with them was back in March 2021.
											There are too many names to name and I have sadly forgotten some but I do remember Ali, Pedro and JJ.
											Anyone who asks for a referral always gets their name company from me!
											The captain and first mate do everything to make your charter special. Getting awesome pictures, helping you with water toys, making delicious heavy hor devours and most of all keeping you safe! They even have hotel pick up available.
											I have done sunset charter twice and it’s the best! Can’t wait to go back next time and see my friends at Cabo Sailing yet again!</p>
									</div>
								</div>
							</div>
							<div class="w-full max-lg:mb-8 lg:w-auto lg:max-w-[601px] rounded-tl-[155px] overflow-hidden">
								<figure class="[&_img]:w-full [&_img]:h-full">
									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/Courtney-Byrd.jpg" alt="Testimonal Featured Image" width="601" height="398" loading="lazy">
								</figure>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="flex flex-col-reverse lg:flex-row lg:gap-5 xl::gap-x-20 items-start justify-between">
							<div class="w-full lg:max-w-[450px] 2xl:max-w-[540px] shadow-[0_4px_30px_0px] shadow-ss-grey-900/10 space-y-5 p-[30px] bg-white rounded-xl border border-solid border-ss-blue/15">
								<div class="flex flex-col sm:flex-row sm:space-x-5">
									<div class="flex justify-center size-[70px] items-center rounded-full border border-solid border-ss-blue bg-ss-grey-100">
										<span class="h4 mb-0 font-semibold uppercase">MS</span>
									</div>
									<div class="flex flex-col justify-center [&_p]:h4 [&_p]:mb-1">
										<p>Melissa Schneider</p>
										<ul class="list-none flex space-x-[2px] [&_i]:text-primary">
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="[&_p]:text-sm [&_p]:text-ss-grey-900 [&_p]:font-light [&_p]:leading-7 [&_p]:line-clamp-3">
									<p>Our group of 6 went on a private 3 hour sunset sailing cruise and it was amazing! We had seamless transportation between our resort and the marina. Our captain - Gary - and 1st mate - Joel were fabulous. Joel was attentive and knowledgeable without being overbearing. Light snacks and drinks were abundant, and we learned so much about the area. We saw sea lions, some amazing scenery, and even a breach of a humpback whale. I'd highly recommend!</p>
									<a href="#content-2" class="capitalize" data-fancybox>Read more</a>
									<div id="content-2" class="hidden">
										<p>Our group of 6 went on a private 3 hour sunset sailing cruise and it was amazing! We had seamless transportation between our resort and the marina. Our captain - Gary - and 1st mate - Joel were fabulous. Joel was attentive and knowledgeable without being overbearing. Light snacks and drinks were abundant, and we learned so much about the area. We saw sea lions, some amazing scenery, and even a breach of a humpback whale. I'd highly recommend!</p>
									</div>
								</div>
							</div>
							<div class="w-full max-lg:mb-8 lg:w-auto lg:max-w-[601px] rounded-tl-[155px] overflow-hidden">
								<figure class="[&_img]:w-full [&_img]:h-full">
									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/Melissa-Schneider.jpg" alt="Testimonal Featured Image" width="601" height="398" loading="lazy">
								</figure>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="flex flex-col-reverse lg:flex-row lg:gap-5 xl::gap-x-20 items-start justify-between">
							<div class="w-full lg:max-w-[450px] 2xl:max-w-[540px] shadow-[0_4px_30px_0px] shadow-ss-grey-900/10 space-y-5 p-[30px] bg-white rounded-xl border border-solid border-ss-blue/15">
								<div class="flex flex-col sm:flex-row sm:space-x-5">
									<div class="flex justify-center size-[70px] items-center rounded-full border border-solid border-ss-blue bg-ss-grey-100">
										<span class="h4 mb-0 font-semibold uppercase">JW</span>
									</div>
									<div class="flex flex-col justify-center [&_p]:h4 [&_p]:mb-1">
										<p>John Wright</p>
										<ul class="list-none flex space-x-[2px] [&_i]:text-primary">
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="[&_p]:text-sm [&_p]:text-ss-grey-900 [&_p]:font-light [&_p]:leading-7 [&_p]:line-clamp-3">
									<p>Cesar, Oswaldo, and the Captain were super professional, friendly, and helpful. The views can't be beat. The food was great to enjoy after getting out of the water and the open bar was great to offset the salt water! <br>

										Two quick points: they don't actually sail, though it is a sailboat. It's runs on motor only. At least it did for us. Also, the snorkeling is with a mandatory life preserver vest. It's understandable, because it's a dangerous environment. But, if you're an experienced swimmer/diver, go for a dip and then enjoy the chips & quac & booze! <br>

										Fun time. Highly recommend.</p>
									<a href="#content-3" class="capitalize" data-fancybox>Read more</a>
									<div id="content-3" class="hidden">
										<p>Cesar, Oswaldo, and the Captain were super professional, friendly, and helpful. The views can't be beat. The food was great to enjoy after getting out of the water and the open bar was great to offset the salt water! <br>

											Two quick points: they don't actually sail, though it is a sailboat. It's runs on motor only. At least it did for us. Also, the snorkeling is with a mandatory life preserver vest. It's understandable, because it's a dangerous environment. But, if you're an experienced swimmer/diver, go for a dip and then enjoy the chips & quac & booze! <br>

											Fun time. Highly recommend.</p>
									</div>
								</div>
							</div>
							<div class="w-full max-lg:mb-8 lg:w-auto lg:max-w-[601px] rounded-tl-[155px] overflow-hidden">
								<figure class="[&_img]:w-full [&_img]:h-full">
									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/john-wright.jpg" alt="Testimonal Featured Image" width="601" height="398" loading="lazy">
								</figure>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="flex flex-col-reverse lg:flex-row lg:gap-5 xl::gap-x-20 items-start justify-between">
							<div class="w-full lg:max-w-[450px] 2xl:max-w-[540px] shadow-[0_4px_30px_0px] shadow-ss-grey-900/10 space-y-5 p-[30px] bg-white rounded-xl border border-solid border-ss-blue/15">
								<div class="flex flex-col sm:flex-row sm:space-x-5">
									<div class="flex justify-center size-[70px] items-center rounded-full border border-solid border-ss-blue bg-ss-grey-100">
										<span class="h4 mb-0 font-semibold uppercase">BN</span>
									</div>
									<div class="flex flex-col justify-center [&_p]:h4 [&_p]:mb-1">
										<p>Berenice Noriega</p>
										<ul class="list-none flex space-x-[2px] [&_i]:text-primary">
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="[&_p]:text-sm [&_p]:text-ss-grey-900 [&_p]:font-light [&_p]:leading-7 [&_p]:line-clamp-3">
									<p>Everything was amazing! Boyfriend and I booked the 38’ shared sunset sailing cruise. We shared it with another couple and a family(it was 9 of us total+crew) and let me tell you it felt so private. <br>

										They offer you snacks and unlimited drinks during the ride. They give you more than enough time to take your picture at the arch and take you to the nearby beaches. <br>

										The sailing boat was clean and has room for you to seat comfortably. <br>

										I really recommend you booking your experience here, it really was the highlight of our trip</p>
									<a href="#content-4" class="capitalize" data-fancybox>Read more</a>
									<div id="content-4" class="hidden">
										<p>Everything was amazing! Boyfriend and I booked the 38’ shared sunset sailing cruise. We shared it with another couple and a family(it was 9 of us total+crew) and let me tell you it felt so private. <br>

											They offer you snacks and unlimited drinks during the ride. They give you more than enough time to take your picture at the arch and take you to the nearby beaches. <br>

											The sailing boat was clean and has room for you to seat comfortably. <br>

											I really recommend you booking your experience here, it really was the highlight of our trip</p>
									</div>
								</div>
							</div>
							<div class="w-full max-lg:mb-8 lg:w-auto lg:max-w-[601px] rounded-tl-[155px] overflow-hidden">
								<figure class="[&_img]:w-full [&_img]:h-full">
									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/Berenice-Noriega.jpg" alt="Testimonal Featured Image" width="601" height="398" loading="lazy">
								</figure>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="flex flex-col-reverse lg:flex-row lg:gap-5 xl::gap-x-20 items-start justify-between">
							<div class="w-full lg:max-w-[450px] 2xl:max-w-[540px] shadow-[0_4px_30px_0px] shadow-ss-grey-900/10 space-y-5 p-[30px] bg-white rounded-xl border border-solid border-ss-blue/15">
								<div class="flex flex-col sm:flex-row sm:space-x-5">
									<div class="flex justify-center size-[70px] items-center rounded-full border border-solid border-ss-blue bg-ss-grey-100">
										<span class="h4 mb-0 font-semibold uppercase">PH</span>
									</div>
									<div class="flex flex-col justify-center [&_p]:h4 [&_p]:mb-1">
										<p>Patrice Holloway</p>
										<ul class="list-none flex space-x-[2px] [&_i]:text-primary">
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="[&_p]:text-sm [&_p]:text-ss-grey-900 [&_p]:font-light [&_p]:leading-7 [&_p]:line-clamp-3">
									<p>Best day in Cabo. Booked for 6 hours. There were 6 of us. Boated on the Pacific side and saw. Whale breach out of season, sea turtles on the surface and caught a Dorado. Also were teased with a few Marlin fins.</p>
									<a href="#content-5" class="capitalize" data-fancybox>Read more</a>
									<div id="content-5" class="hidden">
										<p>Best day in Cabo. Booked for 6 hours. There were 6 of us. Boated on the Pacific side and saw. Whale breach out of season, sea turtles on the surface and caught a Dorado. Also were teased with a few Marlin fins.</p>
									</div>
								</div>
							</div>
							<div class="w-full max-lg:mb-8 lg:w-auto lg:max-w-[601px] rounded-tl-[155px] overflow-hidden">
								<figure class="[&_img]:w-full [&_img]:h-full">
									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/Patrice-Holloway.jpg" alt="Testimonal Featured Image" width="601" height="398" loading="lazy">
								</figure>
							</div>
						</div>
					</div>
				</div>

				<!-- If we need navigation buttons -->
				<div class="navigation-buttons">
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
			<figure class="absolute bottom-1/2 -translate-x-1/2 lg:bottom-0 lg:-translate-x-[82%] left-1/2">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonial-bg.png" alt="Testimonal Featured Image" width="304" height="197" loading="lazy">
			</figure>
		</div>
	</div>
</section>
<!-- /Section {Testimonials Slider}  -->

<div class="initialPopup w-full max-w-[800px] relative" style="display: none;">
	<div class="before:absolute before:inset-0 before:bg-[linear-gradient(180deg,rgba(227,239,239,0.94)_0%,rgba(227,239,239,0.94)_100%)] absolute bg-cover bg-center inset-0 bg-[url('../images/waves-bg.jpg')]">
	</div>
	<div class="[&_h2]:text-[28px] [&_h2]:text-ss-red [&_h2]:italic text-center relative z-[1]">
		<h2>Limited time offer: 15% off</h2>
		<strong class="inline-flex mx-auto mb-4 font-lead lg:text-[26px] font-bold px-5 pb-[8px] border-b border-solid border-black">Book Today</strong>
		<span class="block font-medium lg:text-[28px] mb-2">Enjoy before - <span class="text-ss-red">December 19</span></span>
		<figure class="mb-4">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/offer-img01.png" alt="feature Images" width="765" height="242" loading="lazy">
		</figure>
		<span class="block font-medium lg:text-lg mb-4">Use <span class="text-ss-red uppercase italic">SUNRISE</span> code to redeem at checkout.</span>
		<ul class="flex flex-wrap justify-center gap-4">
			<li>
				<a href="https://www.cabosailing.com/luxury-sailboats/" class="btn btn-secondary relative overflow-hidden enabled">
					<span class="absolute inset-0 bg-white"></span>
					<span class="absolute inset-0 flex justify-center items-center">
						Book a sailboat
					</span>
					Book a sailboat
				</a>
			</li>

			<li>
				<a href="https://www.cabosailing.com/luxury-yachts/" class="btn btn-secondary relative overflow-hidden enabled">
					<span class="absolute inset-0 bg-white"></span>
					<span class="absolute inset-0 flex justify-center items-center">
						Book a Yacht
					</span>
					Book a Yacht
				</a>
			</li>
		</ul>
	</div>
</div>

<?php
include 'footer-landing-page-new.php';
