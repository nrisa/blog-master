<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::get('/detail/{id}', function ($id) {
    $categories = \App\Models\Category::all();
    $content = \App\Models\Content::with('category')->findOrFail($id);    
    $recomends = \App\Models\Content::with('category')->latest()->take(4)->get();
    $updates = \App\Models\Content::with('category')
    ->where('status', 1)
    ->latest()
    ->take(6)
    ->get();
    
    view()->share('categories', $categories);

    return view('detail', compact('content', 'recomends', 'updates'));
});       

Route::get('/admin', function () {
    return view('layouts.login');
});

Route::get('/admin/dashboard', function () {
    return view('dashboard');
});

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

