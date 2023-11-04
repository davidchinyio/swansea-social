<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'email_address',
    // ];

    // public function backupAccount() {
    //     return $this->hasOne(BackupAccount::class);
    // }

    public function supportersGroup() {
        //return $this->belongsTo('App\SupportersGroupTableSeeder');
        return $this->belongsTo('App\SupportersGroup');

    }
}
