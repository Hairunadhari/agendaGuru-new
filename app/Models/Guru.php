<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Agenda;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    protected $fillable = ['nama'];
    
    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }
    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
?>