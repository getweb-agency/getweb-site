<div class="max-w-md mx-auto bg-white transition transform hover:-translate-y-2 rounded-xl shadow-md overflow-hidden">
  <a href="{{$rute}}">
    <div class="relative">
      <img class="h-48 w-full object-cover" src="{{asset($image)}}" alt="Getweb">
      <div class="absolute top-5 right-5 z-10 bg-c-rojo bg-opacity-90 px-5 py-1 rounded-full text-white text-xs shadow-md">
        + Mas información
      </div>
    </div>
    <div class="p-8">
      <div class="flex flex-row text-c-rojo">
        <svg class="h-4 bg-gray-200 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
        <div class="uppercase tracking-wide text-xs font-semibold">
        Servicios {{$category}}</div>
      </div>
      <p class="block mt-1 text-lg leading-tight font-medium text-black">{{$service}}</p>
    </div>
  </a>
</div>