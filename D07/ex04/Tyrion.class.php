<?php

	class Tyrion extends Lannister
	{
		public function 	sleepWith($with) {
			if (get_class($with) === "Sansa")
				print("Let's do this.\n");
			else
				print("Not even if I'm drunk !\n");
		}
	}

?>