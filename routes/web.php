<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Models\Category;
use App\Models\Content;
use App\Models\Banner;

Route::get('/template', function () {
    $categories = Category::all();
    view()->share('categories', $categories);
    return view('template');
});

Route::get('/blog/{cate}', function ($cate) {
    // Ambil semua kategori untuk navigasi
    $categories = Category::all();

    // Ambil kategori yang sesuai dengan 'cate'
    $selectedCategory = Category::where('categori', $cate)->firstOrFail();

    // Ambil konten yang sesuai dengan kategori
    $contents = Content::where('category_id', $selectedCategory->id)->get();

    // Ambil konten rekomendasi terbaru
    $recomends = Content::with('category')->latest()->take(4)->get();

    // Ambil konten terpopuler terbaru
    $updates = Content::with('category')
        ->where('status', 1)
        ->latest()
        ->take(6)
        ->get();

    // Ambil semua banner
    $banners = Banner::all();
    
    // Share kategori dengan semua view
    view()->share('categories', $categories);

    // Kembalikan view 'blog' dengan data yang telah diseleksi
    return view('blog', compact('contents', 'banners', 'updates', 'recomends'));
});

Route::resource('employees', EmployeeController::class);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('users', UserController::class);
Route::resource('videos', VideoController::class);

Route::resource('galleries', GalleryController::class);
Route::resource('banners', BannerController::class);

Route::resource('contents', ContentController::class);
Route::resource('categories', CategoryController::class);

Route::get('/', function () {
    $categories = \App\Models\Category::all();
    $contents = \App\Models\Content::with('category')->latest()->take(6)->get(); // mengambil 6 blog terbaru
    $banners = \App\Models\Banner::all();
    $galleries = \App\Models\Gallery::all();
    $videos = \App\Models\Video::all();
    
    view()->share('categories', $categories);

    return view('index', compact('categories', 'contents', 'banners', 'galleries', 'videos'));
});

Route::get('/blog', function () {
    $categories = \App\Models\Category::all();
    $recomends = \App\Models\Content::with('category')->latest()->take(4)->get();
    $contents = \App\Models\Content::with('category')->get();
    $updates = \App\Models\Content::with('category')
    ->where('status', 1)
    ->latest()
    ->take(6)
    ->get();
    $banners = \App\Models\Banner::all();
    
    view()->share('categories', $categories);

    return view('blog', compact('categories', 'contents', 'banners', 'updates', 'recomends'));
});

Route::get('/detail/{slug}', function ($slug) {
    $categories = \App\Models\Category::all();
    $content = \App\Models\Content::with('category')->where('slug', $slug)->firstOrFail();
    $recomends = \App\Models\Content::with('category')->latest()->take(4)->get();
    $updates = \App\Models\Content::with('category')
    ->where('status', 1)
    ->latest()
    ->take(6)
    ->get();
    
    view()->share('categories', $categories);

    return view('detail', compact('content', 'recomends', 'updates'));
});       

Route::get('/admin/cms/detail/{id}', function ($id) {
    $content = \App\Models\Content::with('category')->findOrFail($id); 
    return view('cms-detail', compact('content'));
});       

Route::get('/admin/cms/edit/{id}', function ($id) {
    $categories = \App\Models\Category::all();
    $content = \App\Models\Content::with('category')->findOrFail($id); 
    return view('cms-edit', compact('content', 'categories'));
});       

Route::get('/admin', function () {
    return view('layouts.login');
});

Route::get('/admin/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin/emp/add', function () {
    $employees = \App\Models\Employee::all();
    return view('emp-add', compact('employees'));
})->name('emp-add');

Route::get('/admin/emp/edit', function () {
    $employees = \App\Models\Employee::all();
    return view('emp-edit', compact('employees'));
})->name('emp-edit');

Route::get('/admin/emp-show', function () {
    $employees = \App\Models\Employee::all();
    return view('emp-show', compact('employees'));
})->name('emp-show');

Route::get('/admin/emp', function () {
    $employees = \App\Models\Employee::all();
    return view('emp', compact('employees'));
})->name('emp');

Route::get('/pegawai', function () {
    $employees = \App\Models\Employee::all();
    $categories = \App\Models\Category::all();
    
    view()->share('categories', $categories);
    return view('pegawai', compact('employees'));
})->name('pegawai');

Route::get('/admin/cms', function () {
    $categories = \App\Models\Category::all();
    return view('cms', compact('categories'));
})->name('cms');

Route::get('/admin/cms-list', function () {
    $contents = \App\Models\Content::with('category')->get();
    $categories = \App\Models\Category::all();
    return view('cms-list', compact('contents', 'categories'));
})->name('cms-list');

Route::get('/admin/category', function () {
    $categories = \App\Models\Category::all();
    return view('category', compact('categories'));
})->name('category');

Route::get('/admin/banner', function () {
    $banners = \App\Models\Banner::all();
    return view('banner', compact('banners'));
})->name('banner');

Route::get('/admin/gallery', function () {
    $galleries = \App\Models\Gallery::all();
    return view('gallery', compact('galleries'));
})->name('gallery');

Route::get('/admin/video', function () {
    $videos = \App\Models\Video::all();
    return view('video', compact('videos'));
})->name('video');

Route::get('/admin/user', function () {
    $users = \App\Models\User::all();
    return view('user', compact('users'));
})->name('user');

