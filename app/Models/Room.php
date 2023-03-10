<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class room extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    public $primaryKey = 'id';
    public $timestamps = true;

   public function room()
    {
        return $this->belongsTo('App\Models\RoomCategory');
    }

}