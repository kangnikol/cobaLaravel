<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datas extends Model
{
    protected $fillable = ['nama','alamat','telp'];
    use HasFactory;
}
