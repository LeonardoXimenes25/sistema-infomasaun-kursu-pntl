<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Polisia extends Model
{
    protected $table = 'polisias';

    protected $fillable = [
        'kodigu',
        'naran',
        'sexu',
        'unidade_id',
        'departamentu_id',
        'diviza_id',
    ];

    /**
     * Relasi many-to-many ke Kursu lewat pivot partisipantes
     */
    public function kursus(): BelongsToMany
    {
        return $this->belongsToMany(Kursu::class, 'partisipantes')->withTimestamps();
    }

    /**
     * Relasi many-to-one ke Unidade
     */
    public function unidade(): BelongsTo
    {
        return $this->belongsTo(Unidade::class);
    }

    /**
     * Relasi many-to-one ke Departamentu
     */
    public function departamentu(): BelongsTo
    {
        return $this->belongsTo(Departamentu::class);
    }

    /**
     * Relasi many-to-one ke Divisaun
     */
    public function diviza(): BelongsTo
    {
        return $this->belongsTo(Divisaun::class);
    }

    /**
     * Accessor untuk label gabungan kodigu dan naran
     */
    public function getLabelAttribute(): string
    {
    return "{$this->kodigu} - {$this->naran}";
    }
}
