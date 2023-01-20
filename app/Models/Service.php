<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    public $primaryKey = 'id';
    public $timestamps = true;

   public function room()
    {
        return $this->belongsTo('App\Models\Room');
    }

    public function serviceType()
    {
        return $this->belongsTo('App\Models\ServiceCategory');
    }
}
