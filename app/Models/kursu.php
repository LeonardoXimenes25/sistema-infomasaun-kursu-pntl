<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kursu extends Model
{
    use HasFactory;
    protected $fillable = [
        'naran_kursu', 
        'tipu_kursu', 
        'fatin_kursu', 
        'data_hahu', 
        'data_remata', 
        'fundus', 
        'feto', 
        'mane', 
        'total',
        'user_id'
    ];

    protected $casts = [
        'data_hahu' => 'date',
        'data_remata' => 'date',
    ];

    public function partisipantes()
    {
        return $this->hasMany(Partisipante::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }

}
