<?php

/**
 * Template Name: Landing Page
 *
 */
include 'header-landing-page.php'; ?>

<section id="vessels" class="pt-16 pb-10 md:py-16 lg:py-28 bg-ss-dark">
	<div class="container">
		<div class="text-center max-w-[827px] mx-auto lg:mb-[60px]">
			<strong class="category ss-blue">
				<i class="icon-long-arrow-left text-black"></i>Luxury Vessels <i class="icon-long-arrow-right text-black"></i>
			</strong>
			<h2>Top Cabo Boat Tour Experience</h2>
			<p>Dive into vibrant reefs. Cruise at sunset. Explore endless adventures with Cabo Sailing Ocean Adventures. Embark on your next journey!</p>
		</div>
		<div class="ss-custom-tab luxury-tab space-y-2 lg:space-y-4 flex flex-col justify-between overflow-hidden">
			<div class="mobile-dropdown mb-4 lg:mb-7 xl:mb-9 flex flex-col">
				<button class="dropBtn relative inline-block text-left w-full p-4 leading-normal border border-gray-300 text-[15px] lg:text-[16px] capitalize lg:hidden">Select Option</button>
				<ul class="tabNav max-w-[1032px] lg:mx-auto relative list-none pb-[6px] lg:before:border-b-[6px] before:ss-grey-200 before:absolute before:bottom-0 before:left-[-9999px] before:right-[-9999px] pl-0 lg:flex max-lg:border hidden [&_a]:text-center lg:[&_a]:text-lg [&_a]:font-semibold [&_a]:text-ss-blue lg:[&_a]:inline-flex justify-center lg:before:[&_a]:absolute lg:before:[&_a]:left-0 lg:before:[&_a]:right-0 lg:before:[&_a]:bg-ss-blue lg:before:[&_a]:h-[7px] lg:before:[&_a]:bottom-[-25px] lg:after:[&_a]:absolute lg:after:[&_a]:bottom-[-40px] lg:after:[&_a]:left-1/2 lg:after:[&_a]:-translate-y-1/2 lg:after:[&_a]:bg-[url('../images/traingle.svg')] lg:after:[&_a]:size-[11px] lg:after:[&_a]:opacity-0 lg:before:[&_a]:opacity-0 lg:after:[&_a]:transition-all before:[&_a]:transition-all">
					<li class="max-md:p-2 max-lg:p-4 lg:mb-[18px] relative before:absolute before:right-0 before:top-0 before:bottom-0 before:w-[1px] before:h-full before:bg-gray-200">
						<a href="#tab-1" class="nav-item hover:text-primary lg:px-4 relative w-full text-center transition-all duration-300 active"> Private 42' yacht </a>
					</li>
					<li class="max-md:p-2 max-lg:p-4 lg:mb-[18px] relative before:absolute before:right-0 before:top-0 before:bottom-0 before:w-[1px] before:h-full before:bg-gray-200">
						<a href="#tab-2" class="nav-item hover:text-primary lg:px-4 relative w-full text-center transition-all duration-300"> Private 45' luxury yacht </a>
					</li>
					<li class="max-md:p-2 max-lg:p-4 lg:mb-[18px] relative before:absolute before:right-0 before:top-0 before:bottom-0 before:w-[1px] before:h-full before:bg-gray-200">
						<a href="#tab-3" class="nav-item hover:text-primary lg:px-4 relative w-full text-center transition-all duration-300"> Private 46' yacht </a>
					</li>
					<li class="max-md:p-2 max-lg:p-4 lg:mb-[18px] relative before:absolute before:right-0 before:top-0 before:bottom-0 before:w-[1px] before:h-full before:bg-gray-200">
						<a href="#tab-4" class="nav-item hover:text-primary lg:px-4 relative w-full text-center transition-all duration-300"> Shared Snorkeling or Sunset Sailing </a>
					</li>
					<li class="max-md:p-2 max-lg:p-4 lg:mb-[18px] relative before:absolute before:right-0 before:top-0 before:bottom-0 before:w-[1px] before:h-full before:bg-gray-200">
						<a href="#tab-5" class="nav-item hover:text-primary lg:px-4 relative w-full text-center transition-all duration-300"> Private 38' Sailing </a>
					</li>
					<li class="max-md:p-2 max-lg:p-4 lg:mb-[18px]">
						<a href="#tab-6" class="nav-item hover:text-primary lg:px-4 relative w-full text-center transition-all duration-300"> Private 42' Sailing </a>
					</li>
				</ul>
			</div>
			<div class="tabContent">
				<div class="tabPane" id="tab-1">
					<div class="flex flex-col-reverse lg:flex-row flex-wrap items-center">
						<div class="lg:w-1/2 pr-5 w-full">
							<div class="max-w-[543px] lg:text-lg [&_h3]:text-ss-blue [&_ul_li]:mb-3 [&_ul]:mb-10">
								<h3>Private 42' yacht</h3>
								<ul class="marker:text-primary list-disc list-outside pl-5">
									<li>1-4 pax: <span class="line-through text-primary">$1,230</span>
										<span class="text-ss-grey font-bold">$1,045.5 USD</span>
									</li>
									<li>Adult: <span class="line-through text-primary">$90</span>
										<span class="text-ss-grey font-bold">$76.5 USD</span> Child: <span class="line-through text-primary">$45</span>
										<span class="text-ss-grey font-bold">$38.3 USD</span>
									</li>
									<li>3 hour cruise / Cap. 18 guests.</li>
									<li>Enjoy Cabo San Lucas on a luxurious 42 feet Sundancer yacht. With a large padded cabin-top cushions and a shaded cockpit, this luxury sport cruiser will accommodate you with style while enjoying snorkeling or sunset cruise in Cabo San Lucas.</li>
								</ul>
								<a href="https://www.cabosailing.com/book-now/private-42-yacht/" class="btn btn-white js-has-smooth relative overflow-hidden">
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
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/luxury-vessel-img01.jpg" alt="Luxury vessel feature image" width="596" height="320" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
				<div class="tabPane hidden" id="tab-2">
					<div class="flex flex-col-reverse lg:flex-row flex-wrap items-center">
						<div class="lg:w-1/2 pr-5 w-full">
							<div class="max-w-[543px] lg:text-lg [&_h3]:text-ss-blue [&_ul_li]:mb-3 [&_ul]:mb-10">
								<h3>Private 45′ luxury yacht</h3>
								<ul class="marker:text-primary list-disc list-outside pl-5">
									<li>1-4 pax: <span class="line-through text-primary">$1,540</span>
										<span class="text-ss-grey font-bold">$1,309 USD</span>
									</li>
									<li>Adult: <span class="line-through text-primary">$90</span>
										<span class="text-ss-grey font-bold">$76.5 USD</span> Child(5-12): <span class="line-through text-primary">$45</span>
										<span class="text-ss-grey font-bold">$38.3 USD</span>
									</li>
									<li>3 hour cruise / Cap. 12 guests.</li>
									<li>Experience a truly modern & luxurious yacht. Our 45′ yacht is a perfect combination of a comfortable and stylish yacht with all the amenities you need for a fun and memorable time on the water.</li>
								</ul>
								<a href="https://www.cabosailing.com/book-now/private-45-luxury-yacht/" class="btn btn-white js-has-smooth relative overflow-hidden">
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
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/luxury-vessel-img02.webp" alt="Luxury vessel feature image" width="596" height="320" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
				<div class="tabPane hidden" id="tab-3">
					<div class="flex flex-col-reverse lg:flex-row flex-wrap items-center">
						<div class="lg:w-1/2 pr-5 w-full">
							<div class="max-w-[543px] lg:text-lg [&_h3]:text-ss-blue [&_ul_li]:mb-3 [&_ul]:mb-10">
								<h3>Private 46′ yacht</h3>
								<ul class="marker:text-primary list-disc list-outside pl-5">
									<li>1-4 pax: <span class="line-through text-primary">$1,540</span>
										<span class="text-ss-grey font-bold">$1,309 USD</span>
									</li>
									<li>Adult: <span class="line-through text-primary">$90</span>
										<span class="text-ss-grey font-bold">$76.5 USD </span>Child(5-12): <span class="line-through text-primary">$45</span>
										<span class="text-ss-grey font-bold">$38.3 USD</span>
									</li>
									<li>3 hour cruise / Cap. 20 guests.</li>
									<li>Spoil yourself with one of our top notch 46′ luxury yachts, with all the amenities needed for a relaxing, memorable time while enjoying Los Cabos snorkeling sites and awing sunsets.</li>
								</ul>
								<a href="https://www.cabosailing.com/book-now/private-46-yacht/" class="btn btn-white js-has-smooth relative overflow-hidden">
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
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/luxury-vessel-img03.webp" alt="Luxury vessel feature image" width="596" height="320" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
				<div class="tabPane hidden" id="tab-4">
					<div class="flex flex-col-reverse lg:flex-row flex-wrap items-center">
						<div class="lg:w-1/2 pr-5 w-full">
							<div class="max-w-[543px] lg:text-lg [&_h3]:text-ss-blue [&_ul_li]:mb-3 [&_ul]:mb-10">
								<h3>Shared Snorkeling or Sunset Sailing</h3>
								<ul class="marker:text-primary list-disc list-outside pl-5">
									<li>Adult: <span class="line-through text-primary">$105</span>
										<span class="text-ss-grey font-bold"> $89.25 USD</span> Child(5-12): <span class="line-through text-primary">$52.5</span>
										<span class="text-ss-grey font-bold">$44.6 USD</span>
									</li>
									<li>3 hours Snorkeling & 2 hours Sunset cruise.</li>
									<li>Cap. 14 guests.</li>
									<li>Explore the sparkling turquoise waters of the Sea of Cortez on this sightseeing snorkel adventure or romantic Sunset Cruise of Los Cabos’ Land’s End Arch!</li>
								</ul>
								<a href="https://www.cabosailing.com/book-now/shared-snorkeling-or-sunset-sailing/" class="btn btn-white js-has-smooth relative overflow-hidden">
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
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/luxury-vessel-img04.webp" alt="Luxury vessel feature image" width="596" height="320" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
				<div class="tabPane hidden" id="tab-5">
					<div class="flex flex-col-reverse lg:flex-row flex-wrap items-center">
						<div class="lg:w-1/2 pr-5 w-full">
							<div class="max-w-[543px] lg:text-lg [&_h3]:text-ss-blue [&_ul_li]:mb-3 [&_ul]:mb-10">
								<h3>Private 38′ Sailing Boat</h3>
								<ul class="marker:text-primary list-disc list-outside pl-5">
									<li>1-4 pax: <span class="line-through text-primary">$750 </span>
										<span class="text-ss-grey font-bold">$637.5 USD</span>
									</li>
									<li>Adult: <span class="line-through text-primary">$90</span>
										<span class="text-ss-grey font-bold">$76.5 USD</span> Child(5-12): <span class="line-through text-primary">$45</span>
										<span class="text-ss-grey font-bold">$38.3 USD</span>
									</li>
									<li>3 hour cruise / Cap. 12 guests.</li>
									<li>Sail Cabo San Lucas on a beautiful private 38 feet sailing boat and snorkel in tropical waters alongside colorful sea life.</li>
								</ul>
								<a href="https://www.cabosailing.com/book-now/private-38-sailing/" class="btn btn-white js-has-smooth relative overflow-hidden">
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
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/luxury-vessel-img05.webp" alt="Luxury vessel feature image" width="596" height="320" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
				<div class="tabPane hidden" id="tab-6">
					<div class="flex flex-col-reverse lg:flex-row flex-wrap items-center">
						<div class="lg:w-1/2 pr-5 w-full">
							<div class="max-w-[543px] lg:text-lg [&_h3]:text-ss-blue [&_ul_li]:mb-3 [&_ul]:mb-10">
								<h3>Private 42′ Sailing Boat</h3>
								<ul class="marker:text-primary list-disc list-outside pl-5">
									<li>1-4 pax: <span class="line-through text-primary"> $990 </span>
										<span class="text-ss-grey font-bold"> $841.5 USD</span>
									</li>
									<li>Adult: <span class="line-through text-primary">$90</span>
										<span class="text-ss-grey font-bold">$76.5 USD</span> Child(5-12): <span class="line-through text-primary">$45</span>
										<span class="text-ss-grey font-bold"> $40.5 USD</span>
									</li>
									<li>3 hour cruise. / Cap. 14 guests.</li>
									<li>Out two 42′ luxury sailing boats await for a fun day on the water. Great snorkeling at Cabo San Lucas bay and a relaxed sailing admiring a colorful sunset.</li>
								</ul>
								<a href="https://www.cabosailing.com/book-now/private-42-sailing/" class="btn btn-white js-has-smooth relative overflow-hidden">
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
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/luxury-vessel-img06.webp" alt="Luxury vessel feature image" width="596" height="320" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /section {Vessels} -->

