@extends('layouts.app')

@section('content')
<section class="my-10">
  <div class="bg-white py-10 rounded-md shadow-sm w-full max-w-[1280px] xl:mx-auto">
    <div class="px-2 xl:px-10">
      <h2 class="text-xl mb-5">Kocsi adatainak feltöltése:</h2>
      <form action="#" method="post">

        <div class="flex flex-col mb-3">
          <label for="name">Név</label>
          <x-form-input type="text" name="name" id="name" place="Suzi"
            value="" />
        </div>
        
        <div class="flex flex-col mb-3">
          <label for="plate">Rendszám</label>
          <x-form-input type="text" name="plate" id="plate" place="KZN-235"
            value="" />
        </div>

        <div class="flex flex-col mb-3">
          <label for="type">Típus</label>
          <x-form-input type="text" name="type" id="type" place="Suzuki Swift"
            value="" />
        </div>

        <div class="flex flex-col mb-3">
          <label for="year">Gyártási év</label>
          <x-form-input type="number" name="year" id="year" place="2008"
            value="" />
        </div>

        <div class="flex flex-col mb-3">
          <label for="oilchicle">Olajcsere ciklus (km)</label>
          <x-form-input type="number" name="oilchange" id="oilchange" place="10000"
            value="" />
        </div>

        <div class="flex flex-col mb-3">
          <label for="oilchicle">Olajcsere ciklus (év)</label>
          <x-form-input type="number" name="oilchange" id="oilchange" place="2"
            value="" />
        </div>

        <div class="flex flex-col mb-3">
          <label for="breakfluidchicle">Fékolaj csere ciklus (év)</label>
          <x-form-input type="number" name="breakfluidchicle" id="breakfluidchicle" place="2 év"
            value="" />
        </div>

        <x-button bgColor="gray">Feltöltés</x-button>
      </form>
    </div>
  </div>
</section>

<section class="my-10">
  <div id="háttér" class="bg-white py-10 px-2 rounded-md shadow-sm w-full max-w-[1280px] xl:mx-auto">
    <div id="táblázat">
      <div class="overflow-x-auto flex">
        <div id="oszlop" class="bg-gray-200 rounded sticky left-0">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-300 px-5 font-semibold">Név</li>
            <li class="h-20 flex items-center border-b border-gray-300 px-5 font-semibold">Rendszám</li>
            <li class="h-20 flex items-center border-b border-gray-300 px-5 font-semibold">Típus</li>
            <li class="h-20 flex items-center border-b border-gray-300 px-5 font-semibold">Gyártási év</li>
            <li class="h-20 flex items-center border-b border-gray-300 px-5 font-semibold">Olajcsere ciklus (km)</li>
            <li class="h-20 flex items-center border-b border-gray-300 px-5 font-semibold">Olajcsere ciklus (év)</li>
            <li class="h-20 flex items-center border-b border-gray-300 px-5 font-semibold">Fékolaj csere ciklus (év)</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzi</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki swift</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2008</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">10000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
        <div id="oszlop">
          <ul class="flex flex-col w-32">
            <li class="h-20 flex items-center border-b border-gray-200 px-5">SX</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">KZN-235</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">Suzuki SX4</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2013</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">15000 km</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">2 év</li>
            <li class="h-20 flex items-center border-b border-gray-200 px-5">3 év</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection