<div class="max-w-md mx-auto bg-white transition transform hover:-translate-y-2 rounded-xl shadow-md overflow-hidden">
  <a href="{{$rute}}">
    <div class="relative">
      <img class="h-48 w-full object-cover" src="{{asset($image)}}" alt="Getweb">

      <div class="flex flex-row items-center absolute top-5 right-5 z-10 bg-c-rojo bg-opacity-90 px-5 py-1 rounded-full text-white text-xs shadow-md">
        <svg class="h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
        </svg>
        <p>Ver</p>
      </div> 
    </div>
    <div class="p-8">
      <div class="flex flex-row text-c-rojo">
        <svg class="h-4 bg-gray-200 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
        <div class="uppercase tracking-wide text-xs font-semibold">
        Ver el proyecto</div>
      </div>
      <p class="block mt-1 text-lg leading-tight font-medium text-black">{{$service}}</p>
    </div>
  </a>
</div>