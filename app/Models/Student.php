<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function Instituation(){
        return $this->belongsTo(Instituation::class);
    }


    public function Level(){
        return $this->belongsTo(Level::class);
    }
}

