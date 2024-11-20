<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesantren extends Model
{
    protected $table = 'pesantren';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}
