@extends('layouts.main')
@section('content')
	<section class="mt-20 max-w-5xl py-5 px-3 mx-auto speaker">
	@foreach ($session as $s)

	<nav class="flex" aria-label="Breadcrumb">
		<ol class="inline-flex items-center space-x-1 md:space-x-3 uppercase">
			<li class="inline-flex items-center">
			<a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-mustard dark:text-gray-400">
				Home
			</a>
			</li>
			<li>
			<div class="flex items-center">
				<svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
				<a href="{{ route('agenda') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-mustard md:ml-2 dark:text-gray-400">Agenda</a>
			</div>
			</li>
			<li aria-current="page">
			<div class="flex items-center">
				<svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
				<span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $s['title'] }}</span>
			</div>
			</li>
		</ol>
	</nav>

	<div class="speaker__container mt-5">
		<div class="pt-6 text-center space-y-3">
			<div class="font-astronomus uppercase text-2xl font-bold text-slate-800 mb-1">
				{{ $s['title'] }}
			</div>
			<div class="font-dm text-md font-medium text-slate-500 max-w-3xl mx-auto">
				{{ $s['description'] }}
			</div>
		</div>
	</div>

	@dump($s)
	@endforeach
	</section>
@endsection
