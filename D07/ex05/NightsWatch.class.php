<?php

	class 	NightsWatch {

		private $_soldiers;

		public function 	__construct() {
			$this->_soldiers = array();
		}

		public function 	recruit($soldier) {

			if (method_exists(get_class($soldier), "fight"))
				$this->_soldiers[] = $soldier;
		}

		public function 	fight() {
			foreach ($this->_soldiers as $honor)
				print($honor->fight());
		}
	}

?>