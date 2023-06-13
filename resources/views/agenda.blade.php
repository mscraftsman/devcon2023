@extends('layouts.main')
@section('content')
  <div x-data="{ selectedOption: 'thursday' }">
    <section class="mt-20 max-w-4xl px-3 mx-auto">
      <h2 class="text-center font-astronomus font-medium  uppercase font-dm text-mustard pt-10">What's on the menu</h2>
      <h1 class="text-center mt-1 text-gray-700 text-6xl font-astronomus uppercase font-bold">Agenda</h1>
    </section>
    <section class="mt-10 max-w-7xl px-2 mx-auto" >
      <div class="day__selector">
        <div class="days__container grid grid-cols-3 gap-2" >
            <div class="day--thursday">
              <input type="radio" 
                id="day-thursday" 
                name="day-selection" 
                x-model="selectedOption"
                value="thursday"
                checked="true" 
                class="hidden peer" 
                required>
              <label 
                for="day-thursday" 
                class="
                      inline-flex 
                      items-center 
                      justify-center 
                      w-full 
                      px-3 py-4
                      text-center
                      bg-white
                      border-gray-200
                      rounded-lg
                      border-2
                      cursor-pointer 
                      hover:text-gray-600
                      hover:bg-gray-100
                      peer-checked:border-mustard 
                      peer-checked:border-2
                      peer-checked:bg-mustard
                      peer-checked:text-black 
                      peer-checked:hover:bg-black
                      peer-checked:hover:text-mustard
                      peer-checked:hover:border-2
                      peer-checked:hover:border-mustard
                      ">                           
                <div class="block">
                  <div class="w-full uppercase text-md font-bold">Thursday</div>
                </div>
              </label>
            </div>
            <div class="day--friday">
              <input 
                type="radio" 
                id="day-friday" 
                name="day-selection"
                x-model="selectedOption"
                value="friday" 
                class="hidden peer">
              <label 
                for="day-friday" 
                class="
                      inline-flex 
                      items-center 
                      justify-center 
                      w-full 
                      px-3 py-4
                      text-center
                      bg-white
                      border-gray-200
                      rounded-lg
                      border-2
                      cursor-pointer 
                      hover:text-gray-600
                      hover:bg-gray-100
                      peer-checked:border-mustard 
                      peer-checked:border-2
                      peer-checked:bg-mustard
                      peer-checked:text-black 
                      peer-checked:hover:bg-black
                      peer-checked:hover:text-mustard
                      peer-checked:hover:border-2
                      peer-checked:hover:border-mustard
                      ">                           
                <div class="block">
                  <div class="w-full uppercase text-md font-bold">Friday</div>
                </div>
              </label>
            </div>
            <div class="day--saturday">
              <input 
                type="radio" 
                id="day-saturday" 
                name="day-selection" 
                x-model="selectedOption"
                value="saturday" 
                class="hidden peer">
              <label 
                for="day-saturday" 
                class="
                      inline-flex 
                      items-center 
                      justify-center 
                      w-full 
                      px-3 py-4
                      text-center
                      bg-white
                      border-gray-200
                      rounded-lg
                      border-2
                      cursor-pointer 
                      hover:text-gray-600
                      hover:bg-gray-100
                      peer-checked:border-mustard 
                      peer-checked:border-2
                      peer-checked:bg-mustard
                      peer-checked:text-black 
                      peer-checked:hover:bg-black
                      peer-checked:hover:text-mustard
                      peer-checked:hover:border-2
                      peer-checked:hover:border-mustard
                      ">                           
                <div class="block">
                  <div class="w-full uppercase text-md font-bold">Saturday</div>
                </div>
              </label>
            </div>
        </div>
      </div>
    </section>
    <section class="mt-10 max-w-7xl px-2 mx-auto flex">

      <div class="sessions__column">
        <div class="tracks__container grid grid-cols-4 gap-2 mb-10 ml-20 h-12" id="rooms-bar">
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

        <div class="day--thurday--agenda" id="agenda-thursday" x-show="selectedOption == 'thursday'">
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
                  <a
                      class="session__wrapper px-4 py-3 rounded-md bg-slate-100 block mb-3 hover:bg-slate-200 hover:drop-shadow-md transition-all hover:scale-105" 
                      style="grid-area: {{ calculatePlacement($session) }}"
                      data-room="{{ $session['room'] }}"
                      href="/agenda/{{ $session['id'] }}"
                      >
                    <div class="tile_start text-sm text-slate-500 mb-1 font-medium">
                      {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                    </div>
                    <h3 class="font-bold text-md mb-2 text-purple ">{{ $session['title'] }}</h3>
                    <div class="speaker text-sm mt-2">
                      @foreach($session['speakers'] as $key => $speaker)
                        <div class="speaker--headshot flex items-center mb-1">
                          <img src="{{ getSpeakerPicture($speaker['id']) }}" class="w-8 h-8 rounded-full mr-2" alt="{{$speaker['name']}}">
                          <div href="/speaker/{{ $speaker['id'] }}">{{$speaker['name']}}</div>
                        </div>
                      @endforeach
                    </div>
                  </a>
                @endforeach
              @endif
            @endforeach
          </div>
        </div>

        <div class="day--friday--agenda" id="agenda-friday" x-show="selectedOption == 'friday'">
          <div class="track__session" style="grid-template-areas: {{ generateGridTemplateAreas($cellIdsFriday) }}">
            @foreach($time_range_friday as $time)
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
              @if($key == 'Friday')
                @foreach($value as $key => $session)
                  <a
                      class="session__wrapper px-4 py-3 rounded-md bg-slate-100 block mb-3 hover:bg-slate-200 hover:drop-shadow-md transition-all hover:scale-105" 
                      style="grid-area: {{ calculatePlacement($session) }}"
                      data-room="{{ $session['room'] }}"
                      href="/agenda/{{ $session['id'] }}"
                      >
                    <div class="tile_start text-sm text-slate-500 mb-1 font-medium">
                      {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                    </div>
                    <h3 class="font-bold text-md mb-2 text-purple ">{{ $session['title'] }}</h3>
                    <div class="speaker text-sm mt-2">
                      @foreach($session['speakers'] as $key => $speaker)
                        <div class="speaker--headshot flex items-center mb-1">
                          <img src="{{ getSpeakerPicture($speaker['id']) }}" class="w-8 h-8 rounded-full mr-2" alt="{{$speaker['name']}}">
                          <div href="/speaker/{{ $speaker['id'] }}">{{$speaker['name']}}</div>
                        </div>
                      @endforeach
                    </div>
                  </a>
                @endforeach
              @endif
            @endforeach
          </div>
        </div>

        <div class="day--saturday--agenda" id="agenda-saturday" x-show="selectedOption == 'saturday'">
          <div class="track__session" style="grid-template-areas: {{ generateGridTemplateAreas($cellIdsFriday) }}">
            @foreach($time_range_friday as $time)
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
              @if($key == 'Saturday')
                @foreach($value as $key => $session)
                  <a
                      class="session__wrapper px-4 py-3 rounded-md bg-slate-100 block mb-3 hover:bg-slate-200 hover:drop-shadow-md transition-all hover:scale-105" 
                      style="grid-area: {{ calculatePlacement($session) }}"
                      data-room="{{ $session['room'] }}"
                      href="/agenda/{{ $session['id'] }}"
                      >
                    <div class="tile_start text-sm text-slate-500 mb-1 font-medium">
                      {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                    </div>
                    <h3 class="font-bold text-md mb-2 text-purple ">{{ $session['title'] }}</h3>
                    <div class="speaker text-sm mt-2">
                      @foreach($session['speakers'] as $key => $speaker)
                        <div class="speaker--headshot flex items-center mb-1">
                          <img src="{{ getSpeakerPicture($speaker['id']) }}" class="w-8 h-8 rounded-full mr-2" alt="{{$speaker['name']}}">
                          <div href="/speaker/{{ $speaker['id'] }}">{{$speaker['name']}}</div>
                        </div>
                      @endforeach
                    </div>
                  </a>
                @endforeach
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection