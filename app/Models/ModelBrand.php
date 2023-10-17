<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelBrand extends Model
{
    use HasFactory;
    protected $table = "brand";
    protected $guarded = false;
    public $timestamps=false;
    use SoftDeletes;

    public function produs(){
        return $this->hasMany(ModelProdus::class,  "idBrand", "id");
    }

}
