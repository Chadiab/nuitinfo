<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauvees extends Model
{
    use HasFactory;
    public function getSauveteur()
    {
        return $this->hasOne('App\Models\Sauveteur');
    }
    public function getSauvees()
    {
        return $this->hasMany('App\Models\Sauvees');
    }
}
