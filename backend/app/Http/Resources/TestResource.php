<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'question' => $this->question ? $this->question : null,
            'type' => $this->type ? $this->type : null,
            'status' => $this->status ? $this->status : null,
            'category_id' => $this->category_id ? $this->category_id : null,
            'answers' => $this->answers ? $this->answers : null,

        ];
    }
}
