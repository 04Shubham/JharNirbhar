<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Appointment;

class State extends Model
{
    use HasFactory;

    public function appointments(){
        return $this->hasMany(Appointment::class, 'state_code', 'state_code');
    }
}
