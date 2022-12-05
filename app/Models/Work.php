<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = ['section','emergency_number','location','street','house_number','picture','department'];


    public function works(){
        return $this->belongsToOne(Contact::Class)->withTimestamps();
    }
}
