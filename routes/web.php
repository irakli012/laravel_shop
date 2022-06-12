<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\GuitarsController;





Route::get('/', [Homecontroller::class, 'index'])->name('home.index');
route::get('/about/about', [Homecontroller::class, 'about'])->name('home.about');
route::get('/contact', [Homecontroller::class, 'contact'])->name('home.contact');

route::resource('guitars', GuitarsController::class);

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
