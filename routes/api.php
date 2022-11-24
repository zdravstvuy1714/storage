<?php

use App\Http\Controllers\File\DeleteFile;
use App\Http\Controllers\File\UploadAvatarFile;
use App\Http\Controllers\File\UploadDocumentFile;
use App\Http\Controllers\File\UploadImageFile;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Uploads.
Route::group(['prefix' => 'uploads'], function () {
    Route::post('images', UploadImageFile::class);
    Route::post('documents', UploadDocumentFile::class);
    Route::post('avatars', UploadAvatarFile::class);

    Route::delete('{upload}', DeleteFile::class);
});
