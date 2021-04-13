 <div class="inline-block align-bottom bg-white text-left overflow-hidden {{-- sm:my-8 sm:align-middle sm:max-w-lg sm:w-full --}} w-full lg:w-1/4" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
  <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
    <div class="sm:flex sm:items-start">
      <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full {{ $style }} sm:mx-0 sm:h-10 sm:w-10 font-medium text-white">
        {{ $step }}
      </div>
      <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
          {{ $text1 }}
        </h3>
        <div class="mt-2">
          <p class="text-sm text-gray-500">
            {{ $text2 }}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>