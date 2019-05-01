<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkir extends Model
{
    protected $fillable =[
        'nama','alamat','noPol','jenisKendaraan'
    ];
}
