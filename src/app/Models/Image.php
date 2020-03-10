<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $connection = 'mysql';

    protected $table = 'images';

    protected $fillable = ['image', 'created_at', 'apartment_id'];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
