<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrivingService extends Model
{
    use HasFactory;

    protected $fillable = ['section','emergency_number'];

    public function drivingServices(){
        return $this->belongsToOne(Contact::Class)->withTimestamps();
    }
}
