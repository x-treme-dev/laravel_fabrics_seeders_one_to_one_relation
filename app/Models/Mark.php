<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;
use App\Models\Manufacturer;

class Mark extends Model
{   
   use HasFactory; 
    // Обратное отношение Один-к-Одному
    public function manufacturer()
    {
      return $this->belongsTo(Manufacturer::class);
    }

    public function body()
    {
        return $this->hasOne(Body::class);
    }
}
