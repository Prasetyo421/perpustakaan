<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix ('css/app.css')}}">

    <title>Detail Buku</title>
</head>
<body class=" bg-gray-100">
    <div class=" max-w-3xl bg-white p-5 mt-7 rounded-md mx-auto">
        <h1 class="text-xl">Detail Buku</h1>
        <div class="flex w-1/3 justify-between mt-6">
            <div class="flex flex-col ">
                <p>Judul buku </p>
                <p>Penulis buku </p>
                <p>Penerbit buku </p>
                <p>Jumlah Halaman buku </p>
            </div>
            <div class="flex flex-col">
                <p>{{ $book->title }}</p>
                <p>{{ $book->author }}</p>
                <p>{{ $book->publisher }}</p>
                <p>{{ $book->number_of_pages }}</p>
            </div>
        </div>
        <a href="{{ route('book.index') }}" class="block mt-4 w-24 h-9 rounded-md bg-blue-500 text-white text-xl text-center">Kembali</a>
    </div>
</body>
</html>