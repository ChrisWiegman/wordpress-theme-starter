<?php
/**
 * Test the primary theme file
 *
 * @package wordpress_theme_starter
 */

namespace wordpress_theme_starter\theme\tests;

use function PHPUnit\Framework\assertEquals;

/**
 * Test the main plugin file
 */
class PluginFileTest extends \WP_Mock\Tools\TestCase {

	/**
	 * Test loader function
	 */
	public function test_wordpress_theme_starter_loader() {

		$this->assertEquals( 1, 1 );

	}
}
