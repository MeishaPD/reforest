<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/login.png') }}');">
    <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-2xl font-bold text-center text-[#1E4D4D] mb-6">Login To Reforest Account</h1>

            <!-- Tampilkan error jika ada -->
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="johndoe@gmail.com" 
                        class="border rounded px-3 py-2 w-full shadow" 
                        required>
                </div>
                <div class="mb-4">
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Password" 
                        class="border rounded px-3 py-2 w-full shadow" 
                        required>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-[#004C6D] to-[#0093D3] text-white py-2 px-4 rounded-lg hover:from-[#0093D3] hover:to-[#0093D3]">
                    Login
                </button>
                <p class="text-center text-sm text-gray-600 mt-4">
                    Don't have an account? <a href="{{ route('register') }}" class="text-[#1E4D4D] font-medium hover:underline">Sign Up here</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
