<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Living extends Model
{
    use HasFactory;

    // for avoiding MassAssignmentException using the $fillable method
    protected $fillable = ['section','emergency_number','location','street','house_number','picture'];


    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'section' => 'Wohnen',
        'house_number' => 'none',
        'picture' => 'none',
    ];

    // Mapping an Object to many Contacts
    public function livings(){
        return $this->belongsToMany(Contact::Class)->withTimestamps();
    }

}
