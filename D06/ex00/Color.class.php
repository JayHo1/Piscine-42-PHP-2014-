<?php

	class Color {

		public 			$red;
		public 			$green;
		public 			$blue;
		public static 	$verbose = false;

		public static function 		doc() {
			$doc = fopen("./Color.doc.txt", "r");
			while ($line = fgets($doc))
				print($line);
			fclose($doc);
		}

		public function __construct(array $kwargs) {

			if (isset($kwargs["red"]) && isset($kwargs["green"]) && isset($kwargs["blue"]))
			{
				$this->red = intval($kwargs["red"]);
				$this->green = intval($kwargs["green"]);
				$this->blue = intval($kwargs["blue"]);	
			}
			else if (isset($kwargs["rgb"]))
			{
				$rgb = intval($kwargs["rgb"]);
				$this->red = $rgb / 65281 % 256;
				$this->green = $rgb / 256 % 256;
				$this->blue = $rgb % 256;
			}
			if (self::$verbose)
				printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
		} 	

		public function __destruct() {
			if (self::$verbose)
				printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
		}

		public function add($to_add) {
			$new_red = $this->red + $to_add->red;
			$new_green = $this->green + $to_add->green;
			$new_blue = $this->blue + $to_add->blue;
			$new = new Color(array("red" => $new_red, "green" => $new_green, "blue" => $new_blue));
			return ($new);
		}

		public function sub($to_sub) {
			$new_red = $this->red - $to_sub->red;
			$new_green = $this->green - $to_sub->green;
			$new_blue = $this->blue - $to_sub->blue;
			$new = new Color(array("red" => $new_red, "green" => $new_green, "blue" => $new_blue));
			return ($new);
		}

		public function mult($to_fact) {
			$new_red = $this->red * $to_fact;
			$new_green = $this->green * $to_fact;
			$new_blue = $this->blue * $to_fact;
			$new = new Color(array("red" => $new_red, "green" => $new_green, "blue" => $new_blue));
			return ($new);
		}
		public function __toString() {
			return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
		}
	}
?>