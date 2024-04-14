@include('partials.header')

<div class="container mx-auto px-4 mt-8">
    <h2 class="text-2xl font-bold mb-4">List of Books</h2>
    
    <table class="table-auto w-full border-collapse border border-gray-400">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 bg-blue text-white">ISBN</th>
                <th class="px-4 py-2 bg-blue text-white">Title</th>
                <th class="px-4 py-2 bg-blue text-white">Author</th>
                <th class="px-4 py-2 bg-blue text-white">Description</th>
                <th class="px-4 py-2 bg-blue text-white">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td class="border px-4 py-2">{{ $book->isbn }}</td>
                <td class="border px-4 py-2">{{ $book->title }}</td>
                <td class="border px-4 py-2">{{ $book->author }}</td>
                <td class="border px-4 py-2">{{ $book->description }}</td>
                <td class="border px-4 py-2">{{ $book->date_published }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partials.footer')