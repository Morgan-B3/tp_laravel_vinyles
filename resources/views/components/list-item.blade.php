@props(['vinyle'])


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