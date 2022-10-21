@props(['name'])
<input class="border border-gray-200 p-2 w-full"
           name="{{  $name }}"
           id="{{  $name }}"
           {{ $attributes(['value' => old($name)]) }}
    >
