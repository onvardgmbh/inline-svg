<?php
namespace Onvardgmbh;

/**
 * Inline SVG
 */
class InlineSVG {

	public $svg;

	public static function file( $file ) {
		$object = new InlineSVG();
		$object->svg = file_get_contents($file);
		return $object;
	}

	public static function fontAwesome( $name ) {
		$object = new InlineSVG();
		$object->svg = file_get_contents(__DIR__ .'/fontawesome/' . $name . '.svg');
		return $object;
	}

	public static function ionicons( $name ) {
		$object = new InlineSVG();
		$object->svg = file_get_contents(__DIR__ .'/vendor/driftyco/ionicons/src/' . $name . '.svg');
		return $object;
	}

	public function width($width) {
		$this->svg = preg_replace('/(width=")\d*(")/', '${1}' . $width . '${2}', $this->svg);
		return $this;
	}

	public function height($heigth) {
		$this->svg = preg_replace('/(height=")\d*(")/', '${1}' . $heigth . '${2}', $this->svg);
		return $this;
	}

	public function get() {
		return $this->svg;
	}
}
