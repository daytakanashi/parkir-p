<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enter extends Model
{
    protected $fillable =[
        'nama','noPol','tanggal','masuk','keluar'];
}
