<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $connection = 'mysql';

    protected $table = 'details';

    protected $fillable = ['type', 'm²', 'rooms', 'price', 'created_at', 'updated_at'];

    public $timestamps = false;

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

}
