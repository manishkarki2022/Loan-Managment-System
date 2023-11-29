@extends('admin.dashboard')
@section('content')

    <div class="p-6 mx-auto max-w-xl">
        <div class="bg-white shadow-md rounded-lg p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <img src="{{asset(Auth::user()->image)}}" alt="User Profile" class="w-16 h-16 rounded-full">
                    <div>
                        <h2 class="text-2xl font-semibold">{{$user->name}}</h2>
                        <p class="text-gray-500">{{$user->role}}</p>
                    </div>
                </div>
                <div>
                    <a href="{{route('admin.profile')}}">
                    <button class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Edit Profile</button>
                </a>
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">
            <div>
                <h3 class="text-xl font-semibold mb-2"><u>User Details</u></h3>
              <h4 class="text-xl font-semibold mb-2">Email: {{$user->email}}</h4>
              <h4 class="text-xl font-semibold mb-2">Phone: {{$user->phone}}</h4>
              <h4 class="text-xl font-semibold mb-2">Status: {{$user->status}}</h4>
            </div>
        </div>
    </div>
    @endsection

