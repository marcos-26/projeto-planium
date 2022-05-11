<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    protected $table ='Beneficiarios';
    protected $fillable = ['quantidade', 'idade', 'name', 'registro'];
}
