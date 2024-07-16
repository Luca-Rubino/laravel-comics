<?php

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

Route::get('/', function () {
    $headerLinks = [
        "id" => "1",
        "title" => "characters",
        "active" => "false",
        "link" => "#" ,
    
        "id" => "2",
        "title" => "comics",
        "active" => "true",
        "link" => "#" ,
    
        "id" => "3",
        "title" => "movies",
        "active" => "false",
        "link" => "#" ,
    
        "id" => "4",
        "title" => "tv",
        "active" => "false",
        "link" => "#",
    
        "id" => "5",
        "title" => "games",
        "active" => "false",
        "link" => "#",
    
        "id" => "6",
        "title" => "collectibles",
        "active" => "false",
        "link" => "#",
    
        "id" => "7",
        "title" => "videos",
        "active" => "false",
        "link" => "#",
    
        "id" => "8",
        "title" => "fan",
        "active" => "false",
        "link" => "#",
    
        "id" => "9",
        "title" => "news",
        "active" => "false",
        "link" => "#",
    
        "id" => "10",
        "title" => "shop",
        "active" => "false",
        "link" => "#",
    ];

    $comics = [
        "immagine" => "../../src/assets/img/buy-comics-digital-comics.png",
        "titolo" => "digital comics",
        "immagine" => "../../src/assets/img/buy-comics-merchandise.png",
        "titolo" => "merchandise",
        "immagine" => "../../src/assets/img/buy-comics-subscriptions.png",
        "titolo" => "subscription",
        "immagine" => ".../../src/assets/img/buy-comics-shop-locator.png",
        "titolo" => "comics shop locator",
        "immagine" => "../../src/assets/buy-dc-power-visa.svg",
        "titolo" => "dc power visa",
    ];
    return view('index', $comics, $headerLinks);
})->name('home');
