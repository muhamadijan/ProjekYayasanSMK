<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sambutan extends Model
{
    protected $table = 'sambutan';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}
