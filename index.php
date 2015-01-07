<?php
	class Food {
		public $firstName = “default name”;
		public $lastName = “default last name”;
		public $gender = “male”;
		public $price = 0;
		function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
		}
}
	$Food = new Food();
	$Food1­>firstName = “Pizza”;
	$Food1­>lastName = “Shake”;
	print “The food’s name is {$Food1­>getName()}.”;

	class Dolphin {
		public $firstName = “default name”;
		public $lastName = “default last name”;
		public $gender = “male”;
		public $price = 0;
		function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
		}
}
	$Dolphin = new Dolphin();
	$Dolphin1­>firstName = “Alex”;
	$Dolphin1­>lastName = “Garcia”;
	print “The dolphin’s name is {$Dolphin1­>getName()}.”;

	class School {
		public $firstName = “default name”;
		public $lastName = “default last name”;
		public $gender = “male”;
		public $price = 0;
		function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
		}
}
	$School = new School();
	$School1­>firstName = “Sierra”;
	$School1­>lastName = “Madre”;
	print “The school’s name is {$School1­>getName()}.”;

	

	
	