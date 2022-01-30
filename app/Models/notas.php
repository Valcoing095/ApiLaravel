<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notas extends Model
{
    use HasFactory;

    protected $table = 'notas';
    protected $primaryKey = 'id';

    public $timestamps = false;
    public $autoincrement = false;
}
