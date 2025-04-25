<?php

namespace PHPPress\BricksyBits;

class PluginSetup {

	public function init(): void {

		$this->core_modules();
		$this->sub_modules();
		$this->init_hooks();
	}

	public function sub_modules(): void {

		QueryLoopIndex\Setup::init();
	}

	public function core_modules(): void {

	}

	public function init_hooks(): void {

//		add_action( 'plugins_loaded', [ $this, 'load_plugin_text_domain' ], 99 );
	}

	public function load_plugin_text_domain(): void {

//		load_plugin_textdomain( 'bricksy-bits', false, dirname( plugin_basename( __DIR__ ) ) . '/languages/' );

	}
}
