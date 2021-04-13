<div class="flex flex-col space-y-4 space-x-0 sm:space-y-0 sm:flex-row sm:space-x-6 py-5 px-8">
  {{-- col-1 --}}
  <div class="w-full">

    @if(empty($works))
    <div class="bg-gray-100 rounded text-center p-6">
      <div class="leading-tight text-lg font-medium mb-1">
      Estamos actualizando nuestro portalfolio de proyectos, no tenemos proyectos publicados en este momento :(</div> Intenta regresar en algunos dias para ver nuestro nuevo portafolio publicado
    </div>
    @endif

    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
      @foreach($works as $work)

      <x-modulo.card-work 
      rute='/portafolio/proyectos/{{ $work->id }}' 
      image='images/{{$work->image}}' 
      service='{{ $work->title }}'
      />

      @endforeach
    </dl>

    <div class="mt-4">
      {{ $works->links() }}
    </div>
  </div>
</div>
