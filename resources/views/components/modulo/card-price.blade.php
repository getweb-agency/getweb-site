<div class="w-full sm:w-1/3 rounded">
  <div class="p-8 bg-white rounded-t shadow border-b-2 border-gray-200">
    <p class="text-center sm:text-left ">
      <span class="text-white bg-c-rojo rounded-full px-6 py-1 font-bold tracking-tight text-sm shadow">{{$type}}</span>
      <span class="text-xs mt-1 font-bold text-gray-400 uppercase block lg:inline-block">{{$subtype}}</span>
    </p>
    <p class="text-4xl lg:text-5xl font-bold tracking-tighter my-1 sm:my-4">${{$price}}
      <span class="text-lg text-gray-400 tracking-tight inline-block align-top">+ IVA</span>
    </p>
    <p class="text-gray-600 text-sm text-justify">{{$info}}</p>
  </div>
  <div class="p-8 bg-gray-200 rounded-b shadow text-sm font-bold">
    {{$list}}
  </div>
  @if (Request::is('paginas-web/tienda-virtual-ecommerce') || Request::is('paginas-web/wordpress-administrable') || Request::is('paginas-web/desarrollo-personalizado')) 
  <div class="flex justify-items-center text-gray-700">
    <a href="/portafolio/proyectos" class="flex items-center mt-3 px-4 py-2 bg-gradient-to-br from-yellow-200 to-yellow-400 hover:to-yellow-500 rounded-md shadow w-full justify-center font-medium ">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 mr-2 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
      </svg>
      Conozca nuestro portafolio
    </a>
  </div>
  @endif
</div>