<section id="activites" class="pb-10 lg:pb-24">
	<div class="container">
		<div class="flex justify-between mb-4 lg:mb-10 items-end max-lg:flex-wrap lg:gap-y-14">
			<div class="max-lg:w-full">
				<strong class="category ss-blue">Services<i class="icon-long-arrow-right"></i></strong>
				<h2>Our Most Popular Activities</h2>
			</div>
			<div class="services-swiper w-[91px] flex justify-between pb-[10px]">
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
		<div class="swiper services-mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide h-auto">
					<div class="h-full p-5 pb-8 bg-gray-100 rounded border-solid border border-primary card-shadow card">
						<picture class="pb-8 [&_img]:w-full">
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
						<picture class="pb-8 [&_img]:w-full">
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
						<picture class="pb-8 [&_img]:w-full">
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
		<div class="flex justify-center gap-6 mt-6 md:mt-8 lg:mt-10 2xl:mt-12 flex-wrap">
			<a href="#contactForm" class="btn btn-white js-has-smooth relative overflow-hidden">
				<span class="absolute inset-0 bg-ss-blue"></span>
				<span class="absolute inset-0 flex justify-center items-center">
					Shop Online
				</span>
				Shop Online
			</a>
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

<section id="about-us" class="py-12 lg:py-24 bg-ss-blue/5 relative font-light text-base">
	<div class="container lg:flex flex-wrap items-center">
		<div class="max-w-[600px] max-h-[560px] lg:w-[48.1%] flex space-x-2 xl:space-x-4 [&_picture]:block [&_picture]:rounded-lg [&_picture]:overflow-hidden [&_picture]:h-full [&_img]:w-full [&_img]:h-full max-lg:mb-8">
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
		<div class="lg:flex-1 lg:pl-6 xl:pl-[6%] xl:[&_h2]:mb-4">
			<strong class="category ss-blue">About Us <span class="icon-long-arrow-right"></span></strong>
			<h2>Beyond our Guests Expectations</h2>
			<p>Cabo Sailing is daily yachts and sailing charter business operating off cabo san lucas for the last 18 years. We're known for the excellent service and effort to exceed our guests expectations. As our product the the overall guests-experience, we invest a lot of effort and resources in making sure every detail is considered.</p>
			<p>Cabo Sailing is daily yachts and sailing charter business operating off cabo san lucas for the last 18 years. We're known for the excellent service and effort to exceed our guests expectations. As our product the the overall guests-experience, we invest a lot of effort and resources in making sure every detail is considered.</p>
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

