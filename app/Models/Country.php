<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'departamento';

    public function ciudades(){
        return $this -> hasMany(
            City::class,'idDepartamento'
        );
    }
}
