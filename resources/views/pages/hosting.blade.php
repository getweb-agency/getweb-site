{{-- LAYOUT --}}
@extends('layouts.app')
{{-- SEO --}}
@section ('seoTitle', 'Hosting más certificado SSL')
@section ('seoDescription', 'Hosting comercial más certificado SSL y asistencia personalizada para tu pagina Web.')
@section ('seoKeywords','hosting, colombia, bogota')
@section ('seoRobots', 'index, follow')
{{-- CONTENT --}}
@section('content')
{{-- HEADING --}}
<x-banner.page 
imgRute="{{asset('images/banners/banner-hosting.jpg')}}"
text1="Planes de Hosting"
text2="HOSTING COMERCIAL MÁS CERTIFICADO SSL"
text3="¿Necesitas un hosting para tu sitio web? Ofrecemos planes de hosting que te permitirá una gran flexibilidad y alojamiento. Si no estás seguro siempre puedes llamar al equipo de asesores de Getweb y pregunta que tipo de hosting ideal para ti."
/>

{{-- PAGE-CONTENT --}}
<div class="bg-c-morado py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestros precios"
  style1="text-white"
  text2="Planes de hosting más certificado SSL"
  style2="text-white"
  text3="Planes y servicios de hosting anuales en servidores Linux"
  style3="text-white"
  />
</div>

{{-- PRICES --}}
<div class="overflow-visible bg-gradient-to-b from-c-morado via-white to-white pb-4 px-8">
  <div class="flex justify-center flex-col sm:flex-row space-y-6 sm:space-y-0 space-x-0 sm:space-x-6">

    <x-modulo.card-price-hosting 
    type="Basico"
    subtype="Hosting"
    price="100.000"
    info="Recursos básicos para los sitios que están empezando."
    domain="1"
    db="2"
    banda="1"
    space="500MB"
    mail="1"
    ftp="1"
    />
    <x-modulo.card-price-hosting 
    type="Emprendedor"
    subtype="Hosting"
    price="150.000"
    info="Más espacio, recursos y flexibilidad para tu sitio."
    domain="1"
    db="5"
    banda="5"
    space="1GB"
    mail="2"
    ftp="2"
    />
    <x-modulo.card-price-hosting 
    type="Empresario"
    subtype="Hosting"
    price="300.000"
    info="Más potencia para los sitios complejos y el tráfico pesado."
    domain="Ilimitados"
    db="5"
    banda="30"
    space="5GB"
    mail="5"
    ftp="5"
    />
    <x-modulo.card-price-hosting 
    type="Corporativo"
    subtype="Hosting"
    price="500.000"
    info="Soporta múltiples sitios complejos con gran información."
    domain="Ilimitados"
    db="10"
    banda="60"
    space="10GB"
    mail="10"
    ftp="Ilimitados"
    />

    {{-- <div class="bg-white w-full rounded flex flex-row">
      <div class="p-8 w-full lg:w-3/5">
        <p class="text-sm text-gray-700 border-l-2 border-gray-200 pl-3"><span class="text-base font-semibold text-c-rojo">Nuestra pautas de publicidad en Google Ads incluyen</span></p>
        <p class="text-lg leading-6 font-medium text-gray-900 py-4">Un servicio de primera que contempla todo lo necesario para que tu campaña sea un éxito TOTAL</p>
        <div class="text-gray-600 text-sm">
          <ul class="list-disc list-inside pb-3">
            <li>Publicidad en red de Búsqueda</li>
            <li>Publicidad para móviles</li>
            <li>Publicidad en Display y Remarketing</li>
            <li>Publicidad en Youtube</li>
            <li>Publicidad en campañas de Shopping</li>
            <li>Especialista certificado asignado a la cuenta</li>
            <li>Pruebas de conversión</li>
            <li>Consultoría avanzada en marketing digital</li>
            <li>Análisis y estudio de mercadeo</li>
            <li>Optimizaciones semanales</li>
            <li>Estudio inicial y diagnóstico de sitio web</li>
            <li>Informes rápidos de rendimiento a mitad de periodo</li>
            <li>Campañas, anuncios y palabras claves ilimitadas</li>
            <li>Informes de rendimiento mensuales</li>
            <li>Seguimiento permanente a la cuenta</li>
            <li>Asesoría telefónica con personal capacitado</li>
          </ul>
          <p>En tan solo 24 horas tendrás tu campaña al aire y funcionando, toma la decisión de empezar a recibir clientes desde el primer momento con este servicio.
          </p>
        </div>
      </div>
      <div class="bg-cover bg-center max-h-ful w-2/5 rounded-r hidden lg:block" style="background-image: url({{asset('images/banners/banner-hosting.jpg')}})"></div>
    </div> --}}
  </div>
</div>

