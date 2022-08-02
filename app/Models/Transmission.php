<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transmission extends Model
{
    use HasFactory;
    protected $table = 'transmission';

    protected $fillable = [
        'vehicle_id',
        'name'
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'transmission_id', 'id');
    }
}
