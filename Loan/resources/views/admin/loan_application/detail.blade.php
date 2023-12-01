@extends('admin.dashboard')
@section('content')
<style>
  .switch {
position: relative;
display: inline-block;
width: 50px;
height: 24px;
}

.switch input {
display: none;
}

.slider {
position: absolute;
cursor: pointer;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ccc;
border-radius: 17px; /* Make the slider rounded */
transition: 0.4s;
}

.slider:before {
position: absolute;
content: "";
height: 16px;
width: 16px;
left: 4px;
bottom: 4px;
background-color: white;
border-radius: 50%; /* Make the circle rounded */
transition: 0.4s;
}

input:checked + .slider {
background-color: #2196F3;
}

input:checked + .slider:before {
transform: translateX(26px);
}

</style>

    <div class="p-6 mx-auto max-w-xl">
        <div class="bg-white shadow-md rounded-lg p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    {{-- <img src="{{asset(Auth::user()->image)}}" alt="User Profile" class="w-16 h-16 rounded-full"> --}}
                    <div>
                        <h2 class="text-2xl font-semibold">{{$loan->name}}</h2>
                        <p class="text-gray-500">{{$loan->email}}</p>
                    </div>
                </div>
                <div>
                  <b>Change Status</b>
                  <form action="{{route('loan.toggle-status',$loan->id)}}" method="POST">
                    @csrf
                  <label class="switch">
                      <input type="checkbox" name="status" onchange="this.form.submit()" {{($loan->status==='approved')?'checked':''}}>
                      <span class="slider"></span>
                    </label>
                  </form>
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">
            <div>
                <h3 class="text-xl font-semibold mb-2"><u>Loan Application Details</u></h3>
              <h4 class="text-xl font-semibold mb-2">Amount: {{$loan->aount}}</h4>
              <h4 class="text-xl font-semibold mb-2">Bank: {{$loan->bank}}</h4>
              <h4 class="text-xl font-semibold mb-2">Account: {{$loan->account}}</h4>
              <h4 class="text-xl font-semibold mb-2">Status: {{$loan->status}}</h4>
              <h4 class="text-xl font-semibold mb-2">Installment: {{$loan->installment_payable}}</h4>
              <h4 class="text-xl font-semibold mb-2">Amount + Intrest: {{$loan->amount_payable}}</h4>

              
            </div>
        </div>
    </div>
    @endsection