<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelProdus extends Model
{
    use HasFactory;
    protected $table = "produs";
    protected $guarded = false;
    public $timestamps=false;
    use SoftDeletes;

    public function brand(){
        return $this->belongsTo(ModelBrand::class,  "idBrand", "id");
    }

    public function params(){
        return $this->belongsTo(ModelParams::class,  "id_params", "id");
    }
}
