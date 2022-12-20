<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    // for avoiding MassAssignmentException using the $fillable method
    protected $fillable = ['section','emergency_number','location','street','house_number','picture','department'];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'section' => 'Arbeiten',
        'house_number' => 'none',
        'picture' => 'none',
        'department' => 'none',
    ];


    // Mapping an Object to many Contacts
    public function works(){
        return $this->belongsToMany(Contact::Class)->withTimestamps();
    }
}
