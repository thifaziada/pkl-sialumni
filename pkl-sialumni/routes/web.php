<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// guest
Route::get('/', function () {
    return view('welcome');
});


/**
 * socialite auth
 */
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

// alumni
Route::get('/dashboard', function () {
    return view('alumni.dashboard');
})->middleware(['auth', 'verified'])->name('alumni.dashboard');

Route::middleware('auth')->group(function () {
    //complete profile
    Route::get('/completeProfile', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('/completeProfile', [ProfileController::class, 'storeProfile'])->name('profile.storeProfile');

    //edit profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/alumni/{id}/edit', [ProfileController::class, 'edit'])->name('alumni.edit');
    Route::put('/alumni/{id}', [ProfileController::class, 'update'])->name('alumni.update');

    Route::get('/alumni', [AlumniController::class, 'list_alumni'])->name('alumni.list');
    Route::get('/alumni/search', [AlumniController::class, 'search'])->name('alumni.search');
    Route::get('/alumni/{id}', [AlumniController::class, 'viewAlumniDetails'])->name('alumni.view');

    Route::get('/stories', [StoryController::class, 'index'])->name('alumni.stories');
    Route::post('/stories', [StoryController::class, 'createStories'])->name('stories.create');
    Route::delete('/stories/delete/{story_id}', [StoryController::class, 'destroy'])->name('story.delete');

    Route::get('/stories/{story_id}', [StoryController::class, 'showComments'])->name('story.showComments');
    Route::post('/stories/{story_id}/comments', [StoryController::class, 'storeComment'])->name('comments.store');
    Route::delete('/stories/{story_id}/comments/{comment_id}', [StoryController::class, 'deleteComment'])->name('comment.delete');

});

// Admin
Route::get('/admin', [AdminController::class, 'showLoginView'])->name('login.admin');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboardadmin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/manajemenakun', [AdminController::class, 'ListAlumni'])->name('list-alumni');
    Route::get('/listpertanyaan', [AdminController::class, 'ListPertanyaan'])->name('admin.list-questions');
    Route::post('/answer-faq/{id}', [AdminController::class, 'answerFaq'])->name('admin.answer.faq');
    Route::get('/approve{id}', [AdminController::class, 'approve'])->name('admin.approve.faq');
    Route::get('/reject{id}', [AdminController::class, 'reject'])->name('admin.reject.faq');
    Route::get('/admin/verify/{id}', [AdminController::class, 'verify'])->name('admin.verify');
});





require __DIR__.'/auth.php';
