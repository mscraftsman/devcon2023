<footer class="space--footer">
	<div class="footer--bg-1"></div>
	<div class="footer--wave">
		<img src="{{ asset('images/svg/white-wave.svg') }}" alt="">
	</div>

	<div class="footer--stars">
		<div class="stars"></div>
		<div class="stars2"></div>
		<div class="stars3"></div>
	</div>

	<!-- <div class="footer--bg-2" style="background-image: url({{ asset('images/svg/footer-spaceman-3.svg') }});"></div> -->
	<div class="footer--bg-2">
		<img class="moon" src="{{ asset('images/svg/footer-spaceman-3.svg') }}" alt="">
		<img class="spaceman" src="{{ asset('images/svg/spaceman.svg') }}" alt="">
	</div>

	<div class="footer--bg-bottom"></div>

	<div class="footer--content">
		<div class="container--fw">
			<img src="{{ asset('images/svg/mscc-logo-dark.svg') }}" alt="" class="footer-logo">
			<div class="mscc--text">Mauritius Software Craftsmanship Community</div>
			<div class="social--icons">
				<a href="https://www.facebook.com/MauritiusSoftwareCraftsmanshipCommunity/" class="icon"><img src="{{ asset('images/svg/meta.svg') }}" alt=""></a>
				<a href="https://twitter.com/mscraftsman" class="icon"><img src="{{ asset('images/svg/twitter.svg') }}" alt=""></a>
				<a href="https://www.linkedin.com/groups/5033639" class="icon"><img src="{{ asset('images/svg/linkedin.svg') }}" alt=""></a>
			</div>
			<div class="list--menu">
				<ul>
					<li><a href="{{ route('code-of-conduct') }}">Code of conduct</a></li>
					<li><a target="_blank" href="https://drive.google.com/file/d/10wkqMQZ32TacDiVoGPDR7Y0rPZlNXbHS/view">Become a sponsor</a></li>
					<!-- <li class=""><a href="/">Extras</a></li> -->
					<!-- <li class=""><a href="/">Squad</a></li> -->
				</ul>
			</div>
		</div>
	</div>
</footer>
