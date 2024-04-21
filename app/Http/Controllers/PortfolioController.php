<?php

namespace App\Http\Controllers;

use App\Http\Resources\VideoResource;
use App\Http\Resources\WinkPostResource;
use App\Models\Video;
use Wink\WinkPost;

class PortfolioController extends Controller
{
    public function __invoke()
    {
        $posts = WinkPostResource::collection(WinkPost::latest()->latest('id')->simplePaginate(3))->toJson();

        $videos = VideoResource::collection(Video::latest()->latest('id')->simplePaginate(3))->toJson();

        return view('portfolio', [
            'posts' => json_decode($posts, true),
            'videos' => json_decode($videos, true),
        ]);
    }
}
