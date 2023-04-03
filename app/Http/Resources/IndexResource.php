<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class IndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if (!is_null($this->translation)) {
            return [
                'category_id' => $this->id,
                'slag' => $this->slag,
                'name' => $this->translation->name,
                'description' => $this->translation->description,
                'article' => ArticleResource::collection($this->articles),
            ];
        }
    }
}
