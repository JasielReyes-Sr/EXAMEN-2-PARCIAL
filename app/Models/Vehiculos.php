<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;
    protected $table = 'vehiculos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'plate_number', 
        'brand', 
        'model',
        'vehicle_type',
        'color',
        'capacity',
        'daily_rate',
        'status'];
}
