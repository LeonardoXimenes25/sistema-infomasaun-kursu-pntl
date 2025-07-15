<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unidade extends Model
{
    protected $table = 'unidades';
    protected $fillable =['kodigu', 'naran'];

    public function polisia(): HasMany 
    {
        return $this->hasMany(Polisia::class, 'unidade_id');
    }
}
