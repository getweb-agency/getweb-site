<div class="flex flex-col space-y-4 space-x-0 sm:space-y-0 sm:flex-row sm:space-x-6 py-5 px-8">
  {{-- col-1 --}}
  <div class="bg-blue-0 w-full sm:w-2/3 shadow overflow-hidden sm:rounded-lg {{ $form ? 'hidden' : '' }}">

    <div class="px-4 py-5 border-b border-gray-200">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        1. Diligencie los siguientes campos.
      </h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">
        Ingrese los siguientes datos para continuar con su cotización automatica.
      </p>
    </div>

    <form class="px-4 py-5" action="" wire:submit.prevent="">
      <!-- Datos generales -->
      <div class="grid gird-cols-1 sm:grid-cols-3 gap-4 py-5 {{ !empty($name && $tel && $email) ? 'border-b border-gray-200' : '' }}">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
          <input type="text" name="name" wire:model="name"
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md px-3 py-1">
          @error('name') 
          <div class="text-red-400 text-sm py-2 w-full flex">
            {{ $message }}
          </div> 
          @enderror
        </div>

        <div>
          <label for="last_name" class="block text-sm font-medium text-gray-700">Teléfono</label>
          <input type="number" name="tel" wire:model="tel"
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md px-3 py-1">
          @error('tel') 
          <div class="text-red-400 text-sm py-2 w-full flex">
            {{ $message }}
          </div> 
          @enderror
        </div>

        <div>
          <label for="last_name" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" wire:model="email" 
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md px-3 py-1">
          @error('email') 
          <div class="text-red-400 text-sm py-2 w-full flex">
            {{ $message }}
          </div> 
          @enderror
        </div>
      </div>

      @if(!empty($name && $tel && $email))
      {{-- Categorias --}}
      {{-- C1 --}}
      <div class="py-5 border-b border-gray-200" x-data="{ opt1: false }">
        <div class="flex items-center">
          <input type="checkbox" id="c1" name="c1" value="+ Hosting" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @click="opt1 = ! opt1" wire:model="c1" wire:click="restC1">
          <label for="c1" class="ml-3 block text-sm font-medium text-gray-700">Hosting</label>
        </div>
        {{-- info --}}
        <div x-show.transition.origin.left="opt1">
          <div class="mt-4 space-x-0 lg:space-x-4 space-y-4 lg:space-y-0 flex flex-col lg:flex-row">

            <div class="flex items-center">
              <input id="cs1" name="cs1" type="checkbox" value="100000" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" wire:model="cs1">
              <label for="cs1" class="ml-3 block text-sm font-medium text-gray-500">Plan basico</label>
            </div>
            <div class="flex items-center">
              <input id="cs2" name="cs2" type="checkbox" value="150000" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" wire:model="cs2">
              <label for="cs2" class="ml-3 block text-sm font-medium text-gray-500">Plan emprendedor</label>
            </div>
            <div class="flex items-center">
              <input id="cs3" name="cs3" type="checkbox" value="300000" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" wire:model="cs3">
              <label for="cs3" class="ml-3 block text-sm font-medium text-gray-500">Plan empresario</label>
            </div>
            <div class="flex items-center">
              <input id="cs4" name="cs4" type="checkbox" value="500000" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" wire:model="cs4">
              <label for="cs4" class="ml-3 block text-sm font-medium text-gray-500">Plan corporativo</label>
            </div>
          </div>
        </div>
      </div>
      {{-- C2 --}}
      <div class="py-5 border-b border-gray-200" x-data="{ opt2: false }">
        <div class="flex items-center">
          <input type="checkbox" id="c2" name="c2" value="+ Páginas web" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @click="opt2 = ! opt2" wire:model="c2" wire:click="restC2">
          <label for="c2" class="ml-3 block text-sm font-medium text-gray-700">Páginas web</label>
        </div>
        {{-- info --}}
        <div x-show.transition.origin.left="opt2">
          <div class="mt-4 space-x-0 lg:space-x-4 space-y-4 lg:space-y-0 flex flex-col lg:flex-row">

            <div class="flex items-center">
              <input id="c2s1" name="c2s1" type="checkbox" value="600000" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" wire:model="c2s1">
              <label for="c2s1" class="ml-3 block text-sm font-medium text-gray-500">Landing Page</label>
            </div>
            <div class="flex items-center">
              <input id="c2s2" name="c2s2" type="checkbox" value="1200000" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" wire:model="c2s2">
              <label for="c2s2" class="ml-3 block text-sm font-medium text-gray-500">Web de contenidos</label>
            </div>
            <div class="flex items-center">
              <input id="c2s3" name="c2s3" type="checkbox" value="1600000" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" wire:model="c2s3">
              <label for="c2s3" class="ml-3 block text-sm font-medium text-gray-500">Catálogo en linea</label>
            </div>
            <div class="flex items-center">
              <input id="c2s4" name="c2s4" type="checkbox" value="1800000" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" wire:model="c2s4">
              <label for="c2s4" class="ml-3 block text-sm font-medium text-gray-500">Tienda en línea</label>
            </div>
            <div class="flex items-center">
              <input id="c2s5" name="c2s5" type="checkbox" value="3200000" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" wire:model="c2s5">
              <label for="c2s5" class="ml-3 block text-sm font-medium text-gray-500">Desarrollos y soluciones especificas</label>
            </div>
          </div>
          @if($c2s5)
          <div class="flex-row w-full mt-6">
            <label for="c2s5t" class="ml-3 block text-sm font-medium text-gray-500">Agregue información del desarrollo sea específico y puntual</label>
            <textarea id="w3review" name="w3review" rows="3" cols="50" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md px-3 py-1" wire:model="c2s5t">Agregue información del desarrollo sea específico y puntual.
            </textarea>
          </div>
          @endif
        </div>
      </div>
      {{-- C3 --}}
      <div class="py-5 border-b border-gray-200" x-data="{ opt3: false }">
        <div class="flex items-center">
          <input type="checkbox" id="c3" name="c3" value="+ Aplicaciones web progresivas - PWA" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @click="opt3 = ! opt3" wire:model="c3" wire:click="restC3">
          <label for="c3" class="ml-3 block text-sm font-medium text-gray-700">Aplicaciones web progresivas - PWA</label>
        </div>
        {{-- info --}}
        <div x-show.transition.origin.left="opt3">
          <div class="mt-4 space-x-0 lg:space-x-4 space-y-4 lg:space-y-0 flex flex-col lg:flex-row">
            <div class="flex items-center">
              <input id="c3s1" name="c3s1" type="checkbox" value="3500000" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" wire:model="c3s1">
              <label for="c3s1" class="ml-3 block text-sm font-medium text-gray-500">PWA (Basica)</label>
            </div>
            <div class="flex items-center">
              <input id="c3s2" name="c3s2" type="checkbox" value="3500000" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" wire:model="c3s2">
              <label for="c3s2" class="ml-3 block text-sm font-medium text-gray-500">PWA (Necesidad especifica)</label>
            </div>
          </div>
          @if($c3s2)
          <div class="flex-row w-full mt-6">
            <label for="c3s2t" class="ml-3 block text-sm font-medium text-gray-500">Agregue información del desarrollo sea específico y puntual</label>
            <textarea rows="3" cols="50" wire:model="c3s2t" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md px-3 py-1" >Agregue información del desarrollo sea específico y puntual.
            </textarea>
          </div>
          @endif
        </div>
      </div>
      {{-- C4 --}}
      <div class="py-5" x-data="{ opt4: false }">
        <div class="flex items-center">
          <input type="checkbox" id="c4" name="c4" value="+ Marketing Digital" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @click="opt4 = ! opt4" wire:model="c4" wire:click="restC4">
          <label for="c4" class="ml-3 block text-sm font-medium text-gray-700">Marketing Digital</label>
        </div>
        {{-- info --}}
        <div x-show.transition.origin.left="opt4">
          <div class="mt-4 space-x-0 lg:space-x-4 space-y-4 lg:space-y-0 flex flex-col lg:flex-row">
            <div class="flex items-center">
              <label for="c4s1" class="mr-3 block text-sm font-medium text-gray-500">Cantidad de pautas</label>
              <input type="number" name="c4s1" id="c4s1" wire:model="c4s1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border border-gray-300 rounded-md px-3 py-1">
            </div>
            <div class="flex items-center">
              <label for="c4s2" class="mr-3 block text-sm font-medium text-gray-500">Presupuesto mensual (Ingrese el numero sin puntos ni comas)</label>
              <input type="number" name="c4s2" id="c4s2" wire:model="c4s2" value="100000" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border border-gray-300 rounded-md px-3 py-1">
            </div>
          </div>
        </div>
      </div>
      @endif
    </form>
  </div>

  {{-- col-2 --}}
  <div class="bg-gray-100 w-full sm:w-1/3">
    <div class="px-4 py-5 border-b border-gray-300">
      <h3 class="text-lg leading-6 font-medium text-gray-900 pb-3">
        2. Resumen de tu cotizacion
      </h3>
      @if(!empty($name && $tel && $email))
      <p class="mt-1 max-w-2xl text-sm text-gray-600">
        Estimado(a) <span class="font-bold">{{ $name }}</span> tenga en cuenta que esta cotizacion sera enviada al email <span class="font-bold">{{ $email }}</span> y nos comunicaremos al teléfono <span class="font-bold">{{ $tel }}</span> para dialogar sobre esta cotizacion emitida.
      </p>
      @endif
    </div>

    <div class="px-4 py-5 flex flex-col">
      <div>
        @if($c1)<div class="px-4 py-2 border-b border-gray-300 flex justify-between">{{ $c1 }}</div> 
        @endif
        @if($cs1)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Plan basico - Anual</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $cs1, 0 ,'.', ',') }}</p>
        </div>
        @endif
        @if($cs2)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Plan emprendedor - Anual</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $cs2, 0 ,'.', ',') }}</p>
        </div>
        @endif
        @if($cs3)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Plan empresario - Anual</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $cs3, 0 ,'.', ',') }}</p>
        </div>
        @endif
        @if($cs4)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Plan corporativo - Anual</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $cs4, 0 ,'.', ',') }}</p>
        </div>
        @endif 
      </div>
      <div>
        @if($c2)<div class="px-4 py-2 border-b border-gray-300 flex justify-between">{{ $c2 }}</div> 
        <p class="px-4 py-2 mt-1 max-w-2xl text-xs text-gray-600">Si selecciono un plan de Hosting este sera desactivado debido a que nuestras paginas web incluyen el servicio de Hosting anual con su proyecto.</p>

        @endif
        @if($c2s1)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Landing Page</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $c2s1, 0 ,'.', ',') }}</p>
        </div>
        @endif
        @if($c2s2)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Web de contenidos</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $c2s2, 0 ,'.', ',') }}</p>
        </div>
        @endif
        @if($c2s3)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Catálogo en linea</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $c2s3, 0 ,'.', ',') }}</p>
        </div>
        @endif
        @if($c2s4)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Tienda en línea</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $c2s4, 0 ,'.', ',') }}</p>
        </div>
        @endif 
        @if($c2s5)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Desarrollos y soluciones especificas</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $c2s5, 0 ,'.', ',') }}</p>
        </div>
        <div class="px-4 border-l ml-4">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Recuerde que el valor presentado en este producto puede variar y le presentamos el valor minimo para este tipo de servicio, el desarrollo sera evaluado segun la informacion suministrada.</p>
          <p class="py-2 mt-1 max-w-2xl text-xs text-gray-600">{{$c2s5t}}</p>
        </div>
        @endif 
      </div>
      <div>
        @if($c3)<div class="px-4 py-2 border-b border-gray-300 flex justify-between">{{ $c3 }}</div> 
        @endif
        @if($c3s1)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">PWA (Basica)</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $c3s1, 0 ,'.', ',') }}</p>
        </div>
        @endif
        @if($c3s2)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">PWA (Necesidad especifica)</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $c3s2, 0 ,'.', ',') }}</p>
        </div>
        <div class="px-4 border-l ml-4">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Recuerde que el valor presentado en este producto puede variar y le presentamos el valor minimo para este tipo de servicio, el desarrollo sera evaluado segun la informacion suministrada.</p>
          <p class="py-2 mt-1 max-w-2xl text-xs text-gray-600">{{$c3s2t}}</p>
        </div>
        @endif
      </div>
      <div>
        @if($c4)<div class="px-4 py-2 border-b border-gray-300 flex justify-between">{{ $c4 }}</div> 
        @endif
        @if($c4s1)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Cantidad de pauta(s)</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">{{ number_format( $c4s1, 0 ,'.', ',') }}</p>
        </div>
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Adminstacion de pauta(s)/mes</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( ($c4s1 * 150000), 0 ,'.', ',') }}</p>
        </div>
        @endif
        @if($c4s2)
        <div class="px-4 flex justify-between">
          <p class="mt-1 max-w-2xl text-xs text-gray-600 font-bold">Presupuesto mensual</p>
          <p class="mt-1 max-w-2xl text-sm text-gray-900">${{ number_format( $c4s2, 0 ,'.', ',') }}</p>
        </div>
        @endif
      </div>
      @include("livewire.$view")
    </div>
  </div>
  {{-- end-div --}}
</div>
