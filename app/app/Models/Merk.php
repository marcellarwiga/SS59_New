<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    public function obats()
    {
        return $this->belongsTo(Obat::class);
    }
}
