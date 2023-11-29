
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Registration Page</title>
   
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full sm:w-96">
        <h1 class="text-2xl font-semibold mb-4">Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            @csrf
            @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{session('status')}}
            </div>   
            @endif
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Full Name</label>
                <input type="text" id="name" name="name" value="{{old('name')}}" class= "p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
                <span style="color: red">
                    @error('name')
                    {{$message}}
                        
                    @enderror
                
                </span>


            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
                <span style="color: red">
                    @error('email')
                    {{$message}}
                        
                    @enderror
                
                </span>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" id="password"  name="password" value="{{old('password')}}" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
                <span style="color: red">
                    @error('password')
                    {{$message}}
                        
                    @enderror
                
                </span>
            </div>
            <div class="mb-4">
                <label for="confirmPassword" class="block text-gray-700 font-medium">Confirm Password</label>
                <input type="password" id="confirmPassword"  name="password_confirmation" value="{{old('password_confirmation')}}" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
                <span style="color: red">
                    @error('name')
                    {{$message}}
                        
                    @enderror
                
                </span>
         </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Register</button>
        </form>
        <p class="mt-4 text-gray-600 text-sm text-center">Already have an account? <a href="{{route('login')}}" class="text-blue-500 hover:underline">Login</a></p>
    </div>
</body>
</html>

