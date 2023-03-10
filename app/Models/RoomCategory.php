<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    use HasFactory;
    
    protected $table = 'room_categories';
    public $primaryKey = 'id';
    public $timestamps = true;
}
