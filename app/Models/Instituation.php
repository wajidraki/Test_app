<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituation extends Model
{
    use HasFactory;


//relatonship
        public function students()
        {
            return $this->hasMany(Student::class);
        }

        //scope

    public function scopeHasStudent($query){
        return $query->whereHas('students');
    }

    public function scopeHasNoStudent($query){
        return $query->whereDoesntHave('students');
    }
}
