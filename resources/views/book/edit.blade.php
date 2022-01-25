<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix ('css/app.css')}}">

    <title>Halaman Edit Buku</title>
</head>
<body class=" bg-gray-100">
    <div class=" max-w-xl bg-white p-5 mt-7 rounded-md mx-auto shadow-md">
        <h1 class="text-xl">Edit Buku</h1>
        <form action="{{ route('book.update', $book->id) }}" method="POST" class=" mt-7">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Judul</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="judul" value="{{ old('title') ? old('title') : $book->title }}">
                <x-validate-message name="title"/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="author">Penulis</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="author" name="author" type="text" placeholder="penulis" value="{{ old('author') ? old('author') : $book->author }}">
                <x-validate-message name="author"/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="publisher">Penerbit</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="publisher" name="publisher" type="text" placeholder="penerbit" value="{{ old('publisher') ? old('publisher') : $book->publisher }}">
                <x-validate-message name="publisher"/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="number_of_pages">Jumlah halaman</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="number_of_pages" name="number_of_pages" type="number" placeholder="jumlah halaman" value="{{  old('number_of_pages') ? old('number_of_pages') : $book->number_of_pages }}">
                <x-validate-message name="number_of_pages"/>
            </div>
            
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Kirim
            </button>
        </form>
    </div>
</body>
</html>