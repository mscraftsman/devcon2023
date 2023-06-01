@extends('layouts.main')
@section('content')
	<section class="mt-20 max-w-4xl px-3 mx-auto">
        <h2 class="text-center font-astronomus font-medium  uppercase font-dm text-mustard pt-10">What's on the menu</h2>
        <h1 class="text-center mt-1 text-gray-700 text-6xl font-astronomus uppercase font-bold">Agenda</h1>
	</section>

    <section class="mt-20 max-w-7xl px-3 mx-auto">
        hello
        <div id="agenda">

          <button @click="count++">
    <div>@{{ count }}</div>
  </button>
        </div>
    </section>

@endsection
