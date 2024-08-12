@php

/** @var App\Models\Post $post **/
$post = $getRecord();

@endphp

<div class="flex items-center gap-4 px-2 py-3 overflow-hidden w-full" style="max-width: 750px">
    <div class="wc-details flex-grow flex flex-col gap-2 text-sm overflow-hidden">
        @include('user-details', ['user' => $post->user])
        
        <h3 class="font-semibold text-lg">
            {{ $post->title }}
        </h3>

        <div class="text-gray-600">
            {{ $post->content }}
        </div>
    </div>
</div>
