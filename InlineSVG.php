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
		$object->svg = file_get_contents(__DIR__ .'/../../fortawesome/font-awesome/svgs/solid/' . $name . '.svg');
		return $object;
	}

	public static function ionicons( $name ) {
		$object = new InlineSVG();
		$object->svg = file_get_contents(__DIR__ .'/../../driftyco/ionicons/src/' . $name . '.svg');
		return $object;
	}

	public static function boxicons( $name ) {
		$object = new InlineSVG();
		$object->svg = file_get_contents(__DIR__ .'/../../atisawd/boxicons/static/img/svg/' . $name . '.svg');
		return $object;
	}

	public function width($width) {
		$this->svg = preg_replace('/(width=")\d*(p?x?")/', '${1}' . $width . '${2}', $this->svg, 1);
		return $this;
	}

	public function height($heigth) {
		$this->svg = preg_replace('/(height=")\d*(p?x?")/', '${1}' . $heigth . '${2}', $this->svg, 1);
		return $this;
	}

    public function strokeColor($color) {
        $this->svg = preg_replace('/(stroke:)#?\w*/', '${1}' . $color, $this->svg, -1);
        return $this;
    }

    public static function getOptionsFontAwesome() {

	    return collect(scandir(__DIR__ .'/../../fortawesome/font-awesome/svgs/solid'))
		    ->filter(function($item) {
			    return !collect(['.', '..'])->contains($item);
		    })
		    ->mapWithKeys(function($item) {
		    	return [ str_replace('.svg', '', $item) => str_replace('.svg', '', $item)];
		    })
		    ->prepend('')
		    ->toArray();
    }

	public static function getOptionsIonicons() {

		return collect(scandir(__DIR__ .'/../../driftyco/ionicons/src'))
			->filter(function($item) {
				return !collect(['.', '..'])->contains($item);
			})
			->mapWithKeys(function($item) {
				return [ str_replace('.svg', '', $item) => str_replace('.svg', '', $item)];
			})
			->prepend('')
			->toArray();
	}

	public static function getOptionsBoxicons() {

		return collect(scandir(__DIR__ .'/../../atisawd/boxicons/static/img/svg'))
			->filter(function($item) {
				return !collect(['.', '..'])->contains($item);
			})
			->mapWithKeys(function($item) {
				return [ str_replace('.svg', '', $item) => str_replace('.svg', '', $item)];
			})
			->prepend('')
			->toArray();
	}

	public function get() {
		return $this->svg;
	}
}
