<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
                'id' => $this->id,
                'category_id' => $this->id,
                'slag' => $this->slag,
                'title' => $this->translation->title,
                'body' => $this->translation->body,
                'author' => $this->translation->author,
                'main_picture' => $this->main_picture,
                'published' => $this->published,
            ];
        }

    }
}
