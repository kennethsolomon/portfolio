<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Http\Resources\VideoResource;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        return VideoResource::collection(Video::latest()->latest('id')->get());
    }

    public function store(VideoRequest $request)
    {
        return new VideoResource(Video::create($request->validated()));
    }

    public function show(Video $video)
    {
        return new VideoResource($video);
    }

    public function update(VideoRequest $request, Video $video)
    {
        $video->update($request->validated());

        return new VideoResource($video);
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return response()->json();
    }
}
