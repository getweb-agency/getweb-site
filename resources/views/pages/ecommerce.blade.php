{{-- LAYOUT --}}
@extends('layouts.app')
{{-- SEO --}}
@section ('seoTitle', 'Tienda en linea, E-commerce, Paginas Web en Bogota')
@section ('seoDescription', 'Creamos tu Tienda en linea o Ecommerce con un diseño atractivo y sencillo para que tus clientes tengan una excelente experiencia de compra.')
@section ('seoKeywords','paginas web bogota, hosting, marketing digital, Tienda en linea E-commerce, colombia, bogota')
@section ('seoRobots', 'index, follow')
{{-- CONTENT --}}
@section('content')
{{-- HEADING --}}
<x-banner.page 
imgRute="{{asset('images/banners/banner-ecommerce.jpg')}}"
text1="Página web para venta en linea"
text2="PÁGINAS WEB TIENDA VIRTUAL, ECOMMERCE, VENTA EN LÍNEA"
text3="Creamos tu Tienda Virtual o E-commerce con un diseño atractivo y sencillo para que tus clientes tengan una excelente experiencia de compra en tu tienda en linea."
/>
{{-- PAGE-CONTENT --}}
<div class="bg-c-morado py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestros precios"
  style1="text-white"
  text2="Tienda Virtual o E-commerce"
  style2="text-white"
  text3="Diseño, funcionalidad y excelente experiencia de compra para tu tienda en linea"
  style3="text-white"
  />
</div>

{{-- PRICES --}}
<div class="overflow-visible bg-gradient-to-b from-c-morado via-white to-white pb-4 px-8">
  <div class="flex justify-center flex-col sm:flex-row space-y-6 sm:space-y-0 space-x-0 sm:space-x-6">
    <x-modulo.card-price 
    type="E-commerce"
    subtype="VENTA EN LÍNEA"
    price="1'800.000"
    info="Una tienda en línea es un tipo de comercio digital que realiza sus transacciones en el sitio web, esta plataforma digital se utilizará para vender productos mediante el comercio electrónico."
    list="
    La tienda en linea es administrable hasta 10 secciones generales y 30 imagenes de producto. (Incluye Hosting por 1 año). Lista en 2 semanas en dias habiles desde el acuerdo de diseño."
    />
    <div class="bg-white w-full rounded flex flex-row">
      <div class="p-8 w-full lg:w-3/5">
        <p class="text-sm text-gray-700 border-l-2 border-gray-200 pl-3"><span class="text-base font-semibold text-c-rojo">Todo lo necesario para que te enfoques en vender desde el primer día esta completamente integrada a tu plataforma de pagos con registro de usuarios, carrito de compra, productos, categorias y vínculos a redes sociales y mas.</span></p>
        <p class="text-lg leading-6 font-medium text-gray-900 py-4">¿Que adquieres con este servicio y producto?</p>
        <ul class="text-gray-600 text-sm list-disc list-inside">
          <li>Hasta 10 secciones.</li>
          <li>Integración con plataforma de pagos. (Payu o Epayco)</li>
          <li>Carrito de compras.</li>
          <li>Registro de usuarios.</li>
          <li>Chat.</li>
          <li>Hosting por 1 año.</li>
          <li>Cuentas de correo.</li>
          <li>Adaptado a móviles. (Responsive design)</li>
          <li>Amigable con SEO.</li>
          <li>Diseño 100% personalizado Garantizado.</li>
          <li>Formulario de contacto.</li>
          <li>Banners e imágenes según tu necesidad (Hasta 15 imagenes).</li>
          <li>Vínculo a redes sociales.</li>
          <li>CMS (Administrador de Contenidos).</li>
          <li>Integrada a Google Analytics.</li>
          <li>Soporte y acompañamiento por 1 mes.</li>
          <li>Capacitacion de la plataforma administrable (videotutoriales).</li>
        </ul>
      </div>
      <div class="bg-cover bg-center max-h-ful w-2/5 rounded-r hidden lg:block" style="background-image: url({{asset('images/banners/banner-ecommerce.jpg')}})"></div>
    </div>
  </div>
</div>

{{-- STEPS --}}
<div class="py-2 px-8">
  <x-modulo.section-title 
  text1="Nuestros proceso"
  style1="text-black"
  text2="¿Cómo funciona el servicio?"
  style2="text-c-rojo"
  text3="El proceso se enfocan en 4 diferentes etapas en todos nuestros desarrollos"
  style3="text-gray-500"
  />
</div>

<div class="py-4 px-8">
  <div class="flex sm:flex-row flex-col justify-center border border-gray-300 rounded sm:divide-x divide-y divide-gray-200">
   <x-modulo.step-price 
   step="1"
   style="bg-pink-400"
   text1="Llámenos o escribanos"
   text2="Hacemos una breve entrevista telefónica con preguntas sobre tu proyecto o negocio, para captar la idea."
   />
   <x-modulo.step-price 
   step="2"
   style="bg-pink-600"
   text1="Envias la información"
   text2="Firma de contrato y pago por el producto, envias la información solicitada del proyecto (fotos y textos)."
   />
   <x-modulo.step-price 
   step="3"
   style="bg-pink-700"
   text1="Propuesta gráfica"
   text2="Enviamos la propuesta grafica del proyecto para tu aprobación en base a la información e ideas de la entrevista."
   />
   <x-modulo.step-price 
   step="4"
   style="bg-pink-900"
   text1="Desarrollo y entrega"
   text2="Realizamos el trabajo de 2 a 4 semanas en días hábiles y nos contactamos contigo para hacer la entrega del producto."
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
  text3="Somos desarrolladores y diseñadores de páginas web profesionales con experiencia de más de 8 años en el mercado"
  style3="text-gray-500"
  />
</div>
<div class="pb-4 px-8">
  <div class="flex justify-center flex-col sm:flex-row space-y-6 sm:space-y-0 space-x-0 sm:space-x-6">
    <div class="w-full sm:w-1/2 border border-gray-300 p-6 rounded">
      <h4 class="text-lg leading-6 font-medium text-gray-900">Tecnología avanzada</h4>
      <p class="text-sm text-gray-700 border-l-2 border-gray-200 pl-3"><span class="block text-md font-bold my-3 text-c-rojo">Desarrollamos tu página web más poderosa más rápida y eficiente con las ultimas tecnologias vigentes. Somos diseñadores de paginas web con experiencia de más de 8 años y sabemos que la creación de una páginas web profesional va un poco más allá.</span> En Getweb mostramos tu contenido de una forma profesional, agregamos funcionalidades a tu página web y usamos tecnologías que hagan tu sitio web realmente diferente y eficiente.</p>
    </div>
    <div class="w-full sm:w-1/2 border border-gray-300 p-6 rounded">
      <h4 class="text-lg leading-6 font-medium text-gray-900">Garantía de cumplimiento</h4>
      <p class="text-sm text-gray-700 border-l-2 border-gray-200 pl-3"><span class="block text-md font-bold my-3 text-c-rojo">Hemos entregado cientos de proyectos en los cuales nuestros clientes actualmente nos recomiendan y dan fe del profesionalismo y empeño en nuestro trabajo.</span> Somos desarrolladores y diseñadores de páginas web, profesionales en diferentes ramas de la ingeniería, el diseño y la publicidad. Con Personal 100% nuestro, 0% Freelance y personal externo.</p>
    </div>
  </div>
</div>

@stop