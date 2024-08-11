<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::with('category')->get();
        return view('contents.index', compact('contents'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('contents.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'required',
            'row_status' => 'required',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('images', 'public');
        }

        Content::create([
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'isi' => $request->isi,
            'foto' => $fotoPath,
            'status' => $request->status,
            'row_status' => $request->row_status,
            'created_by' => "admin",
            'hari' => now()->format('l'), // Format hari
            'jam' => now()->format('H:i:s'), // Format jam
        ]);

        return redirect()->route('cms-list')->with('success', 'Konten berhasil dibuat.');
    }

    public function show($id)
    {
        $content = Content::findOrFail($id);
        return view('cms-detail', compact('content'));
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        $categories = Category::all();
        return view('cms-edit', compact('content', 'categories'));
    }

    public function update(Request $request, Content $content)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'required',
            'row_status' => 'required',
        ]);

        $fotoPath = $content->foto;
        if ($request->hasFile('foto')) {
            if ($fotoPath) {
                Storage::delete('public/' . $fotoPath);
            }
            $fotoPath = $request->file('foto')->store('images', 'public');
        }

        $content->update([
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'isi' => $request->isi,
            'foto' => $fotoPath,
            'status' => $request->status,
            'row_status' => $request->row_status,
            'hari' => now()->format('l'), // Format hari
            'jam' => now()->format('H:i:s'), // Format jam
        ]);

        return redirect()->route('cms-list')->with('success', 'Konten berhasil diperbarui.');
    }

    public function destroy(Content $content)
    {
        if ($content->foto) {
            Storage::delete('public/' . $content->foto);
        }

        $content->delete();
        return redirect()->route('cms-list')->with('success', 'Konten berhasil dihapus.');
    }
}
