<x-layout>
<div class="bg-gray-50 min-h-screen flex items-center justify-center">

    <div class="bg-white p-6 rounded-xl shadow-md w-full max-w-lg">
        <form class="space-y-4" method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    class="w-full py-3 px-4 rounded border-gray-300 shadow-sm sm:text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                />
            </div>

            <div>
                <label for="Description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea
                    id="Description"
                    rows="4"
                    name="desc"
                    class="w-full py-3 px-4 resize-none rounded border-gray-300 shadow-sm sm:text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                ></textarea>
            </div>

            <div>
                <label for="people" class="block text-sm font-medium text-gray-700 mb-1">Post Creator</label>
                <select
                    id="people"
                    name="people"
                    class="w-full py-3 px-4 rounded border-gray-300 shadow-sm sm:text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
                    <option>Ahmed</option>
                    <option>Osama</option>
                    <option>Mahmoud</option>
                </select>
            </div>

            <div class="text-right">
                <button type="submit" class="px-5 py-3 bg-green-500 text-white rounded hover:bg-green-600 transition">
                    Create
                </button>
            </div>
        </form>
    </div>
    </div>

    </x-layout>
