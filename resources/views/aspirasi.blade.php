<!DOCTYPE html>
<html>
<head>
    <title>Form Aspirasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex justify-center items-center h-screen">

<div class="bg-gray-800 p-8 rounded w-96">

    <h2 class="text-2xl mb-4 text-center">Kirim Aspirasi</h2>

    @if(session('success'))

        <div class="text-center">

            <p class="bg-green-500 p-3 mb-4 rounded">
                {{ session('success') }}
            </p>

            <a href="/aspirasi" class="bg-yellow-500 px-4 py-2 rounded inline-block mb-2 text-black">
                Kirim Aspirasi Lagi?
            </a>

            <br>

            <a href="/" class="bg-gray-500 px-4 py-2 rounded inline-block">
                Kembali ke Halaman Utama
            </a>

        </div>

    @else

        <form method="POST" action="/aspirasi">
            @csrf

            <input type="text" name="nama" placeholder="Nama" class="w-full mb-3 p-2 text-black">

            <textarea name="isi" placeholder="Tulis aspirasi..." class="w-full mb-3 p-2 text-black"></textarea>

            <button class="bg-yellow-500 w-full py-2 text-black">
                Kirim
            </button>
        </form>

    @endif

</div>

</body>
</html>