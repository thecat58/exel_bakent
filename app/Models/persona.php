<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cargaCertificados extends Model
{
    protected $table = "persona";
    protected $guarded = [];
    use HasFactory;

    public $timestamps = false;

}
