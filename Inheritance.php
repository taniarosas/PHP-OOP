<?php 
	class School {
		public $math;
		public $science;
		public $english;
		public $PE;
		public $art;
		public $history;
		public $app;

		function __construct($math, $science, $english, $PE, $art, $history, $app) {
			$this->math = $math;
			$this->science = $science;
			$this->english = $english;
			$this->PE = $PE;
			$this->art = $art;
			$this->history = $history;
			$this->app = $app;
		}
		function getName(){
			return "My favorite subject is " . $this->math .
			" and my least favorite subject is " . $this->english;
		}
	}
class math extends School{
	function subject() {
	return $this->english;
	}
}

$math = new School("math", "science", "english", "PE", "art", "history", "app");
print "School 1: " . $math->getName();
?>



<?php 
	class Cookie {
		public $gingerbread;
		public $chocolatechip;
		public $sugar;
		public $snickerdoodle;
		public $raison;
		public $oatmeal;
		public $peanutbutter;

		function __construct($gingerbread, $chocolatechip, $sugar, $snickerdoodle, $raison, $oatmeal, $peanutbutter) {
			$this->gingerbread = $gingerbread;
			$this->chocolatechip = $chocolatechip;
			$this->sugar = $sugar;
			$this->snickerdoodle = $snickerdoodle;
			$this->raison = $raison;
			$this->oatmeal = $oatmeal;
			$this->peanutbutter = $peanutbutter;
		}
		function getName(){
			return  "My favorite cookie is " . $this->chocolatechip .
			" and my least favorite cookie is " . $this->raison ;
		}
	}
class chocolatechip extends Cookie{
	function flavor() {
	return $this->raison;
	}
}

$chocolatechip = new Cookie("gingerbread", "chocolatechip", "sugar", "snickerdoodle", "raison", "oatmeal", "peanutbutter");
print "<br>" ."Cookie 1: " . $chocolatechip->getName() . "</br>";
?>


<?php 
	class Sports {
		public $volleyball;
		public $soccer;
		public $basketball;
		public $tennis;
		public $football;
		public $baseball;
		public $softball;

		function __construct($volleyball, $soccer, $basketball, $tennis, $football, $baseball, $softball) {
			$this->volleyball = $volleyball;
			$this->soccer = $soccer;
			$this->basketball = $basketball;
			$this->tennis = $tennis;
			$this->football = $football;
			$this->baseball = $baseball;
			$this->softball = $softball;
		}
		function getName(){
			return "My favorite sport is " . $this->volleyball .
			" and my least favorite sport is " . $this->soccer;
		}
	}
class volleyball extends Sports{
	function team() {
	return $this->soccer;
	}
}

$volleyball = new Sports("volleyball", "soccer", "basketball", "tennis", "football", "baseball", "softball");
print "Sports 1: " . $volleyball->getName();
?>
