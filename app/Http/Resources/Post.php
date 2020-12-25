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
    /*
      return [
            'id'=>$this->id,
            'name'=>$this->name,
            'detail'=>$this->detail,
            'created_at'=>$this->created_at->format('d/m/Y H:i:s'),
            'updated_at'=>$this->updated_at->format('d/m/Y H:i:s')
        ];        'title',
        'postContent',
        'author',
        'date',
        'topic',
        'readingTime'
    }
    */
    public function toArray($request)
    {
        return [
            'title'=>$this->title,
            'postContent'=>$this->postContent,
            'author'=>$this->author,
            'topic'=>$this->topic,
            'date'=>$this->date,//->format('Y-m-d H:i:s')
            'readingTime'=>$this->readingTime
        ];
    }
}
