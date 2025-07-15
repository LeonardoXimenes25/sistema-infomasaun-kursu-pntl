<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TipuKursu extends Model
{
    protected $table = 'tipu_kursu';

    protected $fillable = ['kodigu', 'naran', 'kategoria_id'];

    public $timestamps = false;

    public function kursus(): HasMany
    {
        return $this->hasMany(Kursu::class, 'tipu_kursu_id');
    }

    public function kategoria(): BelongsTo
    {
        return $this->belongsTo(Kategoria::class, 'kategoria_id');
    }
}
