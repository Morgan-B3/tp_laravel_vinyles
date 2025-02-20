<x-layout>

    <x-slot:heading>
        @isset($selectedGenre)
            {{$selectedGenre->name}}
        @else
            Accueil
        @endisset
    </x-slot:heading>

    <div class="bg-white">

        <div class="flex flex-wrap gap-y-2">
            @foreach ($genres as $genre)
                <x-genre :genre="$genre"></x-genre>
            @endforeach
        </div>

        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div>
                {{$vinyls->links()}}
            </div>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($vinyls as $vinyl)
                    <x-list-item :vinyl="$vinyl"/>
                @endforeach
            </div>
            <div>
                {{$vinyls->links()}}
            </div>
        </div>
    </div>


</x-layout>
