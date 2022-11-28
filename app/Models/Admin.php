<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['section','emergency_number','division'];

    public function administrations(){
        return $this->belongsToOne(Contact::Class)->withTimestamps();
    }
}
