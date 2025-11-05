@php
  $classes = implode(' ', [
    'transition',
    'ease-in-out',
    'delay-150',
    'text-white',
    'rounded',
    'py-2',
    'px-10',
    "bg-$bgColor-500",
    "hover:bg-$bgColor-700",
  ]);
@endphp

<button type="submit" {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</button>
