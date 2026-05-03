<!DOCTYPE html>
<html>
<head>
    <title>Login Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-80 text-center">
        
        <h2 class="text-2xl font-bold mb-6">Login Mahasiswa</h2>

        <form method="POST" action="/login-mahasiswa">
            @csrf

            <input 
                type="text" 
                name="nama" 
                placeholder="Masukkan Nama"
                class="w-full p-2 mb-4 border rounded"
            >

            <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                Login
            </button>
        </form>

    </div>

</body>
</html>