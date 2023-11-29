

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('backend/css/2.2 tailwind.min.css')}}">
    <title>Login Page</title>
    
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full sm:w-96">
        <h1 class="text-2xl font-semibold mb-4 text-center">Login Form</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 p-2">
                <span style="color: red">
                    @error('email')
                    {{$message}}
                        
                    @enderror

                </span>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium ">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 p-2">
                <span style="color: red">
                    @error('password')
                    {{$message}}
                        
                    @enderror

                </span>
            </div>
            <div class="flex justify-between items-center">
                <div class="text-sm">
                    <a href="{{ route('password.request') }}" class="text-blue-500 hover:underline">Forgot Password?</a>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Login</button>
            </div>        </form>
        <p class="mt-4 text-gray-600 text-sm text-center">Don't have an account? <a href="{{route('register')}}" class="text-blue-500 hover:underline">Sign up</a></p>
    </div>
</body>
</html>
