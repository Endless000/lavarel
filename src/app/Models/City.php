<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $connection = 'mysql';

    protected $table = 'cities';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
