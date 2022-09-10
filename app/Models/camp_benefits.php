<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class camp_benefits extends Model
{
    use HasFactory;

    protected $fillable = ['camp_id', 'name'];
}
