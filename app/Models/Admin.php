<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;


    // for avoiding MassAssignmentException using the $fillable method
    protected $fillable = ['section','emergency_number','division'];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'section' => 'Stab',
    ];

    // Mapping an Object to many Contacts
    public function administrations(){
        return $this->belongsToMany(Contact::Class)->withTimestamps();
    }
}
