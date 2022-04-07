<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('index');
});

Route::get('/ru', function () {
    return view('ru');
});

Route::get('/ru/index', function () {
    return view('ru');
});

Route::get('/ru/about_us', function () {
    return view('ruabout_us');
});

Route::get('/ru/services', function () {
    return view('ruservices');
});

Route::get('/ru/news', function () {
    return view('runews');
});

Route::get('/ru/contact', function () {
    return view('rucontact');
});




Route::get('/about_us', function(){
  return view('about_us');
});

Route::get('/services', function(){
  return view('services');
});

Route::get('/news', function () {
  return view('news');
});

Route::get('/contact', function () {
  return view('contact');
});

Route::view('/contact', 'contact')->name('contact');
Route::post('/send',[ContactController::class, 'send'])->name('send.email');

Route::view('/ru/contact', 'rucontact')->name('rucontact');
Route::post('/send',[ContactController::class, 'send'])->name('send.email');



Route::get('/news/Türkmenistanyň Prezidenti Pakistan Yslam', function () {
  return view('Türkmenistanyň Prezidenti Pakistan Yslam');
});

Route::get('/news/Döwlet Baştutanymyz nobatdaky ýaşaýyş jaý toplumynyň açylyşyna', function () {
  return view('Döwlet Baştutanymyz nobatdaky ýaşaýyş jaý toplumynyň açylyşyna');
});


Route::get('/runews/Türkmenistanyň Prezidenti Pakistan Yslam', function () {
  return view('ru1');
});

Route::get('/runews/Döwlet Baştutanymyz nobatdaky ýaşaýyş jaý toplumynyň açylyşyna', function () {
  return view('ru2');
});
