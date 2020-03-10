<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $connection = 'mysql';

    protected $table = 'apartments';

    public $timestamps = true;

    protected $fillable = [
        'city_id', 'detail_id', 'location', 'description',
        'created_at', 'updated_at'
    ];

    public function city()
    {
        return $this->hasOne(City::class , 'id', 'city_id');
    }

    public function detail()
    {
        return $this->hasOne(Detail::class, 'id', 'detail_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'apartment_id');
    }
}
