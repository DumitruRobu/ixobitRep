<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelClient extends Model
{
    use HasFactory;

    protected $table = "client";
    protected $guarded = false;
    public $timestamps=false;
    use SoftDeletes;
}
