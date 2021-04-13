@component('mail::message')
<img src="https://www.getweb.com.co/svg/main_logo_b.svg" height="50px" style="margin-bottom: 30px;">

# ¡Hola {{ $post->name }}, Gracias por realizar tu cotizacion en linea!

Primero que todo queremos agradecer el interés y la confianza que está poniendo en Getweb, estamos seguros que nuestra experiencia de años supliendo las necesidades digitales para múltiples compañías garantizarán un apoyo a las necesidades de tu negocio.

En este correo encontrarás el resumen de tu cotizacion realizada.

<div style="background-color: #f3f3f3; padding: 20px; color: black;">
  <h4> Resumen de la cotización:</h4>
  <small>
    <div style="border-bottom: 1px #d6d6d6 dashed; margin-bottom: 10px; padding-bottom: 10px;">
      Nombre: {{ $post->name }}<br>
      Teléfono: {{ $post->tel }}<br>
      Mail: {{ $post->email }}
    </div>
    @php 
    foreach (explode("+",$post->quote) as $values)
    {
      if($values ? $values : '')
        echo $values.'<br>';
    }
    @endphp
  </small>
</div>
<br>

<strong>Comunícate con nosotros al 319-589-5064 o has clic en el siguiente botón para escribirnos a WhatsApp,</strong> con gusto le atenderá uno de nuestros representantes que le ayudará con los pasos a seguir del proceso.

¡Espero podamos conversar pronto!

@component('mail::button', ['url' => 'https://api.whatsapp.com/send?phone=573195895064', 'color' => 'success'])
Escríbenos a Whatsapp
@endcomponent

@component('mail::button', ['url' => 'https://getweb.com.co', 'color' => 'primary'])
Visita nuestro sitio web
@endcomponent

Gracias por preferir nuestros servicios. Cordialmente, Equipo {{ config('app.name') }}
<hr>
<small>Getweb diseño y desarrollo Web SAS<br> www.getweb.com.co</small>

@endcomponent
