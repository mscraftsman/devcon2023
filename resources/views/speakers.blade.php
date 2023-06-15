@extends('layouts.main')
@section('content')
	<section class="bg-slate-100">
		<section class="pt-20 pb-10 max-w-4xl px-3 mb-7 mx-auto ">
			<h2 class="text-center font-astronomus font-bold uppercase font-dm text-purple pt-10">Unleashing Tech Brilliance Together</h2>
			<h1 class="text-center mt-1 text-gray-700 text-6xl font-astronomus uppercase font-bold mb-1">Speakers</h1>
			<p class="text-center text-slate-400 font-dm max-w-3xl text-lg">Join us for a transformative experience as our distinguished speakers, industry pioneers, and thought leaders converge to illuminate the latest frontiers of technology</p>
		</section>
	</section>
	<section class="mt-10 pt-8 max-w-6xl px-3 mx-auto">
		@if(isset($error))
			<p>{{ $error }}</p>
		@else
			<div class="grid xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
				@foreach($speakers as $speaker)
					<a href="{{route('speaker', $speaker['id'])}}" class="p-5 transition-all hover:scale-110 hover:bg-slate-100">
						<img class="w-28 h-28 rounded-full mx-auto drop-shadow-xl" src="{{ $speaker['profilePicture'] }}">
						<div class="pt-6 text-center space-y-3">
							<figcaption class="font-medium">
								<div class="font-astronomus uppercase font-bold text-slate-800 mb-2">
									{{ $speaker['fullName'] }}
								</div>
								<div class="font-dm text-sm font-bold text-slate-400">
									{{ trimText($speaker['tagLine']) }}
								</div>
							</figcaption>
						</div>
					</a>
				@endforeach
		</div>
		@endif
	</section>
@endsection
