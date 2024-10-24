<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;
use App\Models\Mark;

class Body extends Model
{   
    use HasFactory;
    //Обратное отношение Один-ко-Одному
    public function mark()
    {
        return $this->belongsTo(Mark::class);
    }
}
