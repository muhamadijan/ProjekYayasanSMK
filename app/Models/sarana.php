<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sarana extends Model
{
    use HasFactory;
    protected $table = 'sarana';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}
