<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    // for avoiding MassAssignmentException using the $fillable method
    protected $fillable = ['surname','forename','email','phone_number','picture','is_primary'];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'picture' => 'none',
        'is_primary' => true,
    ];

    public function contactWorks(){
        return $this->belongsToMany(Work::Class)->withTimestamps();
    }
    public function contactLivings(){
        return $this->belongsToMany(Work::Class)->withTimestamps();
    }
    public function contactAdmins(){
        return $this->belongsToMany(Work::Class)->withTimestamps();
    }
    public function contactDrivingServices(){
        return $this->belongsToMany(Work::Class)->withTimestamps();
    }
    public function contactCareCenters(){
        return $this->belongsToMany(Work::Class)->withTimestamps();
    }
}
