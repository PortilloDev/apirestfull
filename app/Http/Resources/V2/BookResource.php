<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'name_book' => $this->title,
            'description_book' => $this->description,
            'author' => [
                'name' => $this->user->name,
                'email' => $this->user->email,
            ],
            'date_published' => $this->created_at,
                
        ];
    }
}
