<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payoff extends Model
{
    use HasFactory;

    protected $fillable = [
        'unique_key',
        'date',
        'time',
        'month',
        'year',
        'employee_id',
        'total_working_hour',
        'present_days',
        'total_ot',
        'perhoursalary',
        'salaryamount',
        'totalpaidsalary',
        'balancesalary',
        'note',
        'soft_delete'
    ];
}
