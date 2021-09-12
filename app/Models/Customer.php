<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table='customers';

    public $timestamps = true;

    protected $fillable=['name', 'contact', 'address', 'email'];
}
