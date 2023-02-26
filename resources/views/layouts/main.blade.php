<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Developers Conference 2023') }}</title>

        <meta
					name="description"
					content="Being the largest IT Community in Mauritius, we are so passionate about the tech world that doing
						the Developers Conference is a must. With the Virtual Conference, we missed the human touch where
						people exchange and interact with each other."
				/>

				<link
					rel="apple-touch-icon"
					sizes="57x57"
					href="{{ URL::to('/') }}/images/favicon/apple-touch-icon-57x57.png"
				/>
				<link
					rel="apple-touch-icon"
					sizes="114x114"
					href="{{ URL::to('/') }}/images/favicon/apple-touch-icon-114x114.png"
				/>
				<link
					rel="apple-touch-icon"
					sizes="72x72"
					href="{{ URL::to('/') }}/images/favicon/apple-touch-icon-72x72.png"
				/>
				<link
					rel="apple-touch-icon"
					sizes="144x144"
					href="{{ URL::to('/') }}/images/favicon/apple-touch-icon-144x144.png"
				/>
				<link
					rel="apple-touch-icon"
					sizes="60x60"
					href="{{ URL::to('/') }}/images/favicon/apple-touch-icon-60x60.png"
				/>
				<link
					rel="apple-touch-icon"
					sizes="120x120"
					href="{{ URL::to('/') }}/images/favicon/apple-touch-icon-120x120.png"
				/>
				<link
					rel="apple-touch-icon"
					sizes="76x76"
					href="{{ URL::to('/') }}/images/favicon/apple-touch-icon-76x76.png"
				/>
				<link
					rel="apple-touch-icon"
					sizes="152x152"
					href="{{ URL::to('/') }}/images/favicon/apple-touch-icon-152x152.png"
				/>
				<link
					rel="icon"
					type="image/png"
					href="{{ URL::to('/') }}/images/favicon{{ URL::to('/') }}/images/favicon-196x196.png"
					sizes="196x196"
				/>
				<link
					rel="icon"
					type="image/png"
					href="{{ URL::to('/') }}/images/favicon{{ URL::to('/') }}/images/favicon-96x96.png"
					sizes="96x96"
				/>
				<link
					rel="icon"
					type="image/png"
					href="{{ URL::to('/') }}/images/favicon{{ URL::to('/') }}/images/favicon-32x32.png"
					sizes="32x32"
				/>
				<link
					rel="icon"
					type="image/png"
					href="{{ URL::to('/') }}/images/favicon{{ URL::to('/') }}/images/favicon-16x16.png"
					sizes="16x16"
				/>
				<link
					rel="icon"
					type="image/png"
					href="{{ URL::to('/') }}/images/favicon{{ URL::to('/') }}/images/favicon-128.png"
					sizes="128x128"
				/>
				<meta name="application-name" content="Developers Conference 2023" />
				<meta name="msapplication-TileColor" content="#FFFFFF" />
				<meta
					name="msapplication-TileImage"
					content="{{ URL::to('/') }}/images/favicon/mstile-144x144.png"
				/>
				<meta
					name="msapplication-square70x70logo"
					content="{{ URL::to('/') }}/images/favicon/mstile-70x70.png"
				/>
				<meta
					name="msapplication-square150x150logo"
					content="{{ URL::to('/') }}/images/favicon/mstile-150x150.png"
				/>
				<meta
					name="msapplication-wide310x150logo"
					content="{{ URL::to('/') }}/images/favicon/mstile-310x150.png"
				/>
				<meta
					name="msapplication-square310x310logo"
					content="{{ URL::to('/') }}/images/favicon/mstile-310x310.png"
				/>

				<meta name="HandheldFriendly" content="True" />
				<meta
					content="© Mauritius Software Craftsmanship Community (MSCC) - 2023"
					name="rights"
				/>
				<meta
					name="description"
					content="Being the largest IT Community in Mauritius, we are so passionate about the tech world that doing
						the Developers Conference is a must. With the Virtual Conference, we missed the human touch where
						people exchange and interact with each other."
				/>
				<meta property="og:image" content="{{ URL::to('/') }}/images/og-image.jpeg" />
				<meta property="og:image:type" content="image/jpeg" />
				<meta property="og:image:width" content="1400" />
				<meta property="og:image:height" content="798" />
				<meta property="og:title" content="Developers Conference 2023 | MSCC" />
				<meta
					property="og:description"
					content="Being the largest IT Community in Mauritius, we are so passionate about the tech world that doing
						the Developers Conference is a must. With the Virtual Conference, we missed the human touch where
						people exchange and interact with each other."
				/>
				<meta property="og:url" ontent="https://conference.mscc.mu" />
				<meta
					property="og:site_name"
					content="Being the largest IT Community in Mauritius, we are so passionate about the tech world that doing
						the Developers Conference is a must. With the Virtual Conference, we missed the human touch where
						people exchange and interact with each other. | MSCC"
				/>
				<meta name="twitter:card" content="summary_large_image" />
				<meta name="twitter:domain" content="conference.mscc.mu" />
				<meta name="twitter:site" content="Developers Conference 2023 | MSCC" />
				<meta name="twitter:title" content="Developers Conference 2023 | MSCC" />
				<meta
					name="twitter:description"
					content="Being the largest IT Community in Mauritius, we are so passionate about the tech world that doing
						the Developers Conference is a must. With the Virtual Conference, we missed the human touch where
						people exchange and interact with each other."
				/>
				<meta name="twitter:site:id" content="1455710252" />
				<meta name="twitter:creator" content="@MSCraftsman" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;600;700" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

        <style>
            .custom-shape-divider-bottom-1674392093 {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                overflow: hidden;
                line-height: 0;
                transform: rotate(180deg);
            }

            .custom-shape-divider-bottom-1674392093 svg {
                position: relative;
                display: block;
                width: calc(100% + 1.3px);
                height: 150px;
            }

            .custom-shape-divider-bottom-1674392093 .shape-fill {
                fill: #FFFFFF;
            }
        </style>
    </head>

    <body class="font-sans text-gray-900 antialiased">
        <!-- Top navbar -->
        @include('shared.header')

        @yield('content')

		@include('shared.footer')
    </body>

</html>
