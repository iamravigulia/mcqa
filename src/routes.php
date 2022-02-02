<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package! Mcqa';
// });

// Route::get('picmatch/test', 'EdgeWizz\Picmatch\Controllers\PicmatchController@test')->name('test');

Route::post('fmt/mcqa/store', 'EdgeWizz\Mcqa\Controllers\McqaController@store')->name('fmt.mcqa.store');

Route::post('fmt/mcqa/csv', 'EdgeWizz\Mcqa\Controllers\McqaController@csv_upload')->name('fmt.mcqa.csv');

Route::post('fmt/mcqa/update/{id}', 'EdgeWizz\Mcqa\Controllers\McqaController@edit')->name('fmt.mcqa.update');

Route::any('fmt/mcqa/inactive/{id}',  'EdgeWizz\Mcqa\Controllers\McqaController@inactive')->name('fmt.mcqa.inactive');
Route::any('fmt/mcqa/active/{id}',  'EdgeWizz\Mcqa\Controllers\McqaController@active')->name('fmt.mcqa.active');