<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartisipanteRaiLiur extends Model
{
    use HasFactory;
    protected $fillable = ['kursurailiur_id', 'naran', 'diviza', 'unidade', 'departamentu'];

    public const DIVIZA_OPTIONS = [
                'Ajente',
                'Ajente Prinsipal',
                'Ajente Xefe',
                'Sarjento',
                'Primeiru Sarjentu',
                'Sarjentu Xefe',
                'Inspetor Asistente',
                'Inspetor',
                'Inspetor Xefe',
                'Supertemdemte Asistente',
                'Supertendente',
                'Supertendente Xefe',
                'Komisariu'
    ];

    public static function divizaOptions(): array
    {
        return array_combine(self::DIVIZA_OPTIONS, self::DIVIZA_OPTIONS);
    }

    public const UNIDADE_OPTIONS = [
                'Unidade Espesial Polisia (UEP)',
                'Unidade Intervens Rapida (UIR)',
                'Unidade Patrulhamento Fronteira (UPF)',
                'Unidade Maritima',
                'Unidade Pesoal Vuneravel (VPU)',
                'Unidade Reservista Polisia'
    ];

    public static function unidadeOptions(): array
    {
        return array_combine(self::UNIDADE_OPTIONS, self::UNIDADE_OPTIONS);
    }

    public const DEPARTAMENTU_OPTIONS = [
                'Departamentu Opersaun',
                'Departamentu Investigassaun',
                'Departamentu Tranzitu/Trafiku',
                'Departamentu Fronteira',
                'Departamentu Intelejensia',
                'Departamentu Logistika',
                'Departamentu Formasaun',
                'Departamentu Relasaun Komunitaria',
    ];

    public static function departamentuOptions(): array
    {
        return array_combine(self::DEPARTAMENTU_OPTIONS, self::DEPARTAMENTU_OPTIONS);
    }

    public function kursurailiur()
    {
        return $this->belongsTo(KursuRaiLiur::class);
    }
}
