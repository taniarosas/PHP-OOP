<?php
	//Lecture 1

	//Example 1
	class Food {
		public $firstName = "default name";
		public $lastName = "default last name";
		public $gender = "male";
		public $price = 0;
		function getName() {
		return "{$this­>firstName}" .
		"{$this­>lastName}";
		}
}
	$Food = new Food();
	$Food1­>firstName = "Pizza";
	$Food1­>lastName = "Shake";
	print "The food’s name is {$Food1­>getName()}.";


	//Example 2 
	class Dolphin {
		public $firstName = "default name";
		public $lastName = "default last name";
		public $gender = "male";
		public $price = 0;
		function getName() {
		return "{$this­>firstName}" .
		"{$this­>lastName}";
		}
}
	$Dolphin = new Dolphin();
	$Dolphin1­>firstName = "Alex";
	$Dolphin1­>lastName = "Garcia";
	print "The dolphin’s name is {$Dolphin1­>getName()}.";

	//Example 3
	class School {
		public $firstName = "default name";
		public $lastName = "default last name";
		public $gender = "male";
		public $price = 0;
		function getName() {
		return "{$this­>firstName}" .
		"{$this­>lastName}";
		}
}
	$School = new School();
	$School1­>firstName = "Sierra";
	$School1­>lastName = "Madre";
	print "The school’s name is {$School1­>getName()}.";

	
	//Lecture 2

	//Example 1 
	class Cat {
	public $firstName;
	public $lastName;
	public $breed;

		function __construct($title, $firstName, $lastName, $breed) {
		$this­>firstName = $firstName;
		$this­>lastName = $lastName;
		$this­>breed = $breed;
		}
		function getName() {
		return "{$this­>firstName}" .
		"{$this­>lastName}";
		}
}
	$cat1 = new Cat(“Kitty”, “Kat”, “Cat”);
	print “Cat 1: {$cat1­>getName()}\n;

	//Example 2
	class hotdog {
	public $firstName;
	public $lastName;
	public $sauce;

		function __construct($title, $firstName, $lastName, $sauce) {
		$this­>firstName = $firstName;
		$this­>lastName = $lastName;
		$this­>sauce = $sauce;
		}
		function getName() {
		return "{$this­>firstName}" .
		"{$this­>lastName}";
		}
}
	$hotdog1 = new hotdog(“ketchup”, “mustard”, “bacon”);
	print “hotdog 1: {$hotdog1­>getName()}\n;

	//Example 3 
	class Milkshake {
	public $firstName;
	public $lastName;
	public $flavor;

		function __construct($title, $firstName, $lastName, $flavor) {
		$this­>firstName = $firstName;
		$this­>lastName = $lastName;
		$this­>flavor = $flavor;
		}
		function getName() {
		return "{$this­>firstName}" .
		"{$this­>lastName}";
		}
}
	$Milkshake1 = new Milkshake(“chocolate”, “strawberry”, “vanilla”);
	print “Milkshake 1: {$Milkshake1­>getName()}\n;
	?>