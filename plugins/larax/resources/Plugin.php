<?php

namespace Larax\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase {
	public function pluginDetails() {
		return [
			'name'        => 'Larax Plugin',
			'description' => 'Larax-Octo custom plugin',
			'author'      => 'Ken Vilar',
			'icon'        => 'icon-leaf'
		];
	}

	public function registerComponents() {
		return parent::registerComponents();
	}
}
