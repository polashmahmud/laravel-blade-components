<x-app>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg mt-12">
        @foreach($comments as $comment)
            <ul>
                <li><a href="{{ route('comments.edit', $comment) }}" class="text-blue-500 hover:text-blue-600">{{ $comment->body }}</a></li>
            </ul>
        @endforeach
    </div>
</x-app>