{{-- STEPS --}}
<div class="py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestros proceso"
  style1="text-black"
  text2="¿Cómo funciona el servicio?"
  style2="text-c-rojo"
  text3="El proceso se enfocan en 3 diferentes etapas de servicio"
  style3="text-gray-500"
  />
</div>

<div class="py-4 px-8">
  <div class="flex sm:flex-row flex-col justify-center border border-gray-300 rounded sm:divide-x divide-y divide-gray-200">
    <x-modulo.step-price-hosting 
    step="1"
    style="bg-pink-400"
    text1="Llámenos o escribanos"
    text2="Hacemos una breve llamada telefónica con preguntas sobre tu proyecto o negocio y dominio."
    />
    <x-modulo.step-price-hosting 
    step="2"
    style="bg-pink-600"
    text1="Contratas el servicio"
    text2="Realizas el pago por el servicio y envias la información solicitada de tu dominio."
    />
    <x-modulo.step-price-hosting 
    step="3"
    style="bg-pink-700"
    text1="Configuracion y entrega"
    text2="Activamos y configuramos tu nuevo Hosting, certificado SSL y apuntamos tu Dominio en menos de 24 horas para que empieces a usarlo."
    />
  </div>
</div>

{{-- CTA --}}
<x-cta.main />

{{-- SERVICE_INFO --}}
<div class="py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestro servicio"
  style1="text-black"
  text2="¿POR QUE PREFERIR LOS SERVICIOS DE GETWEB?"
  style2="text-c-rojo"
  text3="Somos profesionales con experiencia de más de 8 años en el mercado en el servicio de hosting"
  style3="text-gray-500"
  />
</div>
<div class="pb-4 px-8">
  <div class="flex justify-center flex-col sm:flex-row space-y-6 sm:space-y-0 space-x-0 sm:space-x-6">
    <div class="w-full sm:w-1/2 border border-gray-300 p-6 rounded">
      <h4 class="text-lg leading-6 font-medium text-gray-900">Garantía de cumplimiento y Máxima confiabilidad</h4>
      <p class="text-sm text-gray-700 border-l-2 border-gray-200 pl-3"><span class="block text-md font-bold my-3 text-c-rojo">Entendemos que no hay nada más frustrante que el tiempo de inactividad del servidor. Cuando su sitio web está inactivo, significa que sus visitantes no pueden leer su contenido y, lo más importante, no pueden comprar en su sitio. Es una pérdida total de oportunidades, así como una pérdida de tiempo y trabajo duro.</span> En Getweb seleccionamos a nuestros ingenieros y usamos solo el mejor hardware, redes, centros de datos, software y técnicas de la industria para garantizar que nuestros servidores funcionen con un rendimiento óptimo. 
        Al final del día, queremos que duerma tranquilo sabiendo que tomó la decisión correcta al elegir a Getweb Hosting para todas sus necesidades de alojamiento web. <br><br>Queremos que se sienta seguro de que su negocio está en nuestras manos de confianza. ¡Es por eso que su cuenta de alojamiento web también incluirá nuestro compromiso de tiempo de actividad del 99,9%.</p>
      </div>
      <div class="w-full sm:w-1/2 border border-gray-300 p-6 rounded">
        <h4 class="text-lg leading-6 font-medium text-gray-900">Tecnología avanzada, Seguridad y Planes escalables</h4>
        <p class="text-sm text-gray-700 border-l-2 border-gray-200 pl-3"><span class="block text-md font-bold my-3 text-c-rojo">Desde nuestro lanzamiento, hemos tenido un fuerte enfoque en cargar las mejores versiones del software de desarrollo más popular. ¡Nuestros servidores también admiten versiones anteriores! Algunos de los software de desarrollo disponibles en su cuenta incluyen: PHP 5.6, 7.1, 7.2, 7.3, 7.4 u 8.0 (elija su versión) MySQL 5.6 / MariaDB PostgreSQL 9.6 Python 3.4 PERL 5.10 Apache 2.4 Node.js 12 FTP / SFTP Acceso SSH gratuito SSL y SSL gratuito.
        </span> Ademas su cuenta incluye Protección HackScan gratuita para ayudar a bloquear los ataques antes de que puedan dañar su sitio. Las actualizaciones del kernel sin reinicio de KernelCare, la defensa de fuerza bruta, un firewall dual y una serie de otras características de seguridad ya están implementadas para ayudar a mantener su sitio seguro cuando elige Getweb Hosting. Nuestra protección reforzada de denegación de servicio distribuida ( DDoS ) incluso mejora la probabilidad de que su sitio permanezca en línea incluso durante los ataques de denegación de servicio distribuidos más sofisticados.<br><br>A medida que su sitio web crece, también puede hacerlo su plan de alojamiento. Nuestro equipo puede ayudarlo a mover sus sitios y su cuenta sin problemas a un plan de alojamiento de mayores recursos si supera su plan actual.</p>
      </div>
    </div>
  </div>
  @stop