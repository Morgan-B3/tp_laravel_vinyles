@props(['comment'])

<li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
        <img class="size-12 flex-none rounded-full bg-gray-50" src={{$comment->user->avatar}} alt="">
    <div class="min-w-0 flex-auto">
        <p class="text-sm/6 font-semibold text-gray-900">{{$comment->user->name}}</p>
        <p class="mt-1 truncate text-xs/5 text-gray-500">{{$comment->content}}</p>
    </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <p class="text-sm/6 text-gray-900">{{$comment->created_at}}</p>
    </div>
</li>

