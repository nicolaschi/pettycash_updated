<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    use HasFactory;

    protected $table = "plans";

    public function parks(){

        return $this->belongsTo(parks::class);
    }
}
