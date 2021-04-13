<nav class="py-4 px-8 block md:hidden bg-white sticky top-0 z-40" x-data="{ open: false }">
  <div class="flex justify-between items-center " >
    <div>
      <a href="/"><x-logo.black class='h-10 w-auto'/></a>
    </div>
    <div>
      <button class="focus:outline-none" @click="open = true">
        <svg class='h-7 text-c-rojo' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>
  <div class="relativee">
    <ul class="flex flex-col mt-3 pt-3 border-t-2 border-gray-200 absolutee" x-show.transition.duration.200ms.origin.top.left="open" @click.away="open = false">
      <x-single-menu-item-movil rute='' name='Inicio'
      icon='M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'/>

      <x-single-menu-item-movil rute='hosting/planes-hosting' name='Hosting' 
      icon='M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01'/>

      <x-single-menu-item-movil rute='paginas-web/wordpress-administrable' name='Páginas web administrables'
      icon='M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2'/>
      <x-single-menu-item-movil rute='paginas-web/tienda-virtual-ecommerce' name='Tienda online, e-commerce'
      icon='M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z'/>
      <x-single-menu-item-movil rute='apps/progressive-web-apps' name='Progressive Web Apps'
      icon='M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z'/>

      <x-single-menu-item-movil rute='paginas-web/desarrollo-personalizado' name='Desarrollos y soluciones a necesidades especificas'
      icon='M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z'/>

      <x-single-menu-item-movil rute='marketing-digital/google-ads' name='Marketing digital' 
      icon='M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z'/>

      <x-single-menu-item-movil rute='portafolio/proyectos' name='Portafolio de proyectos' 
      icon='M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'/>

      <x-single-menu-item-movil rute='cotizar-en-linea' name='Cotizador automático'
      icon='M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z'/>

    </ul>
  </div>
</nav>