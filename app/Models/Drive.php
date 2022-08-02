<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Drive extends Model
{
    use HasFactory;
    protected $table = 'drive';

    protected $fillable = [
        'vehicle_id',
        'name'
    ];
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'drive_id', 'id');
    }
}
