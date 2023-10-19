<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelVinzari extends Model
{
    use HasFactory;
    protected $table = "vinzari";
    protected $guarded = false;
    public $timestamps=false;
    use SoftDeletes;

    public function client(){
        return $this->belongsTo(ModelClient::class,  "id_client", "id");
    }

    public function produs(){
        return $this->belongsTo(ModelProdus::class,  "id_produs", "id");
    }
}
