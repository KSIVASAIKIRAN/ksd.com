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

Route::get('/', function () { 
  return view('kehomepage');   
});

Route::get('/bg', function () {  
  return view('welcome');    
});

Auth::routes();   

//////////////////////////////////////////////////////KE PAGES///////////////////////////////////////////////////////////////////////////////

Route::get('/keaboutus', function () {   
  return view('kepages.aboutus');      
});
Route::get('/kelivestreaming', function () {   
  return view('kepages.livestreaming');      
});
Route::get('/keshortvideos', function () {   
  return view('kepages.shortvideos');      
});
Route::get('/keoreybhamardhi', function () {   
  return view('kepages.oreybhamardhi');      
});



Route::get('/kephotogallery', function () {   
  return view('kepages.photogallery');      
});

Route::get('/keutubevideolinks', function () {   
  return view('kepages.utubevideolinks');      
});
Route::get('/kecontactus', function () {   
  return view('kepages.contactus');      
});

Route::get('/kefeedback', function () {   
  return view('kepages.feedback');      
});

Route::get('/kelogin', function () {   
  return view('kepages.login');      
});











