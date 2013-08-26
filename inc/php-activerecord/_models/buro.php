<?php

class Buro extends ActiveRecord\Model {

	static $belongs_to = array(
		array('user', 'readonly' => false)
	);

}

?>