<?php namespace Vilbur\DevTemplate\Controllers;

use App\Http\Controllers\Controller;
use Vilbur\DevTemplate\Models\DevTemplate;

class DevTemplateController extends Controller {

    public function testView() {
		return \View::make('DevTemplate::view');
   }

	/**
	*/
	public function getAllDevTemplates()
	{
		return DevTemplate::all()->toArray();
	}
}