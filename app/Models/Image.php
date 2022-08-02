<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $table = 'v_images';

    protected $fillable = [
        'vehicle_id',
        'image',
    ];
    public function vehicleImages()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }
}
