<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile_table';
    public $primaryKey = 'id';
    public $timestamps = true;


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

    