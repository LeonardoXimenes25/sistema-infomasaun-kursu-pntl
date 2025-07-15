<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Divisaun extends Model
{
    protected $table = 'divisauns';
    protected $fillable = ['kodigu', 'naran'];

    public function polisias(): HasMany {
        return $this->hasMany(Polisia::class, 'diviza_id');
    }
}
