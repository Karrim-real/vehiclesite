<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Body extends Model
{
    use HasFactory;
    protected $table = 'body';

    protected $fillable = [
        'vehicle_id',
        'name'
    ];
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'body_id', 'id');
    }
}
