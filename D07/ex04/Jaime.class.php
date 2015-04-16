<?php

	class 	Jaime extends Lannister {
		public function 	sleepWith($with) {
			if (get_class($with) === "Sansa")
				print("Let's do this.\n");
			else if (get_class($with) === "Cersei")
				print("With pleasure, but only in a tower in Winterfell, then.\n");
			else
				print("Not even if I'm drunk !\n");
		}
	}

?>