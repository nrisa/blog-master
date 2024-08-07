<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery', compact('galleries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'source' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'deskripsi' => 'nullable|string',
        ]);

        $sourcePath = $request->file('source')->store('galleries', 'public');

        Gallery::create([
            'source' => $sourcePath,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('gallery')->with('success', 'Gambar berhasil diposting.');
    }

    public function destroy(Gallery $gallery)
    {
        if (Storage::exists('public/' . $gallery->source)) {
            Storage::delete('public/' . $gallery->source);
        }

        $gallery->delete();
        return redirect()->route('gallery')->with('success', 'Gambar berhasil dihapus.');
    }
}
