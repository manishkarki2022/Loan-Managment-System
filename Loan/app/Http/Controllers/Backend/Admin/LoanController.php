<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoanApplication;

class LoanController extends Controller
{
    public function allLoanApplication()
    {
        $loan = LoanApplication::get();
        return view('admin.loan_application.all', compact('loan'));
    }
}
