<a class="flex items-center gap-3" href="/" target="_blank">
    <span>{{ $post->user->name }}</span>
    <span>(#{{ $post->user->getKey() }}, {{ $post->user->email }})</span>
</a>