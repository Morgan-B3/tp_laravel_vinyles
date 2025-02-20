@props(['genre'])

<a href="/genre={{$genre->id}}" class="bg-teal-700 hover:text-gray-800 hover:bg-teal-500 mx-2 px-2 py-1 rounded-full text-white">{{$genre->name}}</a>
