<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Agenda;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    protected $fillable = ['kelas','walas'];

    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
?>