<li>
  <a href="/{{ $rute }}" class="
  {{ request()->is( $rute ) ? 'border-b-2 border-pink-400' : '' }}
  -m-2 p-2 flex items-start border-b-2 border-transparent hover:border-pink-400">
  <svg class="flex-shrink-0 h-6 w-6 text-pink-400 stroke-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}" />
  </svg>
  
  <div class="ml-1 text-base font-normal hover:font-medium text-gray-900">
    {{ $name }} 
  </div>
</a>
</li>