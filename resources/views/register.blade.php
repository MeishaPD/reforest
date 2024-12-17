<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account</title>
    @vite('resources/css/app.css')
</head>

<body class="h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/login.png') }}');">
    <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-2xl font-bold text-center text-[#1E4D4D] mb-6">Create Reforest Account</h1>

            {{-- Form Register --}}
            <form action="{{ route('register') }}" method="POST">
                @csrf

                {{-- Nama Depan dan Belakang --}}
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}"
                        class="col-span-1 border rounded px-3 py-2 w-full @error('first_name') border-red-500 @enderror">

                    <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}"
                        class="col-span-1 border rounded px-3 py-2 w-full @error('last_name') border-red-500 @enderror">
                </div>
                @error('first_name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                @error('last_name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                {{-- Nomor Telepon --}}
                <div class="mb-4">
                    <input type="text" name="phone" placeholder="No. Telepon" value="{{ old('phone') }}"
                        class="border rounded px-3 py-2 w-full @error('phone') border-red-500 @enderror">
                </div>
                @error('phone')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                {{-- Email --}}
                <div class="mb-4">
                    <input type="email" name="email" id="email" placeholder="johndoe@gmail.com"
                        value="{{ old('email') }}"
                        class="border rounded px-3 py-2 w-full shadow @error('email') border-red-500 @enderror">
                </div>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                {{-- Password --}}
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Password"
                        class="border rounded px-3 py-2 w-full @error('password') border-red-500 @enderror">
                </div>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                {{-- Confirm Password --}}
                <div class="mb-4">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                        class="border rounded px-3 py-2 w-full">
                </div>

                {{-- Tombol Submit --}}
                <button type="submit"
                    class="w-full bg-gradient-to-r from-[#004C6D] to-[#0093D3] text-white py-2 px-4 rounded-lg hover:from-[#0093D3] hover:to-[#0093D3]">
                    Create Account
                </button>

                {{-- Link Login --}}
                <p class="text-center text-sm text-gray-600 mt-4">
                    Already have an account? <a href="{{ route('login') }}"
                        class="text-[#1E4D4D] font-medium hover:underline">Log in here</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>
