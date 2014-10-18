<?php
namespace RearEngine\View\Cell;

use Cake\View\Cell;

/**
 * Setting cell
 */
class SettingCell extends Cell {

/**
 * List of valid options that can be passed into this
 * cell's constructor.
 *
 * @var array
 */
	protected $_validCellOptions = [];

/**
 * Default display method.
 *
 * @return void
 */
	public function display($path, $options = []) {
		$this->set(compact('path', 'options'));
	}

}
