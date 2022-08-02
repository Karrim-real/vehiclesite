<?php

namespace App\Models;

use App\Models\Makes;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Models extends Model
{
    use HasFactory;

    protected $table = 'models';

    protected $fillable = [
        'makes_id',
        'name',
        'code',
    ];
    public function makes()
    {
        return $this->hasMany(Makes::class, 'makes_id', 'id');
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'models_id', 'id');
    }
}
