<x-layout>
    <div class="bg-gray-50 min-h-screen flex items-center justify-center">
        <div class="bg-white p-6 rounded-xl shadow-md w-full max-w-lg">
            <!-- Post Details Card -->
            <div class="space-y-4">
                <h2 class="text-2xl font-semibold text-gray-900">{{ $post['title'] }}</h2>

                <div>
                    <p class="text-sm text-gray-700"><strong>Created By:</strong> {{ $post['createdBy'] }}</p>
                    <p class="text-sm text-gray-700"><strong>Created At:</strong> {{ $post['createdAt'] }}</p>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-900">Description</h3>
                    <p class="text-sm text-gray-700">{{ $post['desc'] }}</p>
                </div>

                <!-- User Info -->
                <div class="border-t border-gray-200 pt-4 mt-4">
                    <h3 class="text-lg font-medium text-gray-900">User Info</h3>
                    <ul class="space-y-2">
                        <li class="text-sm text-gray-700"><strong>Email:</strong> {{ $post['createdBy'] }}@gmail.com</li>
                        <li class="text-sm text-gray-700"><strong>Account Created:</strong> 01-01-2023</li>
                    </ul>
                </div>

                <!-- Optional: Add any other post-related details here -->
                <div class="text-right mt-4">
                    <a href="{{ route('posts.index') }}" class="text-blue-500 hover:text-blue-700">
                        Back to Posts
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
