<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoanTypes;

class LoanTypesController extends Controller
{
    public function allLoanTypes()
    {
        $loan_types = LoanTypes::get();
        return view('admin.loan_type.all_loan_type',compact('loan_types'));
    }
    public function addLoanTypes(Request $request)
    {
        $request->validate([
            'loanType'=>'required'
        ]);
        $loan_type = new LoanTypes();
        $loan_type->name = $request->loanType;
        $loan_type->save();
        return redirect()->back()->with('success', 'Loan type added successfully');

    }
    public function deleteLoanType(LoanTypes $loan_type)
    {
        $loan_type->delete();
        return redirect()->back()->with('success','Loan Type deleted Successfully!');
    }
}
