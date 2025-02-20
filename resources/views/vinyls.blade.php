<x-layout :show='false'>
    <x-slot:heading>
        {{$vinyl['title']}}
    </x-slot:heading>

<div class="bg-white">
    <div class="">


      <!-- Vinyl info -->
      <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$vinyl['title']}}</h1>
        </div>

        <!-- Options -->
        <div class="mt-4 ">
          <h2 class="sr-only">Vinyl information</h2>
            <div class="flex">
                <a class="text-3xl tracking-tight text-gray-900" href="/artist={{$vinyl->artist->id}}">{{$vinyl->artist->name}}</a>
                <p class="text-3xl tracking-tight text-gray-900"> - {{$vinyl["release_year"]}}</p>
            </div>

        </div>

        <div class="mx-auto mt-6 max-w-2xl grid grid-cols-3 gap-x-8 px-8  lg:row-span-3 lg:mt-0">
            <img src="{{$vinyl['cover']}}" class="hidden size-full rounded-lg object-cover sm:block">
          </div>

        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16">
          <!-- Description and details -->
          <div>
            <h3 class="sr-only">Description</h3>

            <div class="space-y-6">
              <p class="text-base text-gray-900">{{$vinyl["description"]}}</p>
            </div>
          </div>

          <div class="mt-10">
            <h2 class="text-sm font-medium text-gray-900">Label</h2>
            <div class="mt-4 space-y-6">
              <p class="text-sm text-gray-600">{{$vinyl["label"]}}</p>
            </div>
        </div>
        <div class="mt-10">
            <h2 class="text-sm font-medium text-gray-900">Genre(s)</h2>
                   <div class="flex flex-wrap gap-y-2">
            @foreach ($vinyl->genres as $genre)
                <x-genre :genre="$genre"></x-genre>
            @endforeach
        </div>
        </div>
        </div>

        <div>
            <h2>Commentaires</h2>
            <ul role="list" class="divide-y divide-gray-100">
                @foreach ($vinyl->comments as $comment)
                    <x-comment :comment="$comment"></x-comment>
                @endforeach
            </ul>
        </div>

      </div>
    </div>
  </div>


</x-layout>
