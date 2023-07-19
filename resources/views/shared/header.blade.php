<nav class="main--navigation" x-data="{ open: false }">
	<div class="px-2 py-3 max-w-7xl mx-auto flex flex-row justify-between flex flex-col lg:flex-row">
			<div class="flex flex-row justify-between">
					<a class="group flex flex-row gap-4 items-center text-gray-200 font-astronomus font-bold uppercase" href="/">
							<img class="h-9 lg:h-9" src="{{ asset('images/svg/mscc-logo.svg') }}" />
							<div class="invisible lg:visible logo--text">Developers Conference <br/><span class="text-mustard">2023</span></div>
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
			<div class="text-gray-100 text-md font-bold font-astronomus uppercase max-h-0 lg:max-h-full overflow-hidden transition-all" style="" x-ref="menu" x-bind:style="open == true ? 'max-height: ' + $refs.menu.scrollHeight + 'px' : ''">
				<div class="mt-4 pb-2 sm:pb-0 lg:mt-0 flex flex-col lg:flex-row gap-3 lg:gap-6 lg:items-center">
					<a href="{{ route('agenda') }}" class="{{ request()->is('agenda') ? 'text-mustard' : '' }} hover:text-mustard transition hover:ease-in-out duration-300" href="#">Agenda</a>
					<a href="{{ route('speakers') }}" class="{{ request()->is('speakers') ? 'text-mustard' : '' }} hover:text-mustard transition hover:ease-in-out duration-300" href="#">Speakers</a>
					<a class="hover:text-mustard transition hover:ease-in-out duration-300" href="{{ route('speakers') }}">Community</a>
					<a class="hover:text-mustard transition hover:ease-in-out duration-300 hidden" href="#">Extras</a>
					<a class="bg-red-600 px-2 py-2 pt-3 px-4 hover:bg-red-700 transition hover:ease-in-out duration-500 rounded-sm leading-1" href="https://docs.google.com/forms/d/e/1FAIpQLSdmsUQgVUhy8SWmWez_xBwbIizKpQMH0J_bfdJAAz2fD2k2Wg/viewform" target="_blank">Register</a>
				</div>
			</div>
	</div>
</nav>


