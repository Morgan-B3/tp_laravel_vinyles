<x-layout>

    <x-slot:heading>
        Accueil
    </x-slot:heading>
    
    {{-- <div class="bg-white ">
        <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-xl">
                <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">Meet our leadership</h2>
                <p class="mt-6 text-lg/8 text-gray-600">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
            </div>
            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                @foreach ($vinyles as $vinyle)
                    <x-list-item :vinyle="$vinyle"/>
                @endforeach             
            </ul>
        </div>
    </div> --}}

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($vinyles as $vinyle)
                <x-list-item :vinyle="$vinyle"/>
            @endforeach 
          </div>
        </div>
    </div>
      

</x-layout>