<section id="benefits" class="bg-ss-blue/5 pb-10 sm:pb-12 md:pb-16 lg:pb-24">
	<div class="container relative">
		<div class="text-center max-md:pb-4">
			<strong class="category ss-blue"><i class="icon-long-arrow-left"></i>Our Benefits<i class="icon-long-arrow-right"></i></strong>
			<h2>One Of A Kind</h2>
		</div>
		<div class="flex justify-center flex-wrap -mx-5 gap-y-5 lg:gap-y-7 2xl:gap-y-10">
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-800 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6 [&_h3]:text-ss-blue">
					<h3>Luxurious Boats</h3>
					<h4>Sail Away in Luxury</h4>
					<p>Our boats are not just meticulously maintained; they’re decked out with the latest amenities to make your journey incredibly comfortable and pleasurable, the perfect setting for an unforgettable adventure.</p>
				</div>
			</div> <!-- /Card -->
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-800 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6 [&_h3]:text-ss-blue">
					<h3>Exclusive Access</h3>
					<h4>Discover Cabo's Hidden Wonders</h4>
					<p>With our intimate knowledge of the area, we’ll whisk you away to the most awe-inspiring, beautiful beaches and breathtaking vistas that most tourists never get to see.</p>
				</div>
			</div> <!-- /Card -->
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-800 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6 [&_h3]:text-ss-blue">
					<h3>Expert Guides</h3>
					<h4>Passionate Experts, Unforgettable Experiences</h4>
					<p>Our knowledgeable guides are passionate about sharing their deep knowledge of the local marine life, history, and geography. Get ready to be captivated by fascinating insights as you discover the wonders of the Cabo coastline.</p>
				</div>
			</div> <!-- /Card -->
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-800 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6 [&_h3]:text-ss-blue">
					<h3>Premium Bar</h3>
					<h4>Sail Away with Delightful Drinks</h4>
					<p>Elevate your sailing journey with the perfect blend of breathtaking scenery and premium beverages. Our top-notch bar service will make your trip truly unforgettable, leaving you feeling refreshed, rejuvenated, and overjoyed.</p>
				</div>
			</div> <!-- /Card -->
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-800 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6 [&_h3]:text-ss-blue">
					<h3>Social Connection</h3>
					<h4>Sail Away with Your Loved Ones Into Unforgettable Moments</h4>
					<p>Gather your friends and family for an exhilarating sailing adventure tailored just for you. Create cherished memories with customized itineraries that cater to all your desires, making every moment on the water special and unforgettable.</p>
				</div>
			</div> <!-- /Card -->
			<div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
				<div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-800 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6 [&_h3]:text-ss-blue">
					<h3>Safety First</h3>
					<h4>Sail with Confidence, Ease, and Peace of Mind</h4>
					<p>When you set sail with us, your safety and well-being is our top priority. Our skilled and knowledgeable crew are well trained in safety protocols and emergency procedures, so you can enjoy a thrilling yet secure sailing adventure.</p>
				</div>
			</div> <!-- /Card -->
			<div class="absolute top-1/2 left-[27%] max-lg:top-[34.7%] max-lg:left-[40.4%] lg:w-[12.8%] animation max-md:hidden">
				<picture class="[&_img]:w-full [&_img]:rounded-full">
					<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/cargo-steering.jpg" type="image/jpg">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/cargo-steering.jpg" alt="Cargo Steering Image" width="158" height="158" loading="lazy">
				</picture>
			</div>
			<div class="absolute top-1/2 left-[60.2%] max-lg:top-[62.4%] max-lg:left-[40.4%] lg:w-[12.8%] animation max-md:hidden">
				<picture class="[&_img]:w-full [&_img]:rounded-full">
					<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/cargo-steering.jpg" type="image/jpg">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/cargo-steering.jpg" alt="Cargo Steering Image" width="158" height="158" loading="lazy">
				</picture>
			</div>
		</div> <!-- /Card Wrapper -->
	</div>
