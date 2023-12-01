<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoanApplication;
use App\Models\LoanTypes;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LoanController extends Controller
{
    public function allLoanApplication()
    {
        $loan = LoanApplication::get();
        return view('admin.loan_application.all', compact('loan'));
    }
    public function loanApplication()
    {   $loan_types = LoanTypes::all();
        return view('user.loan_application.application',compact('loan_types'));
    }
    public function loanStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $today = Carbon::now();
        $formattedDate = $today->format('Y-m-d');
        LoanApplication::insert([
            'name'=>$data->name,
            'email'=>$data->email,
            'amount'=>$request->amount,
            'bank'=>$request->bank,
            'account'=>$request->account_no,
            'loan_type'=>$request->loan_type,
            'installment_count'=>$request->installment_counts,
            'installment_payable'=>$request->installment_amount,
            'amount_payable'=>$request->amount_payable,
            'date_applied'=>$formattedDate,
            'status'=>'not_approved',
        ]);
        return redirect()->back()->with('success','Loan Applied Successfully');

    }
    public function loanDetail($id){
        $loan = LoanApplication::find($id);
        return view('admin.loan_application.detail',compact('loan'));
    }
    public function toggleStatus(Request $request,$id)
    {
       $loan = LoanApplication::find($id) ;
       $loan->status = ($request->has('status'))?'approved':'not_approved';
       $loan->save();
       return redirect()->back()->with('success','Loan Status updated successfully');
    }
}
