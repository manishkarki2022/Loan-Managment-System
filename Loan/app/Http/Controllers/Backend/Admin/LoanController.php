<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoanApplication;
use App\Models\LoanTypes;

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
}
