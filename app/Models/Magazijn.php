<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magazijn extends Model
{
    // Gebruik de juiste tabelnaam uit de Jamin-database
    protected $table = 'magazijn';

    // De primary key heet Id in plaats van id
    protected $primaryKey = 'Id';

    // De tabel gebruikt geen Laravel timestamps
    public $timestamps = false;

    // Velden die we uit de database gebruiken
    protected $fillable = [
        'ProductId',
        'VerpakkingsEenheid',
        'AantalAanwezig',
        'IsActief',
        'Opmerking',
        'DatumAangemaakt',
        'DatumGewijzigd',
    ];
}