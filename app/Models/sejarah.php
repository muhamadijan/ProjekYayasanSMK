<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sejarah extends Model
{
    use HasFactory;
    protected $table = "sejarah";
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
