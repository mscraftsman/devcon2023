@extends('layouts.main')
@section('content')
	<section class="mt-20 max-w-5xl py-5 px-3 mx-auto speaker">

    
	@foreach ($session as $s)

		
        @dump($s)

	@endforeach
	</section>
@endsection
