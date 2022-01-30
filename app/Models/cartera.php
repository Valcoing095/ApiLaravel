<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartera extends Model
{
    use HasFactory;


    protected $table = 'cartera';
    protected $primaryKey = 'id';

    public $timestamps = false;
    public $autoincrement = false;
}