</section>
<!-- /section {Our Benefits} -->

<section id="special-offers" class="pb-8">
	<div class="swiper banner-slider pb-14">
		<div class="swiper-wrapper [&_h2]:text-white lg:[&_h2]:text-[52px] lg:[&_h2]:mb-8">
			<div class="swiper-slide h-auto">
				<div class="relative h-full flex items-center min-h-[340px] py-10">
					<div class="bg-no-repeat bg-center bg-cover absolute inset-0 z-[-1] before:absolute before:bg-gradient-to-r before:from-ss-blue/85 before:inset-0" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/image-slider-featured-image01.jpg');">
					</div>
					<div class="absolute top-[-6%] right-[-2%] xl:top-[-15%] xl:right-[-5%] w-[150px] lg:w-[200px] xl:w-[353px]">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/20-percent-off.svg" type="image/png">
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/20-percent-off.svg" width="353" height="218" loading="lazy" alt="20 Percent Off">
						</picture>
					</div>
					<div class="container">
						<div class="max-w-[80%] lg:max-w-[655px]">
							<h2>Save 20% when booking a second Cabo boat tour</h2>
							<a href="#contactForm" class="btn btn-primary js-has-smooth relative overflow-hidden">
								<span class="absolute inset-0 bg-white"></span>
								<span class="absolute inset-0 flex justify-center items-center">
									Know More
								</span>
								Know More
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-slide h-auto">
				<div class="relative h-full flex items-center min-h-[340px] py-10">
					<div class="bg-no-repeat bg-center bg-cover absolute inset-0 z-[-1] before:absolute before:bg-gradient-to-r before:from-ss-blue/85 before:inset-0" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/image-slider-featured-image02.jpg');">
					</div>
					<div class="absolute top-[-6%] right-[-2%] xl:top-[-15%] xl:right-[-5%] w-[150px] lg:w-[200px] xl:w-[353px]">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/free-bottle.svg" type="image/png">
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/20-percent-off.svg" width="353" height="218" loading="lazy" alt="Free bottle">
						</picture>
					</div>
					<div class="container">
						<div class="max-w-[80%] lg:max-w-[655px]">
							<h2>*FREE Prosecco / Vodka / Whisky / Tequila</h2>
							<a href="#contactForm" class="btn btn-primary js-has-smooth relative overflow-hidden">
								<span class="absolute inset-0 bg-white"></span>
								<span class="absolute inset-0 flex justify-center items-center">
									Know More
								</span>
								Know More
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-slide h-auto">
				<div class="relative h-full flex items-center min-h-[340px] py-10">
					<div class="bg-no-repeat bg-center bg-cover absolute inset-0 z-[-1] before:absolute before:bg-gradient-to-r before:from-ss-blue/85 before:inset-0" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/image-slider-featured-image03.jpg');">
					</div>
					<div class="absolute top-[-6%] right-[-2%] xl:top-[-15%] xl:right-[-5%] w-[150px] lg:w-[200px] xl:w-[353px]">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/15-percent-off.svg" type="image/png">
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/20-percent-off.svg" width="353" height="218" loading="lazy" alt="15 percent Off">
						</picture>
					</div>
					<div class="container">
						<div class="max-w-[80%] lg:max-w-[655px]">
							<h2>Save 15% on your desired cruise.</h2>
							<a href="#contactForm" class="btn btn-primary js-has-smooth relative overflow-hidden">
								<span class="absolute inset-0 bg-white"></span>
								<span class="absolute inset-0 flex justify-center items-center">
									Know More
								</span>
								Know More
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</section>
<!-- /section {Special Offers} -->

