@props(['vinyle'])

<x-layout>
    <x-slot:heading>
        {{$vinyle['title']}}
    </x-slot:heading>
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
  }
  ```
-->
<div class="bg-white">
    <div class="pt-6">
  
      <!-- Image gallery -->

  
      <!-- Product info -->
      <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$vinyle['title']}}</h1>
        </div>
  
        <!-- Options -->
        <div class="mt-4 ">
          <h2 class="sr-only">Vinyle information</h2>
          <p class="text-3xl tracking-tight text-gray-900">{{$vinyle['artist']}} - {{$vinyle["year"]}}</p>
  
        </div>

        <div class="mx-auto mt-6 max-w-2xl grid grid-cols-3 gap-x-8 px-8  lg:row-span-3 lg:mt-0">
            <img src="{{$vinyle['image']}}" class="hidden size-full rounded-lg object-cover sm:block">
          </div>
  
        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16">
          <!-- Description and details -->
          <div>
            <h3 class="sr-only">Description</h3>
  
            <div class="space-y-6">
              <p class="text-base text-gray-900">{{$vinyle["description"]}}</p>
            </div>
          </div>

          <div class="mt-10">
            <h2 class="text-sm font-medium text-gray-900">Label</h2>
  
            <div class="mt-4 space-y-6">
              <p class="text-sm text-gray-600">{{$vinyle["label"]}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

</x-layout>