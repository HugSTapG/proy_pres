<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proy_pres extends Model
{
    use HasFactory;

    protected $table = 'proy_pres_t';
    protected $fillable = [
        'Ingresos',
        'Gastos',
    ];

    /*
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($testing) {
            $testing->user_id = auth()->id();
        });
    }
    */
}
