<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    protected $table = 'kontak';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}