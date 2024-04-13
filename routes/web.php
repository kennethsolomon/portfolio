<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Resources\WinkPostResource;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use League\CommonMark\MarkdownConverter;
use Wink\WinkPost;
use Torchlight\Commonmark\V2\TorchlightExtension;


use Torchlight\Block;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});
//
//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';

//Route::get('/', function (Block $block) {
////    $html = WinkPost::first()->body;
////    $environment = new Environment();
////
////    $environment->addExtension(new CommonMarkCoreExtension());
////    $environment->addExtension(new GithubFlavoredMarkdownExtension());
////    $environment->addExtension(new TorchlightExtension());
////
////    $converter = new MarkdownConverter($environment);
////    $converted = $converter->convert($html);
//
//    return view('portfolio');
//});

Route::get('/', PortfolioController::class)->name('home');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}/{slug}', [PostController::class, 'show'])->name('posts.show');
