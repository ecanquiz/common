<?php

namespace App\Models\GeoLocation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Municipality extends Model
{
    use HasFactory;
    
    // protected $connection = 'pgsql_common';

    protected $fillable = [];
    
    protected static function newFactory()
    {
        // return \Database\factories\MunicipalityFactory::new();
    }
}

