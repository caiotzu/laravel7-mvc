<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    // Permite o usuário alterar apenas esses 2 campos no banco de dados
    protected $fillable = ['description', 'color'];
}