<section class="py-10 md:py-16 xl:py-32">
	<div class="container">
		<div class="lg:mb-12 text-center [&_p]:text-xl [&_p]:italic [&_p]:font-medium [&_p]:uppercase [&_i]:text-[53px] [&_p]:mb-0">
			<strong class="category ss-blue"><i class="icon-long-arrow-left"></i>Testimonials<i class="icon-long-arrow-right"></i></strong>
			<h2>What Our Client Says</h2>
		</div>
		<div class="relative flex flex-col-reverse lg:flex-row lg:gap-5 xl::gap-x-20 justify-between ">
			<div class="swiper testimonial-slider">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide">
						<div class="flex flex-col sm:flex-row sm:space-x-5">
							<div class="flex justify-center size-[70px] items-center rounded-full border border-solid border-ss-blue bg-ss-grey-100">
								<span class="h4 mb-0 font-semibold uppercase">DS</span>
							</div>
							<div class="flex flex-col justify-center [&_p]:h4 [&_p]:mb-1">
								<p>Danit Shapiro</p>
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
							<p>Yesterday used their services and WOW.. Treated like royalty! The thoughtfulness of the staff, cleanliness of the boat, the food and drinks 🎉🎉 everything was amazing! Definitely recommend - consider us lifetime customers 🙏🏼🙏🏼</p>
							<a href="#content-1" class="capitalize" data-fancybox>Read more</a>
							<div id="content-1" class="hidden">
								<p>Yesterday used their services and WOW.. Treated like royalty! The thoughtfulness of the staff, cleanliness of the boat, the food and drinks 🎉🎉 everything was amazing!
									Definitely recommend - consider us lifetime customers 🙏🏼🙏🏼</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="flex flex-col sm:flex-row sm:space-x-5">
							<div class="flex justify-center size-[70px] items-center rounded-full border border-solid border-ss-blue bg-ss-grey-100">
								<span class="h4 mb-0 font-semibold uppercase">KH</span>
							</div>
							<div class="flex flex-col justify-center [&_p]:h4 [&_p]:mb-1">
								<p>Kendall Hurley </p>
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
							<p>We had an amazing time with Ali and Paul during our private snorkel and whale watching excursion. They were extremely friendly and helpful and the lunch provided was amazing! I can't recommend these guys enough! Thank you so much for being the highlight of our entire Cabo trip.</p>
							<a href="#content-2" class="capitalize" data-fancybox>Read more</a>
							<div id="content-2" class="hidden">
								<p>We had an amazing time with Ali and Paul during our private snorkel and whale watching excursion. They were extremely friendly and helpful and the lunch provided was amazing! I can't recommend these guys enough! Thank you so much for being the highlight of our entire Cabo trip.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="flex flex-col sm:flex-row sm:space-x-5">
							<div class="flex justify-center size-[70px] items-center rounded-full border border-solid border-ss-blue bg-ss-grey-100">
								<span class="h4 mb-0 font-semibold uppercase">SHS</span>
							</div>
							<div class="flex flex-col justify-center [&_p]:h4 [&_p]:mb-1">
								<p>Shannon Hodges Spears</p>
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
							<p>Cabo Sailing was fabulous! We did a private charter and could not have had more fun. Our crew (Gary and Jesus) were absolutely the best! Highly recommend this company.</p>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="flex flex-col sm:flex-row sm:space-x-5">
							<div class="flex justify-center size-[70px] items-center rounded-full border border-solid border-ss-blue bg-ss-grey-100">
								<span class="h4 mb-0 font-semibold uppercase">CJ</span>
							</div>
							<div class="flex flex-col justify-center [&_p]:h4 [&_p]:mb-1">
								<p>CJ Johnson</p>
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
							<p>My sailing trip with Cabo Sailing Ocean Adventures was a breathtaking experience, accentuated by the rare and magnificent sight of whales. As a content creator always on the lookout for awe-inspiring moments, this encounter was a thrilling highlight. The ocean's vast beauty, combined with these majestic creatures, provided a backdrop of natural wonder that was both beautiful and inspiring.</p>
							<p>The crew on board deserves special mention for their exceptional service. They were not only friendly and funny, making the whole experience enjoyable, but also attentive, ensuring our comfort and safety throughout the journey. Their warm hospitality and continuous care enhanced the serene ambiance, making it the perfect setting for creative inspiration and relaxation. This adventure was more than just a sailing trip; it was a memorable journey that enriched my soul and sparked my creativity.</p>
							<a href="#content-3" class="capitalize" data-fancybox>Read more</a>
							<div id="content-3" class="hidden">
								<p>My sailing trip with Cabo Sailing Ocean Adventures was a breathtaking experience, accentuated by the rare and magnificent sight of whales. As a content creator always on the lookout for awe-inspiring moments, this encounter was a thrilling highlight. The ocean's vast beauty, combined with these majestic creatures, provided a backdrop of natural wonder that was both beautiful and inspiring.</p>
								<p>The crew on board deserves special mention for their exceptional service. They were not only friendly and funny, making the whole experience enjoyable, but also attentive, ensuring our comfort and safety throughout the journey. Their warm hospitality and continuous care enhanced the serene ambiance, making it the perfect setting for creative inspiration and relaxation. This adventure was more than just a sailing trip; it was a memorable journey that enriched my soul and sparked my creativity.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="flex flex-col sm:flex-row sm:space-x-5">
							<div class="flex justify-center size-[70px] items-center rounded-full border border-solid border-ss-blue bg-ss-grey-100">
								<span class="h4 mb-0 font-semibold uppercase">TF</span>
							</div>
							<div class="flex flex-col justify-center [&_p]:h4 [&_p]:mb-1">
								<p>Ted Fritz</p>
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
							<p>Only issue with the excursion was it was middle of our vacation. This needs to be your final excursion as there is no topping the experience. The crew was phenomenal. The experience they provided was once in a lifetime. 3 days left in cabo and everything else will be compared to this amazing experience and will pale in comparison. 18 out of 7 snorkels. If there needed a reason to return to cabo it would be to see this crew again.
							</p>
							<a href="#content-4" class="capitalize" data-fancybox>Read more</a>
							<div id="content-4" class="hidden">
								<p>Only issue with the excursion was it was middle of our vacation. This needs to be your final excursion as there is no topping the experience. The crew was phenomenal. The experience they provided was once in a lifetime. 3 days left in cabo and everything else will be compared to this amazing experience and will pale in comparison. 18 out of 7 snorkels. If there needed a reason to return to cabo it would be to see this crew again.</p>
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
			<figure class="lg:pt-8 [&_img]:w-full [&_img]:h-full">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonial.jpg" alt="Testimonal Featured Image" width="601" height="398" loading="lazy">
			</figure>
			<figure class="absolute bottom-1/2 -translate-x-1/2 lg:bottom-0 lg:-translate-x-[82%] left-1/2">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonial-bg.png" alt="Testimonal Featured Image" width="304" height="197" loading="lazy">
			</figure>
		</div>
	</div>
</section>
<!-- /section {Testimonials} -->

<div class="initialPopup w-full max-w-[800px] relative" style="display: none;">
	<div class="before:absolute before:inset-0 before:bg-[linear-gradient(180deg,rgba(227,239,239,0.94)_0%,rgba(227,239,239,0.94)_100%)] absolute z-[-1] bg-cover bg-center inset-0 bg-[url('../../assets/images/waves-bg.jpg')]">
	</div>
	<div class="[&_h2]:text-[28px] [&_h2]:text-ss-red [&_h2]:italic text-center">
		<h2>Limited time offer: 25% off</h2>
		<strong class="inline-flex mx-auto mb-4 font-lead lg:text-[26px] font-bold px-5 pb-[8px] border-b border-solid border-black">Book Today</strong>
		<span class="block font-medium lg:text-[28px] mb-2">Enjoy before - <span class="text-ss-red">December 19</span></span>
		<figure class="mb-4">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/offer-img01.png" alt="feature Images" width="765" height="242" loading="lazy">
		</figure>
		<span class="block font-medium lg:text-lg mb-4">Use <span class="text-ss-red uppercase italic">Summer24</span> code to redeem at checkout.</span>
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
include 'footer-landing-page.php';
