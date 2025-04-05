<x-layout>
<div class="bg-gray-50 justify-center">

    <div>
        <h1 class="text-2xl font-bold">Posts</h1>
        <div class="flex justify-center mb-4">
          <a
            href="{{ route('posts.create') }}"
            class="px-4 py-2 text-sm font-medium text-white bg-green-500 rounded hover:bg-green-600 transition-colors"
          >
            Create Post
          </a>
        </div>
    </div>
<div class="overflow-x-auto">
  <table class="min-w-full divide-y-2 divide-gray-200">
    <thead class="ltr:text-left rtl:text-right">
      <tr class="*:font-medium *:text-gray-900">
        <th class="px-3 py-2 whitespace-nowrap">ID</th>
        <th class="px-3 py-2 whitespace-nowrap">Title</th>
        <th class="px-3 py-2 whitespace-nowrap">Created At</th>
        <th class="px-3 py-2 whitespace-nowrap">Created By</th>
        <th class="px-3 py-2 whitespace-nowrap">Actions</th>
      </tr>
    </thead>

    <tbody class="divide-y divide-gray-200">
        @foreach ($posts as $post)
        <tr class="*:text-gray-900 *:first:font-medium">
          <td class="px-3 py-2 whitespace-nowrap">{{ $post['id'] }}</td>
          <td class="px-3 py-2 whitespace-nowrap">{{ $post['title'] }}</td>
          <td class="px-3 py-2 whitespace-nowrap">{{ $post['createdAt'] }}</td>
          <td class="px-3 py-2 whitespace-nowrap">{{ $post['createdBy'] }}</td>
          <td class="px-3 py-2 whitespace-nowrap">
            <span class="inline-flex divide-x divide-gray-300 overflow-hidden rounded border border-gray-300 bg-white shadow-sm">
              <a href="{{ route('posts.edit',$post['id']) }}" class="px-3 py-1.5 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900">
                Edit
              </a>

              <a href="{{ route('posts.show',$post['id']) }}" class="px-3 py-1.5 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900">
                View
              </a>

              <a href="{{ route('posts.destroy',$post['id']) }}" class="px-3 py-1.5 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900">
                Delete
              </a>
            </span>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>

</x-layout>
