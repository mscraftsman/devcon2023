<footer class="space--footer">
	<div class="footer--bg-1" style="background-image: url({{ asset('images/svg/footer-bg-2.svg') }});"></div>
		<div class="footer--stars">
			<div class="stars"></div>
			<div class="stars2"></div>
			<div class="stars3"></div>
		</div>
	<div class="footer--bg-2" style="background-image: url({{ asset('images/svg/footer-spaceman-2.svg') }});"></div>
	<div class="footer--content">
		<div class="container--fw">
			<img src="{{ asset('images/svg/mscc-logo-dark.svg') }}" alt="" class="footer-logo">
			<div class="mscc--text">Mauritius Software Craftsmanship Community</div>
			<div class="list--menu">
				<ul>
					<li><a href="{{ route('code-of-conduct') }}">Code of conduct</a></li>
					<li><a href="https://drive.google.com/file/d/10wkqMQZ32TacDiVoGPDR7Y0rPZlNXbHS/view">Become a sponsor</a></li>
					<li class="hidden"><a href="/">Extras</a></li>
					<li class="hidden"><a href="/">Squad</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
