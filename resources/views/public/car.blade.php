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

<section>
  <div class="bg-white py-10 rounded-md shadow-sm w-full max-w-[1280px] xl:mx-auto">
    <div>
      <div class="bg-gray-200 rounded border-b-2 border-gray-300 shadow-md">
        <ul>
          <li>Név</li>
          <li>Rendszám</li>
          <li>Típus</li>
          <li>Gyártási év</li>
          <li>Olajcsere ciklus (km)</li>
          <li>Olajcsere ciklus (év)</li>
          <li>Fékolaj csere ciklus (év)</li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection