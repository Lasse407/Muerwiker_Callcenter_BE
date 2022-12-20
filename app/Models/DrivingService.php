<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrivingService extends Model
{
    use HasFactory;

    // for avoiding MassAssignmentException using the $fillable method
    protected $fillable = ['section','emergency_number'];

    // Mapping an Object to many Contacts
    public function drivingServices(){
        return $this->belongsToMany(Contact::Class)->withTimestamps();
    }
}
