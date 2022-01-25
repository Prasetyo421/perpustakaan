<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix ('css/app.css')}}">

    <title>Halaman Daftar Buku</title>
</head>
<body class=" bg-gray-100">
    <div class=" max-w-5xl bg-white p-5 mt-7 rounded-md mx-auto">
        @if ($message = Session::get('success'))
            <div class="h-10 text-center text-white bg-green-500 rounded-sm text-xl leading-10">
                <p>{{ $message }}</p>
            </div>
        @endif
        <h1 class="text-xl">Daftar Buku</h1>
        <table class="table-auto border border-collapse border-slate-500 mt-6">
            <thead>
                <tr>
                    <th class="border border-slate-600">No</th>
                    <th class="border border-slate-600">Judul</th>
                    <th class="border border-slate-600">Penulis</th>
                    <th class="border border-slate-600">Penerbit</th>
                    <th class="border border-slate-600">Jumlah Halaman</th>
                    <th class="border border-slate-600">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td class="border border-slate-700 text-center">{{ $loop->iteration }}</td>
                    <td class="border border-slate-700 p-2">{{ $book->title }}</td>
                    <td class="border border-slate-700 p-2">{{ $book->author }}</td>
                    <td class="border border-slate-700 p-2">{{ $book->publisher }}</td>
                    <td class="border border-slate-700 p-2 text-center">{{ $book->number_of_pages }}</td>
                    <td class="text-center border border-slate-700 px-2">
                        <form action="{{ route('book.destroy',$book->id) }}" method="POST" class="flex">
                            <a class="block w-16 h-5 text-blue-500" href="{{ route('book.show',$book->id) }}">Show</a>
        
                            <a class="block w-16 h-5 text-yellow-500" href="{{ route('book.edit',$book->id) }}">Edit</a>
        
                            @csrf
                            @method('DELETE')
        
                            <button type="submit" class="block w-16 h-5 text-red-500" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $books->links() !!}
        <a href="/book/create" class="block mt-4 w-24 h-9 rounded-md bg-blue-500 text-white text-xl text-center">Tambah</a>
    </div>
</body>
</html>