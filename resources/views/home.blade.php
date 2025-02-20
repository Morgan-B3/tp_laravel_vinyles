<x-layout>

    <x-slot:heading>
        Accueil
    </x-slot:heading>

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($vinyls as $vinyl)
                <x-list-item :vinyl="$vinyl"/>
            @endforeach
          </div>
        </div>
    </div>


</x-layout>
