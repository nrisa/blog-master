<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos', compact('videos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'source' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        Video::create($request->all());

        return redirect()->route('video')->with('success', 'Video berhasil diposting.');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('video')->with('success', 'Video berhasil dihapus.');
    }
}
