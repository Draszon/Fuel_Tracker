@extends('layouts.app')

@section('content')
<section class="my-10">
  <div class="bg-white py-10 rounded-md shadow-sm w-full max-w-[1280px] xl:mx-auto">
    <div class="px-2 xl:px-10">
      <h2 class="font-bold mb-2">Üzemanyag adatok feltöltése / módosítása:</h2>

      @if (session('storeFuel') || session('deleteFuel') || session('updateFuel'))
        <p class="font-bold text-green-500">{{ session('storeFuel') }}</p>
        <p class="font-bold text-red-500">{{ session('deleteFuel') }}</p>
        <p class="font-bold text-green-500">{{ session('updateFuel') }}</p>
      @endif

      <form action="{{ isset($editFuel) ? route('fuel.update', $editFuel->id) : route('fuel.store') }}" method="post">
        @csrf
        @if (isset($editFuel))
          @method('PUT')
        @endif
        <div class="flex flex-col mb-5">
          <label for="date">Dátum</label>
          <x-form-input type="date" name="date" id="date" place=""
            value="{{ $editFuel->date ?? '' }}" />
        </div>

        <div class="flex flex-col mb-5">
          <label for="name">Töltőállomás neve</label>
          <x-form-input type="text" name="name" id="name" place="OMV"
            value="{{ $editFuel->name ?? '' }}" />
        </div>

        <div class="flex flex-col mb-5">
          <label for="quantity">Mennyiség (l)</label>
          <x-form-input type="number" name="quantity" id="quantity" place="34.44"
            value="{{ $editFuel->quantity ?? '' }}" />
        </div>

        <div class="flex flex-col mb-5">
          <label for="km">Megtett táv (km)</label>
          <x-form-input type="number" name="km" id="km" place="546"
            value="{{ $editFuel->km ?? '' }}" />
        </div>

        <div class="flex flex-col mb-5">
          <label for="money">Összeg (Ft)</label>
          <x-form-input type="number" name="money" id="money" place="21655"
            value="{{ $editFuel->money ?? '' }}" />
        </div>

        <x-button bgColor="gray">
          {{ isset($editFuel) ? 'Frissítés' : 'Feltöltés' }}
        </x-button>

      </form>
      <div class="mt-5">
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <x-button bgColor="gray">Kijelentkezés</x-button>
        </form>
      </div>
      
    </div>
  </div>
</section>

<section>
  <div class="bg-white py-10 rounded-md shadow-sm w-full max-w-[1280px] xl:mx-auto">
    <div class="px-2 xl:px-10">
      <div class="overflow-x-auto">
        <div class="min-w-max bg-gray-200 rounded border-b-2 border-gray-300 shadow-md">
          <div class="h-10 flex justify-center items-center">
            <ul class="flex flex-row gap-5 text-center font-medium">
              <li class="flex-none w-32">Dátum</li>
              <li class="flex-none w-32">Töltőállomás</li>
              <li class="flex-none w-32">Mennyiség (l)</li>
              <li class="flex-none w-32">Megtett táv (km)</li>
              <li class="flex-none w-32">Fogyasztás</li>
              <li class="flex-none w-32">Összeg</li>
              <li class="flex-none w-32">Műveletek</li>
            </ul>
          </div>
        </div>

        <div class="min-w-max border-b border-gray-300">
          @foreach ($fuelDatas as $fuelData)
          <div class="h-10 flex justify-center items-center border-b">
            <ul class="flex flex-row gap-5 text-center font-medium">
              <li class="flex-none w-32">{{ $fuelData->date }}</li>
              <li class="flex-none w-32">{{ $fuelData->name }}</li>
              <li class="flex-none w-32">{{ $fuelData->quantity }} l</li>
              <li class="flex-none w-32">{{ $fuelData->km }} km</li>
              <li class="flex-none w-32" >{{ $fuelData->consumption }} l/100km</li>
              <li class="flex-none w-32">{{ $fuelData->money }} Ft</li>
              <li class="w-32 flex gap-5">
                <form action="{{ route('fuel.destroy', $fuelData->id) }}" method="post" class="inline-block">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="py-1 px-2 rounded bg-red-500 text-white">Törlés</button>
                </form>
                
                <form action="{{ route('fuel.show', $fuelData->id) }}" method="get" class="inline-block">
                  <button type="submit" class="py-1 px-2 rounded bg-gray-500 text-white">Szerk.</button>
                </form>
              </li>
            </ul>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
