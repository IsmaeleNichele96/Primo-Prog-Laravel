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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contatti', function () {
    $contatti = [
        [
            'name' => 'Ismaele',
            'numero' => 321654
        ],
        [
            'name' => 'Elvis',
            'numero' => 6549874
        ],
        [
            'name' => 'Antonino',
            'numero' => 987654
        ]
    ];
    return view('contatti', ['contatti' => $contatti]);
});

Route::get('/cazzi', function () {
    $lala = [
        [
            'name' => 'lala',
            'element' => 55555
        ],
        [
            'name' => 'lulu',
            'element' => 777777
        ],
        [
            'name' => 'lolo',
            'element' => 12444
        ],
    ];
    return view('cazzi', ['lala' => $lala]);
});
