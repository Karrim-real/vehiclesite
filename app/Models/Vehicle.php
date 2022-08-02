<?php

namespace App\Models;

use Hashids;
use App\Models\Body;
use App\Models\Drive;
use App\Models\Image;
use App\Models\Makes;
use App\Models\Models;
use App\Models\Transmission;
use App\Http\Traits\Hashidable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;
    use Hashidable;
    protected $table = 'vehicles';

    protected $fillable = [
        'makes_id',
        'models_id',
        'year',
        'transmission_id',
        'body_id',
        'capacity',
        'drive_id',
        'color',
        'description',
        'features',
        'fuel',
        'main_image',
    ];
   
    public function makes()
    {
        return $this->belongsTo(Makes::class, 'makes_id', 'id');
    }
    public function models()
    {
        return $this->belongsTo(Models::class, 'models_id', 'id');
    }
    public function transmission()
    {
        return $this->belongsTo(Transmission::class, 'transmission_id', 'id');
    }
    public function body()
    {
        return $this->belongsTo(Body::class, 'body_id', 'id');
    }
    public function drive()
    {
        return $this->belongsTo(Drive::class, 'drive_id', 'id');
    }
    public function vehicleImages()
    {
        return $this->hasMany(Image::class, 'vehicle_id', 'id');
    }

  
}
