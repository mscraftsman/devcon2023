@extends('layouts.main')
@section('content')
	<section class="mt-20 max-w-4xl px-3 mx-auto">
    <h2 class="text-center font-astronomus font-medium  uppercase font-dm text-mustard pt-10">What's on the menu</h2>
    <h1 class="text-center mt-1 text-gray-700 text-6xl font-astronomus uppercase font-bold">Agenda</h1>
	</section>
  <section class="mt-10 max-w-7xl px-2 mx-auto flex">

   

    <div class="sessions__column">
      <div class="tracks__container grid grid-cols-4 gap-2 mb-10 ml-20" id="rooms-bar">
        <div class="track__title text-center bg-purple text-white py-4 uppercase font-bold rounded-md">
          Andromeda
        </div>
        <div class="track__title text-center bg-purple text-white py-4 uppercase font-bold rounded-md">
          Pandora
        </div>
        <div class="track__title text-center bg-purple text-white py-4 uppercase font-bold rounded-md">
          Titan
        </div>
        <div class="track__title text-center bg-purple text-white py-4 uppercase font-bold rounded-md">
          Tatooine (UGs)
        </div>
      </div>

      <div class="track__session" style="grid-template-areas: {{ generateGridTemplateAreas($cellIds) }}">
        @foreach($time_range as $time)
          <div 
            class="time__track"
            style="grid-area: {{ calculateTimePlacement($time) }}"
          ><span class="time__tag px-2 py-2 bg-mustard font-bold center rounded-md inline-flex">
            {{$time}}
            </span>
            <div class="line"></div>
          </div>
        @endforeach
      
        @foreach($groupedSessions as $key => $value)
          @if($key == 'Thursday')
            @foreach($value as $key => $session)
              <div
                  class="session__wrapper px-4 py-3 rounded-md bg-slate-100 block mb-3" 
                  style="grid-area: {{ calculatePlacement($session) }}"
                  data-room="{{$session['room']}}"
                  >
                <div class="tile_start text-sm text-black mb-1">
                  {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                </div>
                <h3 class="font-bold text-md mb-1 text-purple">{{$session['title']}}</h3>
                <div class="speaker text-sm mt-2">
                  @foreach($session['speakers'] as $key => $speaker)
                    <div class="speaker--headshot flex items-center mb-1">
                      <img src="{{ getSpeakerPicture($speaker['id']) }}" class="w-8 h-8 rounded-full mr-2" alt="">
                      <a href="/speaker/{{ $speaker['id'] }}">{{$speaker['name']}}</a>
                    </div>
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
