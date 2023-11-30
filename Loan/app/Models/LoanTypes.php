<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanTypes extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'loan_types'; // Specify the table name if it's different from the model's plural form.

    protected $fillable = ['name'];
}
