@extends('layouts.app')

@section('content')
<section class="bg-white w-full py-10 px-2 rounded-md shadow-mg">
  <div>
    <div>
      <h2 class="font-bold mb-2">Üzemanyag adatok feltöltése:</h2>
      <form action="#" method="post">
        <div class="flex flex-col mb-5">
          <label for="date">Dátum</label>
          <input type="date" name="date" id="date" class="
          rounded-lg border-gray-200 shadow-lg
          ">
        </div>
        <div class="flex flex-col mb-5">
          <label for="name">Töltőállomás neve</label>
          <select name="fuel-stations" id="fuel-station" class="
            rounded-lg border-gray-200 shadow-lg
          ">
            <option value="OMV">OMV</option>
            <option value="MOL">MOL</option>
            <option value="Orlen">Orlen</option>
          </select>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection