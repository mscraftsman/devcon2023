@extends('layouts.main')
@section('content')
	<section class="mt-20 max-w-4xl px-3 mx-auto">
    <h2 class="text-center font-astronomus font-medium  uppercase font-dm text-mustard pt-10">What's on the menu</h2>
    <h1 class="text-center mt-1 text-gray-700 text-6xl font-astronomus uppercase font-bold">Agenda</h1>
	</section>
  <?php 

    $time_range = [
      '08:00',
      '09:00',
      '10:00',
      '11:00',
      '12:00',
      '13:00',
      '14:00',
      '15:00',
      '16:00',
      '17:00'
    ];

  ?>
  <section class="mt-20 max-w-7xl px-2 mx-auto flex">

    <div class="time__column mr-5">
      @foreach($time_range as $time)
        <div class="time__tag px-2 py-2 bg-mustard rounded-md mb-10 font-bold center">{{$time}}</div>
      @endforeach
    </div>

    <div class="sessions__column">
      <div class="tracks__container grid grid-cols-4 gap-4 mb-3">
        <div class="track__title text-center bg-mustard py-3 uppercase font-bold rounded-md">
          Andromeda
        </div>
        <div class="track__title text-center bg-mustard py-3 uppercase font-bold rounded-md">
          Pandora
        </div>
        <div class="track__title text-center bg-mustard py-3 uppercase font-bold rounded-md">
          Titan
        </div>
        <div class="track__title text-center bg-mustard py-3 uppercase font-bold rounded-md">
          Tatooine (UGs)
        </div>
      </div>


      <div class="track__session" style="grid-template-areas: {{ generateGridTemplateAreas($cellIds) }}">
        @foreach($groupedSessions as $key => $value)
          @if($key == 'Thursday')
            @foreach($value as $key => $session)
              <div class="session__wrapper px-3 py-3 rounded-md bg-slate-200" style="grid-area: {{ calculatePlacement($session) }}">
                <div class="tile_start text-sm text-black mb-2">
                  {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                </div>
                <h3 class="font-bold mb-1">{{$session['title']}}</h3>
                <div class="speaker text-sm">
                  @foreach($session['speakers'] as $speaker)
                    <a href="/speaker/{{ $speaker['id'] }}">{{$speaker['name']}}</a>
                  @endforeach
                </div>
              </div>

            @endforeach
          @endif
        @endforeach
      </div>
    </div>
  </section>
@endsection
