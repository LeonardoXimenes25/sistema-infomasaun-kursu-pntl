<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KursuRaiLiur extends Model
{
     use HasFactory;
    protected $fillable = ['naran_kursu', 'tipu_kursu', 'fatin_kursu', 'data_hahu', 'data_remata', 'fundus', 'feto', 'mane', 'total'];

    protected $casts = [
        'data_hahu' => 'date',
        'data_remata' => 'date',
    ];

     public function partisipanterailiur()
    {
        return $this->hasMany(PartisipanteRaiLiur::class);
    }
    
    public function user()
    {
        return $this->hasMany(User::class);
    }
    
}
