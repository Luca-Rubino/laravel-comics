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
        ["id" => "1",
        "title" => "characters",
        "active" => "false",
        "link" => "#"],
    
        ["id" => "2",
        "title" => "comics",
        "active" => "true",
        "link" => "#"],
    
        ["id" => "3",
        "title" => "movies",
        "active" => "false",
        "link" => "#"],
    
        ["id" => "4",
        "title" => "tv",
        "active" => "false",
        "link" => "#"],
    
        ["id" => "5",
        "title" => "games",
        "active" => "false",
        "link" => "#"],
    
        ["id" => "6",
        "title" => "collectibles",
        "active" => "false",
        "link" => "#"],
    
        ["id" => "7",
        "title" => "videos",
        "active" => "false",
        "link" => "#"],
    
        ["id" => "8",
        "title" => "fan",
        "active" => "false",
        "link" => "#"],
    
        ["id" => "9",
        "title" => "news",
        "active" => "false",
        "link" => "#"],
    
        ["id" => "10",
        "title" => "shop",
        "active" => "false",
        "link" => "#"],
    ];

    $comics = [
        ["immagine" => "../../src/assets/img/buy-comics-digital-comics.png",
        "titolo" => "digital comics"],
        ["immagine" => "../../src/assets/img/buy-comics-merchandise.png",
        "titolo" => "merchandise"],
        ["immagine" => "../../src/assets/img/buy-comics-subscriptions.png",
        "titolo" => "subscription"],
        ["immagine" => ".../../src/assets/img/buy-comics-shop-locator.png",
        "titolo" => "comics shop locator"],
        ["immagine" => "../../src/assets/buy-dc-power-visa.svg",
        "titolo" => "dc power visa"],
    ];

    $dcComicsLinks = [
        [
            'id' => '1',
            'title' => "Characters",
            'link' => "#"
        ],

        [
            'id' => '2',
            'title' => "Comics",
            'link' => "#"
        ],

        [
            'id' => '3',
            'title' => "Movies",
            'link' => "#"
        ],

        [
            'id' => '4',
            'title' => "TV",
            'link' => "#"
        ],

        [
            'id' => '5', 
            'title' => 'Games', 
            'link' => '#'
        ],

        [
            'id' => '6', 
            'title' => "Videos", 
            'link' => "#"
        ],

        [
            'id' => '7',
            'title' => "News",
            'link' => "#"
        ]
    ];

    $shops = [
        ["id" => "1", "title" => "Shop DC", "link" => "#"],
        
        ["id" => "2", "title" => "Shop DC Collectibles", "link" => "#"],
    ];

    $dcs = [
        ["id" => "1", "title" => "Term Of Use", "link" => "#"],

        ["id" => "2", "title" => "Privacy Policy (New)", "link" => "#"],

        ["id" => "3", "title" => "Ad Choices", "link" => "#"],

        ["id" => "4", "title" => "Advertising", "link" => "#"],

        ["id" => "5", "title" => "Jobs", "link" => "#"],

        ["id" => "6", "title" => "Subscription", "link" => "#"],

        ["id" => "7", "title" => "Tallene Workshop", "link" => "#"],

        ["id" => "8", "title" => "CPSC Certificates", "link" => "#"],

        ["id" => "9", "title" => "Ratings", "link" => "#"],

        ["id" => "10", "title" => "Shop Help", "link" => "#"],

        ["id" => "11", "title" => "Contact Us", "link" => "#"]
    ];

    $sites = [
        ["id" => 1, "title" => "DC",  "link" => "#"],

        ["id" => 2, "title" => "MAD Magazine",  "link" => "#"],

        ["id" => 3, "title" => "DC Kids",  "link" => "#"],

        ["id" => 4, "title" => "DC Universe",  "link" => "#"],

        ["id" => 5, "title" => "DC Power Visa",  "link" => "#"]
    ];

    $socials = [
        ["id" => "1", "social" => 'facebook', "url" => "http://[::1]:4000/resources/img/footer-facebook.png"],

        ["id" => "2", "social" => 'twitter', "url" => 'http://[::1]:4000/resources/img/footer-twitter.png'],

        ["id" => "3", "social" => 'youtube', "url" => 'http://[::1]:4000/resources/img/footer-youtube.png'],

        ["id" => "4", "social" => 'pinterest', "url" => 'http://[::1]:4000/resources/img/footer-pinterest.png'],

        ["id" => "5", "social" => 'periscope', "url" => 'http://[::1]:4000/resources/img/footer-periscope.png']
    ];

    return view('index', $comics, compact("headerLinks", "dcComicsLinks", "shops", "dcs", "sites", "socials"));
})->name('home');
