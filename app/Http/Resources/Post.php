<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'postContent'=>$this->postContent,
            'contactId'=>$this->contactId,
            'topic'=>$this->topic,
            'date'=>$this->date,
            'readingTime'=>$this->readingTime
        ];
    }
    
}
