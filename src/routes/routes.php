<?php


Route::get('/dev-template', 'Vilbur\DevTemplate\Controllers\DevTemplateController@testView');

/* API */
Route::get('/db/dev-template',	'Vilbur\DevTemplate\Controllers\DevTemplateController@getAllDevTemplates');