<?php

class WPD_Tascderm_Test extends WP_UnitTestCase {

	function test_sample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	function test_class_exists() {
		$this->assertTrue( class_exists( 'WPD_Tascderm') );
	}

	function test_class_access() {
		$this->assertTrue( wp_dermatology()->tascderm instanceof WPD_Tascderm );
	}
}
