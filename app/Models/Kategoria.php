<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategoria extends Model
{
    protected $table = 'kategorias';
    public $timestamps = false;

    protected $fillable = ['kodigu', 'naran']; 

    public function tipuKursus(): HasMany
    {
        return $this->hasMany(Tipukursu::class, 'kategoria_id');
    }

    public function fatinKursus(): HasMany
    {
        return $this->hasMany(FatinKursu::class, 'kategoria_id');
    }
}
