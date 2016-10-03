<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('donors/', 'REG\DonorController@showDonors');
$app->get('donors/{lsid}', 'REG\DonorController@showDonors');

//$app->get('dins/{din?}/{flag?}', 'CMP\DINController@showDINs');
$app->get('dins', 'CMP\DINController@showDINs');
$app->get('dins/{din}', 'CMP\DINController@showDINs');
$app->get('dins/{din}/{flag}', 'CMP\DINController@showDINs');

$app->get('vdins', function(){
  $dc = new \App\Http\Controllers\CMP\DINController();
  $dins = $dc->showDINs();
  return view('dins', ['dins'=>$dins]);
})->middleware('auth');
$app->get('vdins/{din}', function($din){
  return view('dins', ['dins'=>(new \App\Http\Controllers\CMP\DINController())->showDINs($din)]);
});
$app->get('vdins/{din}/{flag}', function($din, $flag){
  return view('dins', ['dins'=>(new \App\Http\Controllers\CMP\DINController())->showDINs($din, $flag)]);
});
