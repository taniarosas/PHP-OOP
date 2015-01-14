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

$math = new school("math", "science", "english", "PE", "art", "history", "app");
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
			" and my least favorite cookie is " . $this->gingerbread ;
		}
	}
class chocolatechip extends Cookie{
	function flavor() {
	return $this->raison;
	}
}

$chocolatechip = new Cookie("snickerdoodle", "sugar", "peanutbutter", "chocolatechip", "raison", "gingerbread", "oatmeal");
print "<br>" ."Cookie 1: " . $chocolatechip->getName() . "</br>";
?>