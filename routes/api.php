<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ContentController;
use App\Http\Controllers\Api\MemberRegistrationController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->name('api.v1.')->group(function () {
    Route::post('/auth/login', [AuthController::class, 'login'])->middleware('throttle:10,1');

    Route::get('/contents', [ContentController::class, 'index']);
    Route::get('/contents/{slug}', [ContentController::class, 'show']);

    Route::middleware('api.token')->group(function () {
        Route::get('/auth/me', [AuthController::class, 'me'])->name('auth.me');
        Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

        Route::middleware('role:admin,superadmin')->group(function () {
            Route::post('/contents', [ContentController::class, 'store']);
            Route::put('/contents/{content}', [ContentController::class, 'update']);
            Route::delete('/contents/{content}', [ContentController::class, 'destroy']);
            Route::get('/member-registrations', [MemberRegistrationController::class, 'index']);
            Route::patch('/member-registrations/{memberRegistration}', [MemberRegistrationController::class, 'update']);
            Route::get('/member-registrations/{memberRegistration}/documents/{document}', [MemberRegistrationController::class, 'document'])
                ->name('member-registrations.documents.show');
        });

        Route::middleware('role:superadmin')->group(function () {
            Route::apiResource('users', UserController::class)->except(['show']);
        });
    });
});
