<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanTypesController extends Controller
{
    public function allLoanTypes(){
        return view('admin.loan_type.all_loan_type');
    }
}
