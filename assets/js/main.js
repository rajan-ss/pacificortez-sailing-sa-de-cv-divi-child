(function ($) {
	$(document).ready(function () {
		function initBgCover(context) {
			if (!context) context = $('body')
			context.find('.js-bg-cover').each(function () {
				var holder = $(this)
				var image = holder.find('> img').hide()
				var imageSrc = image.prop('src')
				holder.css({
					backgroundImage: 'url(' + imageSrc + ')',
				})
			})
		}

		initBgCover()

		/* smooth scroll*/
		var winWidth = $(window).width()
		$(' a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash)
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']')
				if (target.length) {
					if (winWidth > 991) {
						$('html, body').animate(
							{
								scrollTop: target.offset().top - 100,
							},
							1000
						)
					} else {
						$('html, body').animate(
							{
								scrollTop: target.offset().top,
							},
							1000
						)
					}
					return false
				}
			}
		})

		function stickyFooter() {
			let stickyFooter = $('.sticky-footer')
			let stickyFooterHeight = stickyFooter.innerHeight()
			let siteFooter = $('.site-footer')
			siteFooter.css('margin-bottom', stickyFooterHeight)
		}
		stickyFooter()

		let debounceTimeout
		$(window).on('resize', function () {
			clearTimeout(debounceTimeout)
			debounceTimeout = setTimeout(function () {
				stickyFooter()
			}, 250)
		})

		const swiper = new Swiper('.banner-slider', {
			// Optional parameters
			loop: true,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination',
			},
		});

		const swiper2 = new Swiper(".testimonial-slider", {
			slidesPerView: 1,
			spaceBetween: 32,
			loop: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});

		// Services Section Slider
		const swiper3 = new Swiper('.services-mySwiper', {
			slidesPerView: 1,
			loop: true,
			// centeredSlides: true,
			spaceBetween: 30,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
				640: {
					slidesPerView: 1,
					spaceBetween: 15,
					centeredSlides: false,
				},
				768: {
					centeredSlides: false,
					slidesPerView: 2,
					spaceBetween: 20,
				},
				1024: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
			},
		})
	})
}(jQuery));

// Custom tab and dropdown on mobile
const customTabWrapper = document.querySelector('.ss-custom-tab')
const dropbtn = document.querySelector('.dropBtn')
const dropdownContent = document.querySelector('.tabNav')

if (customTabWrapper) {
	// Function to update drop button text
	function updateDropButtonText(text) {
		dropbtn.textContent = text
	}

	// Function to handle tab click
	function handleTabClick(e) {
		// Check if the clicked element is a navigation item
		if (e.target.classList.contains('nav-item')) {
			e.preventDefault() // Prevent default link behavior
			const itemTarget = e.target.getAttribute('href').replace('#', '')
			const tabPane = document.getElementById(itemTarget) // Get the target tab pane

			if (tabPane) {
				// Remove 'active' class from all navigation items and hide all tab panes
				document.querySelectorAll('.nav-item').forEach((navItem) => navItem.classList.remove('active'))
				document.querySelectorAll('.tabPane').forEach((tabPane) => tabPane.classList.add('hidden'))

				// Add 'active' class to the clicked navigation item and show the corresponding tab pane
				e.target.classList.add('active')
				tabPane.classList.remove('hidden')

				// Update drop button text
				updateDropButtonText(e.target.textContent)

				// Toggle dropdown visibility (only if dropdown is visible on mobile)
				if (!dropdownContent.classList.contains('hidden')) {
					dropdownContent.classList.add('hidden')
					dropbtn.classList.remove('active')
				}
			}
		}
	}

	// Add event listener to handle tab navigation
	customTabWrapper.addEventListener('click', handleTabClick)

	// Add event listener to toggle dropdown visibility
	dropbtn.addEventListener('click', () => {
		dropdownContent.classList.toggle('hidden')
		dropbtn.classList.toggle('active')
	})

	// Update drop button text initially
	const initialActiveNavItem = document.querySelector('.ss-custom-tab .nav-item.active')
	if (initialActiveNavItem) {
		updateDropButtonText(initialActiveNavItem.textContent)
	}
}