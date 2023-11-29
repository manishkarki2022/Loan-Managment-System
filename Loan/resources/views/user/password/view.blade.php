@extends('user.dashboard')
@section('content')

<div class="p-6">
    <div class="bg-white shadow-md rounded-lg p-4">
      <h2 class="text-2xl font-semibold mb-4">Update Password</h2>
     
      
      <form class="mt-6" method="POST" action="{{route('admin.updatePassword')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-medium">Current Password</label>
          <input type="password" id="password" name="current_password"  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 bg-gray-200 p-2">
          <span style="color: red">
            @error('current_password')
            {{$message}}    
            @enderror
        </span>
        </div>
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-medium">New Password</label>
          <input type="password" id="password" name="password"  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 bg-gray-200 p-2">
          <span style="color: red">
            @error('password')
            {{$message}}    
            @enderror
        </span>
        </div>
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-medium">Comfirm Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation"  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 bg-gray-200 p-2">
          <span style="color: red">
            @error('password_confirmation')
            {{$message}}    
            @enderror
        </span>
        </div>
       
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Save Changes</button>
      </form>
    </div>
  </div>


 



@endsection