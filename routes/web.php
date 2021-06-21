<?php

use Emblaze\Router\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\DashboardController;

Route::get('/home', [SiteController::class, 'index']);
// OR
Route::get('/', 'SiteController@index');
// Route::get('/home', 'SiteController@home');
// Route::get('/home', function() {
//     return "<a href=\"http://localhost:8080/public/admin/dashboard\">Click</a>";
// });


// Route::get('/admin-panel/dashbord', function() {
//     echo "test home";
// });

// Route::get('/admin-panel/users', function() {
//     echo "test home";
// });

// Route::get('/admin-panel/admin', function() {
//     echo "test home";
// });

// Route::get('users/{id}/edit', function() {
//     echo "test";
// });

Route::get('admin/{id}/edit', function() {
    echo "test";
});

Route::prefix('admin', function() {
    Route::middleware('Admin|Owner', function() {
        Route::get('dashboard', [DashboardController::class, 'index']);
        Route::get('users', function() {});
        Route::get('admin', function() {});
    });

    Route::prefix('owner',function() {
        Route::get('dashboard', function() {});
        Route::get('users', function() {});
        Route::get('admin', function() {});
    });
});