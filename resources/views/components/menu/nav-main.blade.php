<div class="sticky top-0 z-40">
  <div class="hidden md:block">
    <nav class="flex justify-between py-4 px-8 bg-white bg-opacity-100">
      <ul class="flex items-center">
        <li>
          <a href="/"><x-logo.black class='h-12 w-auto' /></a>
        </li>
      </ul>
      <ul class="flex items-center space-x-4">
        <x-single-menu-item rute='hosting/planes-hosting' name='Hosting' 
        icon='M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01'/>

        <li class="relative -m-2 p-2 flex items-start border-b-2 border-transparent hover:border-pink-400" x-data="{ open: false }">
          <button class="-m-2 p-2 flex items-center focus:outline-none" @click="open = true">
            <svg class="flex-shrink-0 h-6 w-6 text-pink-400 stroke-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
            <div class="ml-1 text-base font-normal hover:font-medium text-gray-900">
              Páginas web
            </div>
          </button>

          <div class="absolute z-20 origin-top-right absolute left-0 mt-10 w-80 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
          x-show.transition.duration.200ms.origin.top.right="open"
          @click.away="open = false"
          >
          <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            <a href="/paginas-web/wordpress-administrable" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Páginas web administrables</a>
            <a href="/paginas-web/tienda-virtual-ecommerce" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Tienda online, e-commerce</a>
            <a href="/apps/progressive-web-apps" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Progressive Web Apps</a>
            <a href="/paginas-web/desarrollo-personalizado" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Desarrollos y soluciones a necesidades especificas</a>
          </div>
        </li>
        <x-single-menu-item rute='marketing-digital/google-ads' name='Marketing digital' 
        icon='M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z'/>

        <x-single-menu-item rute='portafolio/proyectos' name='Portafolio de proyectos' 
        icon='M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'/>
      </ul>
      <ul class="flex items-center">
        <li>
          <a href="/cotizar-en-linea" class="bg-gray-100 px-4 py-2 rounded-md shadow">
            Cotiza en línea
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>