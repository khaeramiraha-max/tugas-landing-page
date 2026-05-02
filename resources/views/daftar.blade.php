<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex justify-center items-center h-screen">

<div class="bg-gray-800 p-8 rounded w-96">

    <h2 class="text-2xl mb-4 text-center">Pendaftaran Anggota</h2>

    @if(session('success'))

        <div class="text-center">

            <p class="bg-green-500 p-3 mb-4 rounded">
                {{ session('success') }}
            </p>

            <a href="/daftar" class="bg-blue-500 px-4 py-2 rounded inline-block mb-2">
                Kirim Jawaban Lain?
            </a>

            <br>

            <a href="/" class="bg-gray-500 px-4 py-2 rounded inline-block">
                Kembali ke Halaman Utama
            </a>

        </div>

    @else

        <form method="POST" action="/daftar">
            @csrf

            <input type="text" name="nama" placeholder="Nama" class="w-full mb-3 p-2 text-black">

            <input type="text" name="nim" placeholder="NIM" class="w-full mb-3 p-2 text-black">

            <input type="email" name="email" placeholder="Email" class="w-full mb-3 p-2 text-black">

            <button class="bg-blue-500 w-full py-2">
                Daftar
            </button>
        </form>

    @endif

</div>

</body>
</html>