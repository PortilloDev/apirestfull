<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BookCollection extends ResourceCollection
{
    //Utilizamos el formato de datos de BookResource, para que los recursos individuales de la colección
    //se muestren con el formato indicado en la versión 2.
    public $collects = BookResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'editorial' => 'Editorial libros extraños',
                'autor' => [
                    'Portillo',
                    'Iván'
                ]
            ],
            'type' => 'books'
        ];
    }
}
