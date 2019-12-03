<?php
use Pecee\SimpleRouter\SimpleRouter as Route;
use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;

Route::setDefaultNamespace('App\Controllers');


Route::group(['prefix' => '/category'], function () {
    Route::get('/list', 'CategoryController@listCategories');
});

// Routes not found
Route::get('/not-found', function () {
    require_once BASE_DIR . '/app/Views/404.php';
});

// Handle router error
Route::error(function(Request $request, \Exception $exception) {
    if ($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
        response()->redirect('/not-found');
    }
});

// Start the routing
Route::start();