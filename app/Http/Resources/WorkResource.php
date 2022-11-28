<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'section' => $this->section,
            'emergency_number' => $this->emergency_number,
            'location' => $this->location,
            'street' => $this->street,
            'house_number' => $this->house_number,
            'picture' => $this->picture,
            'department' => $this->department,

            // Hier fehlt noch die zuweisung zur Contact_person
        ];
    }
}
