<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return '<h3>first</h3>';
});
route::get('/about', function () {
    return '<h1> about page</h1>';
});
route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    if (isset($category)) {


        if (isset($item)) {
            return "you are viewing the store for {$category} for {$item}";
        }




        return 'you are viewing the store for ' . strip_tags($category);
    }
    return 'instruments';



    return "this is    $category ";
});

// route::get('/store', function () {
//     $category = request('category');

//     $priceFrom = request('priceFrom');
//     $priceTo = request('priceTo');

//     if (isset($category)) {
//         $category = request('category');

//         if (isset($category)) {
//             return 'you are viewing the store for ' . strip_tags($category);
//         }
//         return 'instruments';
//     } 


//     return "this is    $category . $priceFrom . $priceTo";
// });
