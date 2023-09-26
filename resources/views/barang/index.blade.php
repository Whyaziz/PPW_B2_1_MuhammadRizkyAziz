<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA BARANG</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <table class="w-full border-collapse border border-gray-300 bg-white shadow-md">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 border border-gray-300">Id</th>
                <th class="px-4 py-2 border border-gray-300">Nama</th>
                <th class="px-4 py-2 border border-gray-300">Harga</th>
                <th class="px-4 py-2 border border-gray-300">Stok</th>
            </tr>
        </thead>
        <tbody>
            @php
            @endphp
            @foreach ($data_barang as $barang)
            <tr>
                <td class="px-4 py-2 border border-gray-300">{{ $barang->id }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ $barang->nama_barang }}</td>
                <td class="px-4 py-2 border border-gray-300">Rp {{ number_format($barang->harga, 2) }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ $barang->stock }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
