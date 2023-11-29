

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    @vite('resources/css/app.css')
    
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full sm:w-96">
        <h1 class="text-2xl font-semibold mb-4">Forgot Password</h1>
        <p class="text-gray-700 mb-4">Please enter your email address to receive a password reset link.</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{session('status')}}
            </div>   
            @endif
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
                <span style="color: red">
                    @error('email')
                    {{$message}}
                        
                    @enderror
                </span>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Send Reset Link</button>
        </form>
        <p class="mt-4 text-gray-600 text-sm text-center"><a href="{{route('login')}}" class="text-blue-500 hover:underline">Back to Login</a></p>
    </div>
</body>
</html>

