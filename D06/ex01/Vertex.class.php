<?php
	require_once("Color.class.php");

	class Vertex {
		private 			$_x;
		private 			$_y;
		private 			$_z;
		private 			$_w = 1.0;
		private 			$_color;
		public static 		$verbose = false;

		public static function	doc(){
			$doc = fopen("./Vertex.doc.txt", "r");
			while ($line = fgets($doc))
				print($line);
			fclose($doc);
		}

		public function 		__construct(array $kwargs) {

			if (isset($kwargs["x"]) && isset($kwargs["y"]) && isset($kwargs["z"])) 
			{
				$this->_x = $kwargs["x"];
				$this->_y = $kwargs["y"];
				$this->_z = $kwargs["z"];
			}
			if (isset($kwargs["w"]))
				$this->_w = $kwargs["w"];
			if (isset($kwargs["color"]))
				$this->_color = $kwargs["color"];
			else
				$this->_color = new Color (array("red" => 255, "green" => 255, "blue" => 255));
			if (self::$verbose)
				printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, %s ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
		}

		public function			__destruct()
		{
			if (self::$verbose)
				printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, %s ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
		}

		public function 		__toString() {
			if (self::$verbose)
				return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, %s )", array($this->_x, $this->_y, $this->_z, $this->_w, $this->_color)));
			else
				return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
		}

		public function 		getX() {return $this->_x;}
		public function 		getY() {return $this->_y;}
		public function 		getZ() {return $this->_z;}
		public function 		getW() {return $this->_w;}
		public function 		getColor() {return $this->_color;}

		public function 		setX($val) {$this->_x = $val;}
		public function 		setY($val) {$this->_y = $val;}
		public function 		setZ($val) {$this->_z = $val;}
		public function 		setW($val) {$this->_w = $val;}
		public function 		setColor($val) {$this->_color = $val;}
	}
?>