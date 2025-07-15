<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FatinKursu extends Model
{
    protected $table = 'fatin_kursu';
    public $timestamps = false;


    protected $fillable = [
        'kodigu', 
        'naran',
        'kategoria_id',
    ];
   

    public function kategoria(): BelongsTo
    {
        return $this->belongsTo(Kategoria::class, 'kategoria_id');
    }
}
