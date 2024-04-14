<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostShowResource;
use App\Http\Resources\WinkPostResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use League\CommonMark\MarkdownConverter;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Torchlight\Commonmark\V2\TorchlightExtension;
use Wink\WinkPost;

class PostController extends Controller
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function index(Request $request)
    {
        $query = WinkPost::query();

        if($request->search){
            $search = $request->search;
            $query->where('title', 'LIKE', "%{$search}%")->orWhere('excerpt', 'LIKE', "%{$search}%");
        }

        $posts = WinkPostResource::collection($query->latest()->latest('id')->simplePaginate(10))->toJson();

        return Inertia::render('Post/Index', [
            'posts' => json_decode($posts, true),
        ]);
    }

    public function show($id, $slug)
    {
        $post = PostShowResource::make(WinkPost::find($id))->toJson();
        $text = WinkPost::find($id)->body;


        $environment = new Environment();

        $environment->addExtension(new CommonMarkCoreExtension());
        $environment->addExtension(new GithubFlavoredMarkdownExtension());
        $environment->addExtension(new TorchlightExtension());

        $converter = new MarkdownConverter($environment);
        $converted = $converter->convert($text);

        Str::macro('readDuration', function(...$text) {
            $totalWords = str_word_count(implode(" ", $text));
            $minutesToRead = round($totalWords / 200);

            return (int)max(1, $minutesToRead);
        });


        return Inertia::render('Post/Show', [
            'post' => json_decode($post, true),
            'readDuration' => Str::readDuration($text). ' min read',
            'content' => $converted->getContent(),
        ]);
    }

    public function create()
    {
        return inertia('Post/Create');
    }

}
