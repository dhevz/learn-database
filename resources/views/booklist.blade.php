<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="container text-center p-4">
        <h1>Book List</h1>
        <table class="table ">
            <thead>
                <th>Judul</th>
                <th>ISBN-13</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Halaman</th>
                <th>Penerbit</th>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <td>{{ $book->judul }}</td>
                        <td>{{ $book->ISBN }}</td>
                        <td>{{ $book->kategori }}</td>
                        <td>{{ $book->harga }}</td>
                        <td>{{ $book->halaman }}</td>
                        <td>{{ $book->penerbit }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
