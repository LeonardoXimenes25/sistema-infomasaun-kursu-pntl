<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materia extends Model
{
    protected $fillable = [
        'kodigu',
        'naran',
        'kategoria_id',
        'tipu_kursu_id',
    ];

    public $timestamps = false;

    public function kategoria(): BelongsTo
    {
        return $this->belongsTo(Kategoria::class);
    }

    public function tipu(): BelongsTo
    {
        return $this->belongsTo(Tipukursu::class, 'tipu_kursu_id');
    }
}
