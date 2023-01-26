<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'est_start_date',
        'est_duration',
        'budget',
        'est_roi',
        'user_id',
        'manager_notice',
        'status_id'
    ];
}
