<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCm extends Model
{
    protected $fillable = ['operador', 'tp_energia', 'inicio',
    'fim', 'volume', 'preco', 'submercado'];
}
