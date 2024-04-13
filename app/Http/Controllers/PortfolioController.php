<?php

namespace App\Http\Controllers;

use App\Http\Resources\WinkPostResource;
use Wink\WinkPost;

class PortfolioController extends Controller
{
    public function __invoke()
    {
        $posts = WinkPostResource::collection(WinkPost::latest()->latest('id')->simplePaginate(3))->toJson();
        return view('portfolio', ['posts' => json_decode($posts, true)]);
    }
}
