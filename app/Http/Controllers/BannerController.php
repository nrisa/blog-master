<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('banner', compact('banners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'source' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'deskripsi' => 'nullable|string',
        ]);

        $sourcePath = $request->file('source')->store('banners', 'public');

        Banner::create([
            'source' => $sourcePath,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('banner')->with('success', 'Banner berhasil diposting.');
    }

    public function destroy(Banner $banner)
    {
        if (Storage::exists('public/' . $banner->source)) {
            Storage::delete('public/' . $banner->source);
        }

        $banner->delete();
        return redirect()->route('banner')->with('success', 'Banner berhasil dihapus.');
    }
}
