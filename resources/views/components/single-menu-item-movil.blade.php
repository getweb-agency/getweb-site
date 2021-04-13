<li class="pb-4">
  <a href="/{{ $rute }}" class="{{ request()->is( $rute ) ? 'bg-gray-200 rounded' : '' }}
    -m-2 p-2 flex items-start">
    <svg class="flex-shrink-0 h-5 w-5 text-pink-400 stroke-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}" />
    </svg>
    <div class="ml-1 text-sm text-gray-900">
      {{ $name }} 
    </div>
  </a>
</li>