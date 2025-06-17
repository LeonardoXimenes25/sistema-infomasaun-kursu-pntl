<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class relatoriu extends Model
{
    use HasFactory;
    protected $fillable = ['author_id', 'data_submisaun', 'author_id', 'observasaun'];
}
