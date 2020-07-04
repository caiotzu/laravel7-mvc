<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    // public $table = 'studies';
    public $fillable = ['description', 'date_init', 'date_finish', 'status', 'area_id'];
    public $perPage = 5; // Define o tanto de itens por página

    
    public function area(){
        // return $this->belongsTo('App\Models\Area');

        // Model que esta referenciando / id do this model(chave estrangeira) / id da tabela referenciada (chave primaria)
        // return $this->belongsTo(Area::class, 'area_id', 'id');

        return $this->belongsTo(Area::class);
    }
    
    public function getAmountByStatus($status){
        return Study::where('status', $status)->count();
    }

}

