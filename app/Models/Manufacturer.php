<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;
use App\Models\Mark;

class Manufacturer extends Model
{
    // отношение Один-к-Одному
    use HasFactory; 

     public function mark()
    {
        return $this->hasOne(Mark::class);
    }
}
