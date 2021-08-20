<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Category extends Model
{
    use HasFactory;
    protected $table='employee_category';
    protected $primaryKey='id';
    protected $fillable=['name', 'description', 'isEnabled'];
}
