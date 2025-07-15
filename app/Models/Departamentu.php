<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departamentu extends Model
{
    protected $table = 'departamentus';
    protected $fillable = ['kodigu', 'naran'];
   
    public function polisias(): HasMany {
        return $this->hasMany(Polisia::class, 'departamentu_id');
    }
}
