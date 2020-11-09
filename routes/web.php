<?php

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
use Vinkla\Instagram\Instagram;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    // // panritaoto token = 6571767978.1677ed0.b4c706e35e2b49e3a3b32af8473bb38f
    // $instagrams = new Instagram('6571767978.1677ed0.b4c706e35e2b49e3a3b32af8473bb38f');
    // $instagrams = $instagrams->media();
    // // $instagrams = array_slice($instagrams, 0, 6);
    
    // $instagram_array = [];
    // foreach($instagrams as $instagram)
    // {
    //     if($instagram->type == 'carousel')
    //     {
    //         foreach($instagram->carousel_media as $row)
    //         {
    //             $row->id = $instagram->id;
    //             $row->caption = $instagram->caption;
    //             array_push($instagram_array, $row);
    //         }
    //     }
    //     else
    //     {
    //         array_push($instagram_array, $instagram);
    //     }
    // }
    // $instagram_array = array_slice($instagram_array, 0, 6);
    $instagram_array = [];

    
    // // Gallery
    // // $gallery = \File::allFiles('public/images/gallery');
    $images = [];
    // // foreach($gallery as $image)
    // // {
    // //     $file = pathinfo($image);
    // //     $image = pathinfo($image);
    // //     array_push($images, $image['filename'].'.'.$image['extension']);
    // // }

    return view('index', [
        'instagrams' => array_values(array_filter($instagram_array)),
        'gallery' => array_slice($images, 0, 3),
    ]);
});


/**
 * Admin Page
 */
Route::prefix('admin')->group(function () {
    // Route::get('login', 'AdminController@login');
    // Route::get('login-process', 'AdminController@loginProcess');
    // Route::get('/', function(){
    //     return redirect(url('admin/login'));
    // });
    
    Route::get('dashboard', 'AdminController@index');
    Route::get('customer', 'AdminController@customerPage');
    
    Route::get('users', function(){
        
    });
});
