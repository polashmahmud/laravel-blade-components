<x-app>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg mt-12">
        <x-form
            method="PATCH"
            action="{{ route('comments.update', $comment) }}"
        >

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="sm:col-span-4">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                        <div class="mt-2">
                            <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $comment->body }}</textarea>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Update
                </button>
            </div>
        </x-form>

        <x-form-button method="DELETE" action="{{ route('comments.destroy', $comment) }}">
            Delete
        </x-form-button>

{{--        <x-form method="DELETE" action="{{ route('comments.destroy', $comment) }}">--}}
{{--            <div>--}}
{{--                <button type="submit"--}}
{{--                        class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">--}}
{{--                    Delete--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </x-form>--}}
    </div>
</x-app>
