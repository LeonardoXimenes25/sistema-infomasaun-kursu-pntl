<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partisipante extends Model
{
    use HasFactory;

    protected $table = 'partisipantes';

    protected $fillable = [
        'kursu_id',
        'polisia_id',
        'sexu',   // penting, karena ada di DB
    ];

    // Relasi ke Kursu (many-to-one)
    public function kursu(): BelongsTo
    {
        return $this->belongsTo(Kursu::class);
    }

    // Relasi ke Polisia (many-to-one)
    public function polisia(): BelongsTo
    {
        return $this->belongsTo(Polisia::class, 'polisia_id');
    }
}
