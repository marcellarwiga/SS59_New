<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    public function merks()
    {
        return $this->hasOne(Merk::class,"id","merks_id");
    }
}
