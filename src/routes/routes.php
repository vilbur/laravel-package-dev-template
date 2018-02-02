<?php


Route::get('/dev-template', 'Vilbur\DevTemplate\Controllers\DevTemplateController@testView');

/* API */
Route::get('/api/dev-template',	'Vilbur\DevTemplate\Controllers\DevTemplateController@getAllDevTemplates');