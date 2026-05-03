<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-80 text-center">

        <h2 class="text-2xl font-bold mb-6">Login Admin</h2>

        @if(session('error'))
            <p class="bg-red-500 text-white p-2 mb-4 rounded">
                {{ session('error') }}
            </p>
        @endif

        <form method="POST" action="/login-admin">
            @csrf

            <input 
                type="text" 
                name="username" 
                placeholder="Username"
                class="w-full p-2 mb-4 border rounded"
            >

            <input 
                type="password" 
                name="password" 
                placeholder="Password"
                class="w-full p-2 mb-4 border rounded"
            >

            <button class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">
                Login
            </button>
        </form>

    </div>

</body>
</html>