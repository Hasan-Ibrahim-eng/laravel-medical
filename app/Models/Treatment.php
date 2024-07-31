<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;
    protected $fillable = ['id_appoint', 'symptoms', 'medicines', 'orders'];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'id_appoint');
    }
}
