<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table='employees';
    protected $primaryKey='id';
    protected $fillable=['firstname', 'middlename', 'lastname', 'phone_number', 'email', 'hired_date','address',
    'employee_category_id', 'isEnabled', 'pan_number', 'citizenship_number', 'salary', 'dob'];
}
