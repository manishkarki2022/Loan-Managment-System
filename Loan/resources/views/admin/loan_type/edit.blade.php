@extends('admin.dashboard')
@section('content')
<div class="flex p-10 mx-auto ">
    <div class="w-1/2 bg-white shadow-md rounded-lg p-4">
        <h2 class="text-2xl font-semibold mb-4">Loan Management</h2>
        <form method="POST" action="{{ route('admin.update.loan.types', $loan_type->id) }}">
            @csrf
            <div class="mb-4">
                <label for="loanType" class="block text-gray-700 font-medium">Loan Type</label>
                <input type="text" id="loanType" value="{{ $loan_type->name }}" name="loanType" placeholder="Loan type" class="bg-gray-100 p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
                <span style="color: red">
                    @error('loanType')
                    {{ $message }}   
                    @enderror
                </span>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">Update Loan</button>
        </form>
    </div>
</div>
@endsection
