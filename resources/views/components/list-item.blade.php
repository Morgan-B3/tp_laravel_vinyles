@props(['vinyle'])


{{-- <div class="flex items-center gap-x-6">
    <img class="size-16 rounded-full" src="https://www.svgrepo.com/show/217493/vinyl.svg" alt="">
    <div>
        <h3><a href="/vinyles/{{$vinyle['id']}}" class="text-base/7 font-semibold tracking-tight text-gray-900">{{$vinyle['title']}}</a></h3>
        <p class="text-sm/6 font-semibold text-indigo-600">{{$vinyle['artist']}} ({{$vinyle['year']}})</p>
    </div>
</div> --}}

<div class="group relative">
    <img src="{{$vinyle['image']}}" alt="" class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto ">
    <div class="mt-4 flex justify-between">
        <div>
        <h3 class="text-sm text-gray-700">
            <a href="/vinyles/{{$vinyle['id']}}">
            <span aria-hidden="true" class="absolute inset-0"></span>
            {{$vinyle['title']}}
            </a>
        </h3>
        <p class="mt-1 text-sm text-gray-500">{{$vinyle['artist']}}</p>
        </div>
        <p class="text-sm font-medium text-gray-900">{{$vinyle['year']}}</p>
    </div>
</div>