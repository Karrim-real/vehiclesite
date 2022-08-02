<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Makes extends Model
{
    use HasFactory;
    protected $table = 'makes';

    protected $fillable = [
        'code',
        'name',
        'logo',
    ];
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'makes_id', 'id');
    }
   
}
