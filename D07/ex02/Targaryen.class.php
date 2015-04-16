<?php

	class 	Targaryen {
		public function getBurned() {
			if ($this->resistsFire())
				return ("emerges naked but unhamed");
			return ("burns alive");
		}

		public function resistsFire() {
			return false;
		}
	} 
	
?>