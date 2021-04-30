<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- META --}}
  <title>@yield ('seoTitle') | Getweb</title>
  <meta name="description" content="@yield ('seoDescription')">
  <meta name="keywords" content="@yield ('seoKeywords')">
  <meta name="author" content="Getweb diseño y desarrollo web SAS | Pablo Guevara V - Getweb | wwww.getweb.com.co">
  <meta name="robots" content="@yield ('seoRobots')" />
  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('fav/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('fav/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('fav/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ URL::asset('fav/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ URL::asset('fav/safari-pinned-tab.svg') }}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ff0000">
  <meta name="theme-color" content="#ffffff">
  {{-- CSS --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" defer>
  {{-- JS --}}
  <script src="{{ asset('js/app.js') }}" defer></script>
  {{-- SEO --}}
<!--
  {{-- GOOGLE ANALYTHICS  --}}
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98642372-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-98642372-1');
  </script>

  {{-- GOOGLE REMARKETING - Global site tag (gtag.js) - Google Ads: 848910098  --}}
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-848910098"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-848910098');
  </script>
<!--
  {{-- Facebook Pixel Code --}}
  <script>!function(f,b,e,v,n,t,s)
  { if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1505569229518567');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1505569229518567&ev=PageView&noscript=1" />
  </noscript>

  {{-- Hotjar Tracking Code --}}
  <script>
    (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:1108170,hjsv:6};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>
-->
{{-- WhatsHelp.io widget --}}
<script type="text/javascript">
  (function () {
    var options = {
        whatsapp: "57 3195895064", // WhatsApp number
        call_to_action: "Hable con un asesor por Whatsapp", // Call to action
        position: "left", // Position may be 'right' or 'left'
      };
      var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
      var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
  </script>

  {{-- SITE BOT --}}
  <script async>(function(w, d) { w.CollectId = "5b8493779f165e148b5e0f6f"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script> 

  {{-- GLOBAL VAR --}}
  @php  
  $tels='319-589-5064';
  $tela='3195895064'; 
  @endphp

  @livewireStyles
</head>
<body>
  {{-- TOP_BAR --}}
  <div class="flex flex-col sm:flex-row justify-between py-2 px-8 text-xs text-center bg-gradient-to-r from-c-rojo to-c-morado text-white">
    <div class="sm:flex items-center hidden sm:block">
      <x-logo.badge />
      GETWEB - Hosting, Páginas Web y Marketing Digital
    </div>
    <div class="sm:flex items-center flex-col sm:flex-row">
      <div>
        Llámanos a Bogotá, Colombia al <span class="font-bold mx-1"> {{ $tels }}</span>
      </div>
      <div class="mt-3 mb-1 sm:mt-0 sm:mb-0">
        <a href="https://wa.me/573195895064?text=Hola, quiero recibir más información sobre los servicios de Getweb" target="blank" class="bg-c-rojo hover:bg-pink-700 text-white py-1 px-6 ml-1 my-2 sm:my-0 rounded-full font-bold shadow-md">Contáctenos</a></div>
      </div>
    </div>
    {{-- NAV --}}
    <x-menu.nav-main />
    {{-- MOVIL_NAV --}}
    <x-menu.nav-main-movil />
    {{-- CONTENT --}}
    @yield('content')
    {{-- FOOTER --}}
    <div class="px-8 bg-gradient-to-r from-c-rojo to-c-morado text-white">
      <div class="flex flex-col sm:flex-row items-center text-xs py-8 space-x-0 sm:space-x-8 space-y-8 sm:space-y-0">
        <div class="w-full sm:w-1/3 lg:w-1/2">
          <h4 class="text-base font-bold tracking-wide leading-10">Quienés somos</h4>
          <p>Somo una empresa enfocada en el diseño y desarrollo de sitios web profesionales, marketing digital y hosting comprometida con nuestro clientes. Nuestra meta es que ayudar a su negocio, sea más competitivo, genere reconocimiento, adquiera nuevos clientes y abra nuevos mercados. Con los servicios de Getweb podrás promover e impulsa tu negocio, atraer más tráfico, ser más competitivo, realiza más ventas, adquirir nuevos clientes, abrir nuevos mercados, generar reconocimiento y mucho más, las posibilidades son infinitas.</p>
        </div> 
        <div class="w-full sm:w-1/3 lg:w-1/4">
          <h4 class="text-base font-bold tracking-wide leading-10">Servicios</h4>
          <div class="flex flex-col">
            <a href="/hosting/planes-hosting" class="hover:underline">Planes de Hosting</a>
            <a href="/marketing-digital/google-ads" class="hover:underline">Publicidad, Marketing Digital, Google Adwords</a>
            <a href="/paginas-web/wordpress-administrable" class="hover:underline">Páginas web administrables en Wordpress y Blog</a>
            <a href="/paginas-web/tienda-virtual-ecommerce" class="hover:underline">Tienda Online, Comercio en linea, E-commerce</a>
            <a href="/apps/progressive-web-apps" class="hover:underline">Progressive web app - PWA</a>
            <a href="/paginas-web/desarrollo-personalizado" class="hover:underline">Desarrollos y soluciones a necesidades específicas</a>
          </div>
        </div>
        <div class="w-full sm:w-1/3 lg:w-1/4">
          <x-logo.white />
          <div class="flex flex-row items-center pt-3">
            <a href="https://www.facebook.com/GetWebCo/">
              <div class="bg-white p-1 rounded-full items-center justify-center mr-2">
                <svg class="h-6 w-6 text-c-morado" aria-hidden="true" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path fill="currentColor" d="M400 32H48A48 48 0 000 80v352a48 48 0 0048 48h137V328h-63v-72h63v-55c0-62 37-96 94-96 27 0 55 5 55 5v61h-31c-31 0-40 19-40 38v47h69l-11 72h-58v152h137a48 48 0 0048-48V80a48 48 0 00-48-48z"/>
                </svg>
              </div>
            </a>
            <a href="https://www.instagram.com/_getweb/">
              <div class="bg-white p-1 rounded-full items-center justify-center mr-2">
                <svg class="h-6 w-6 text-c-morado" aria-hidden="true" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path fill="currentColor" d="M224 141a115 115 0 100 229 115 115 0 000-229zm0 190a75 75 0 110-150 75 75 0 010 150zm147-195a27 27 0 11-54 0 27 27 0 0154 0zm76 28c-2-36-10-68-37-94-26-27-58-35-93-37-37-2-148-2-185 0-36 2-68 10-94 36S3 129 1 164c-2 37-2 148 0 185 2 36 10 68 37 94s58 35 94 36c37 3 148 3 185 0 35-1 67-9 93-36 27-26 35-58 37-94 2-37 2-147 0-184zm-48 224c-8 20-23 35-43 43-29 11-99 9-132 9s-103 2-132-9c-20-8-35-23-43-43-11-29-9-99-9-132s-2-103 9-132c8-20 23-35 43-43 30-11 100-9 132-9s103-2 132 9c20 8 35 23 43 43 12 29 9 99 9 132s3 103-9 132z"/>
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="py-4 border-t border-white border-opacity-25">
        <p class="text-xs text-center">© 2018, www.getweb.com.co | Getweb diseño y desarrollo web SAS, Bogotá - Colombia. | Todos los derechos reservados, diseñado y desarrollado por Getweb | Agencia de Desarrollo Web y Marketing Digital
        </p>
      </div>
    </div>
    @livewireScripts
  </body>
  </html>
