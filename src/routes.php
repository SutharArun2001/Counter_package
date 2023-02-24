<?php
use Toastr\Main\ToastrController;

Route::get('calculator',function(){
    echo "hello from packages";
});

Route::get('counter', [ToastrController::class,'counterHome'])->name('counterHome');
Route::get('counter/{num?}', [ToastrController::class,'counter'])->name('counter');
Route::get('add/{num1}/{num2}', [ToastrController::class,'add'])->name('add');
Route::get('substract/{num1}/{num2}', [ToastrController::class,'substract'])->name('substact');

?>