<?php

use App\Http\Controllers\EquipController;
use App\Http\Controllers\FareController;
use App\Http\Controllers\index;
use App\Http\Controllers\PassController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\StationController;



//DASHBOARDS
Route::get('/',[index::class,'show']);


//STATION INVENTORY
Route::get('station', [StationController::class, 'getStations']);
Route::get('station/create', [StationController::class, 'createStationView']);
Route::get('station/update/{id}', [StationController::class, 'updateStationView']);


Route::post('station/create', [StationController::class, 'createStation']);
Route::post('station/update/{id}', [StationController::class, 'updateStation']);

//EQUIPMENTS INVENTORY
Route::get('equipment/{id}',[EquipController::class,'getEquip']);
Route::get('equip/create',[EquipController::class,'createEquip']);
Route::get('eq/update/{id}', [EquipController::class, 'editEquipments']);

Route::post('equip/create',[EquipController::class,'CreateEquipment']);
Route::post('eq/update/{id}/{eq_id}', [EquipController::class, 'update']);


//FARE INVENTORY//
Route::get('fare', [FareController::class, 'GetFare']);
Route::get('Create/fare', [FareController::class, 'CreateFare']);
Route::get('edit/fare/{id}', [FareController::class, 'editFare']);


Route::POST('Create/fare', [FareController::class, 'CreatefarePost']);
Route::POST('edit/fare/{id}', [FareController::class, 'updateFare']);


//QR INVENTORY
Route::get('QrType',[QrController::class,'GetQR']);
Route::get('Create/QrType',[QrController::class,'createQrView']);
Route::get('Edit/QrType/{id}',[QrController::class,'EditQr']);


Route::post('Create/QrType',[QrController::class,'createQr']);
Route::get('Edit/QrType/{id}',[QrController::class,'update']);

//PASS
Route::get('pass',[PassController::class,'GetPass']);



