@extends('layouts.main')
@section('content')
	<section class="mt-20 max-w-6xl px-3 mx-auto">
    <h1 class="text-center text-gray-700 mt-5 text-5xl font-astronomus uppercase">Speakers</h1>

		@if(isset($error))
			<p>{{ $error }}</p>
		@else
			<div class="grid xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
					@foreach($speakers as $speaker)
						<a href="/speaker/{{ $speaker['id'] }}" class="p-5 transition-all hover:scale-110">
							<img class="w-28 h-28 rounded-full mx-auto drop-shadow-xl" src="{{ $speaker['profilePicture'] }}">
							<div class="pt-6 text-center space-y-3">
								<figcaption class="font-medium">
									<div class="font-astronomus uppercase font-bold text-slate-800 mb-2">
										{{ $speaker['fullName'] }}
									</div>
									<div class="font-dm text-sm font-bold text-slate-400">
										{{ $speaker['tagLine'] }}
									</div>
								</figcaption>
							</div>
						</a>
					@endforeach
			</div>
		@endif
	</section>
@endsection
