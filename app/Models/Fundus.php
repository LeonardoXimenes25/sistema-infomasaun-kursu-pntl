<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fundus extends Model
{
    protected $table = 'fundus'; 
    protected $fillable = ['kodigu', 'naran'];

    public function courses(): HasMany
    {
        return $this->hasMany(Kursu::class);
    }

}
