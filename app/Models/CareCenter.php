<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareCenter extends Model
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
        'section' => 'Tagesfoerderstaette',
        'house_number' => 'none',
        'picture' => 'none',
    ];

    public function careCenters(){
        return $this->belongsToOne(Contact::Class)->withTimestamps();
    }
}
