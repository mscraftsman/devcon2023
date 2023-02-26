<nav class="bg-[#000]" x-data="{ open: false }">
		<div class="px-6 lg:pl-0 max-w-7xl mx-auto py-8 flex flex-row justify-between flex flex-col lg:flex-row">
				<div class="flex flex-row justify-between">
						<a class="group flex flex-row gap-4 items-center text-gray-200 text-xl font-astronomus font-bold uppercase" href="/">
								<img class="h-12 lg:h-10" src="{{ asset('images/svg/mscc-logo.svg') }}" />
								<div class="invisible lg:visible">Developers Conference <span class="text-mustard">2023</span></div>
						</a>
						<button class="text-xs text-white font-bold uppercase lg:hidden" @click="open = !open">
							<span class="pt-0.5">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" :class="{ 'hidden' : open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" :class="{ 'hidden' : !open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
									</svg>
							</span>
						</button>
				</div>
				<div class="text-gray-100 text-sm font-bold font-spotnik uppercase max-h-0 lg:max-h-full overflow-hidden transition-all" style="" x-ref="menu" x-bind:style="open == true ? 'max-height: ' + $refs.menu.scrollHeight + 'px' : ''">
					<div class="mt-6 lg:mt-0 flex flex-col lg:flex-row gap-3 lg:gap-6 lg:items-center">
						<a class="hover:text-mustard transition hover:ease-in-out duration-300 hidden" href="#">Agenda</a>
						<a class="hover:text-mustard transition hover:ease-in-out duration-300 hidden" href="#">Speakers</a>
						<a class="hover:text-mustard transition hover:ease-in-out duration-300 hidden" href="#">Community</a>
						<a class="hover:text-mustard transition hover:ease-in-out duration-300 hidden" href="#">Extras</a>
						<a class="hover:text-mustard transition hover:ease-in-out duration-300" target="_blank" href="https://drive.google.com/file/d/10wkqMQZ32TacDiVoGPDR7Y0rPZlNXbHS/view">Become a sponsor</a>
						<a class="bg-red-600 px-2 py-2 hover:bg-red-700 transition hover:ease-in-out duration-500" href="https://sessionize.com/developers-conference-2023/">Call for Paper</a>
					</div>
				</div>
		</div>
</nav>

<!-- Hero section-->
<section class="relative hero--intro">

		<div class="hero--stars">
			<div class="stars"></div>
			<div class="stars2"></div>
			<div class="stars3"></div>
		</div>

		<div class="grid place-items-center">
			<div class="hero--animation-container">

				<div class="hero--text">
					<img class="text" src="{{ asset('images/svg/hero/hero-text.svg') }}" alt="">
				</div>
				<div class="ring--1">
					<div class="planets--holder">
						<img class="planets" src="{{ asset('images/svg/hero/planets-3_5.svg') }}" alt="">
					</div>
					<div class="jupiter--wrapper">
						<img class="jupiter" src="{{ asset('images/svg/hero/jupiter.svg') }}" alt="">
					</div>
					<div class="saturn--wrapper">
						<img class="saturn" src="{{ asset('images/svg/hero/saturn.svg') }}" alt="">
					</div>
				</div>
				<div class="ring--2">
					<div class="planets--holder">
						<img class="planets" src="{{ asset('images/svg/hero/planets-2_2.svg') }}" alt="">
					</div>
					<div class="mars--wrapper">
						<img class="mars" src="{{ asset('images/svg/hero/mars.svg') }}" alt="">
					</div>
					<div class="earth--wrapper">
						<img class="earth" src="{{ asset('images/svg/hero/earth.svg') }}" alt="">
					</div>
				</div>
				<div class="ring--3">
					<div class="planets--holder">
						<img class="planets" src="{{ asset('images/svg/hero/planets-1_2.svg') }}" alt="">
					</div>
					<div class="mercury--wrapper">
						<img class="mercury" src="{{ asset('images/svg/hero/mercury.svg') }}" alt="">
					</div>
					<div class="venus--wrapper">
						<img class="venus" src="{{ asset('images/svg/hero/venus.svg') }}" alt="">
					</div>
				</div>
				<div class="ring--4">
					<div class="sparkle-ring">
						<img class="sparkle" src="{{ asset('images/svg/hero/sparkle-ring.svg') }}" alt="">
					</div>
				</div>
				<div class="purple-bg">
					<img class="bg" src="{{ asset('images/svg/hero/purple-bg.svg') }}" alt="">
				</div>
			</div>

			<div class="mt-8 text-gray-200 font-bold font-spotnik uppercase">
				Innovation • Technology • Community
			</div>
		</div>

		<h2 class="mt-2 mb-6 text-center text-2xl text-mustard font-bold font-astronomus uppercase">The Developers Conference 2023</h2>
		<!-- <div class="pb-16 max-w-4xl mx-auto text-sm text-gray-100 font-bold font-golos uppercase flex flex-col gap-4 intro-text">
				<p>
						Being the largest IT Community in Mauritius, we are so passionate about the tech world that doing
						the Developers Conference is a must. With the Virtual Conference, we missed the human touch where
						people exchange and interact with each other.
				</p>

				<p class="pb-16">
						Mark your calendar, save the dates and join us for the Developers Conference 2022 with multiple
						sessions over 3 whole days of technical geekery as well as various evening entertainments. Come
						and meet our Partners for recruitment and internship opportunities at their different booths.
						We have some surprises also in store for you! So, come, and let's have some fun!
				</p> -->
		</div>

		<div class="custom-shape-divider-bottom-1674392093">
				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
						<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
				</svg>
		</div>

</section>
