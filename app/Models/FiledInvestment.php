<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiledInvestment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'project_id',
        'amount_invested',
        'date_of_deposit',
        'deposit_upload',
        'status_id'
    ];
}
