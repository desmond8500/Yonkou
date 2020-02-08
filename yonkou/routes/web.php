<?php

// Main
Route::get('/', 'LocationController@index')->name('location');

// Location
Route::get('/listeClients', 'LocationController@clients')->name('clients');
Route::get('/recuForm/{id?}', 'LocationController@recuForm')->name('recuForm');
Route::post('/recu', 'LocationController@recu')->name('recu');
Route::get('/recus', 'LocationController@recuff')->name('recus');
Route::get('/contrat', 'LocationController@contrat')->name('contrats');


// ????
Auth::routes();
Route::get('/home', 'HomeController@index');


// Infyom Générator Builder
Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
Route::post('generator_builder/generate-from-file','InfyOmGeneratorBuilderControllersGeneratorBuilderController@generateFromFile')->name('io_generator_builder_generate_from_file');

// Infyom Generated
Route::resource('citations', 'CitationController');
Route::resource('clients', 'ClientController');
