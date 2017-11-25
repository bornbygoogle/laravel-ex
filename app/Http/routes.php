<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('resto', 'RestoController@index');

Route::get('creativ', 'CreativController@index');

Route::get('karting', 'KartingController@index');

Route::get('article/{n}', function($n) {
        return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('{any?}', function ($any = null) {

        $sites = array("resto","creativ");
        
        if(in_array($any, $sites)):
           return 'Je suis la page ' . $any . ' !';
        else:
           return view('perso');
        endif;

})->where('any', '.*');

/*Route::get('/', function () {
    return view('welcome');
});*/
