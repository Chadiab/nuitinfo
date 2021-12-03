<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauveteur extends Model
{
    use HasFactory;
    public function getBateau()
    {
        return $this->hasOne('App\Models\Bateau');
    }
    public function getSauvees()
    {
        return $this->hasMany('App\Models\Sauvees');
    }
}
