<?php

use App\Models\Video;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function showForm()
    {
        return view('video.upload');
    }

    public function uploadVideo(Request $request)
    {
        $request->validate([
            'video_url' => 'required|url',
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $video = new Video([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        $video->save();

        $video->addMediaFromUrl($request->input('video_url'))
              ->toMediaCollection('videos');

        return redirect()->back()->with('success', 'Video subido correctamente.');
    }
}
