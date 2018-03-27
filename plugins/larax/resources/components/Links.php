<?php

namespace Larax\Resources\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Links extends ComponentBase {
	public function componentDetails() {
		return [
			'name' => 'Links',
			'description' => 'Displays resource links',
		];
	}
	public function defineProperties() {
		return [
			'link1' => [
				'title' => 'Link 1',
				'description' => 'Link 1 URL',
				'type' => 'string'
			],
			'link2' => [
				'title' => 'Link 2',
				'description' => 'Link 2 URL',
				'type' => 'string'
			],
			'link3' => [
				'title' => 'Link 3',
				'description' => 'Link 3 URL',
				'type' => 'string'
			],
		];
	}
}
