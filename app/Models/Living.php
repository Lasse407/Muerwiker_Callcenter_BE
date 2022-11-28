<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Living extends Model
{
    use HasFactory;

    protected $fillable = ['section','emergency_number','location','street','house_number','picture'];

    public function livings(){
        return $this->belongsToOne(Contact::Class)->withTimestamps();
    }

}
