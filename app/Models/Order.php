<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public $primaryKey = 'id';
    public $timestamps = true;
    
    public function food()
    {
        return $this->belongsTo('App\Models\Food');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    
}
