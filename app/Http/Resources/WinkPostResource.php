<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Wink\WinkPost */
class WinkPostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
//            'content' => $this->content,
//            'published' => $this->published,
            'publish_date' => $this->publish_date->format('m/d/Y'),
//            'featured_image' => $this->featured_image,
//            'featured_image_caption' => $this->featured_image_caption,
//            'meta' => $this->meta,
//            'markdown' => $this->markdown,
//            'body' => $this->body,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
//            'tags_count' => $this->tags_count,
//
//            'author_id' => $this->author_id,
        ];
    }
}
