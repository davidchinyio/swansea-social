<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email_address',
    ];

    public function footballTeam() {
        return $this->hasOne(FootballTeam::class);
    }
}
