	<!--Lecture 4-->
	<!--Example 1 -->
<?php 
	class School {
		public $math;
		public $science;
		public $english;
		public $PE;
		public $art;
		
		function __construct($math, $science, $english, $PE, $art) {
			$this->math = $math;
			$this->science = $science;
			$this->english = $english;
			$this->PE = $PE;
			$this->art = $art;
		}
		function getName(){
			return "My favorite subject is " . $this->math .
			" and my least favorite subject is " . $this->english;
		}
	}

class math extends School{
	function __construct($math, $science, $english, $PE, $art, $history){
		parent::__construct($math, $science, $english, $PE, $art);
		$this->history = $history;
		}
		function greet(){
			return $this->history;
		}
	}

class science extends School{
	function __construct($math, $science, $english, $PE, $art, $app){
		parent::__construct($math, $science, $english, $PE, $art );
		$this->app = $app;
		}
		function greet(){
			return $this->app;
		}
	}

$math = new School("math", "science", "english", "PE", "art", "history", "app");
print "School 1: " . $math->getName();
?>

	<!--Example 2 -->

<?php 
	class Cookie {
		public $gingerbread;
		public $chocolatechip;
		public $sugar;
		public $snickerdoodle;
		public $peanutbutter;

		function __construct($gingerbread, $chocolatechip, $sugar, $snickerdoodle, $peanutbutter) {
			$this->gingerbread = $gingerbread;
			$this->chocolatechip = $chocolatechip;
			$this->sugar = $sugar;
			$this->snickerdoodle = $snickerdoodle;
			$this->peanutbutter = $peanutbutter;
		}
		function getName(){
			return  "My favorite cookie is " . $this->chocolatechip .
			" and my least favorite cookie is " . $this->peanutbutter ;
		}
	}

class snickerdoodle extends Cookie{
	function __construct($gingerbread, $chocolatechip, $sugar, $snickerdoodle, $raison, $peanutbutter){
		parent::__construct($gingerbread, $chocolatechip, $sugar, $snickerdoodle, $peanutbutter);
		$this->raison = $raison;
	}
	function greet(){
		return $this->raison;
	}
}

class  sugar extends Cookie{
	function __construct($gingerbread, $chocolatechip, $sugar, $snickerdoodle, $oatmeal, $peanutbutter){
		parent::__construct($gingerbread, $chocolatechip, $sugar, $snickerdoodle, $peanutbutter);
		$this->oatmeal = $oatmeal;
	}
		function greet(){
		return $this->oatmeal;
	}
}

$chocolatechip = new Cookie("gingerbread", "chocolatechip", "sugar", "snickerdoodle", "raison", "oatmeal", "peanutbutter");
print "<br>" ."Cookie 1: " . $chocolatechip->getName() . "</br>";
?>

	<!--Example 3 -->

<?php 
	class Sports {
		public $volleyball;
		public $soccer;
		public $basketball;
		public $tennis;
		public $baseball;

		function __construct($volleyball, $soccer, $basketball, $tennis, $baseball) {
			$this->volleyball = $volleyball;
			$this->soccer = $soccer;
			$this->basketball = $basketball;
			$this->tennis = $tennis;
			$this->baseball = $baseball;
		}
		function getName(){
			return "My favorite sport is " . $this->volleyball .
			" and my least favorite sport is " . $this->soccer;
		}
	}

class baseball extends Sports{
	function __construct($volleyball, $soccer, $basketball, $tennis, $baseball, $football){
		parent::__construct($volleyball, $soccer, $basketball, $tennis, $baseball);
		$this->football = $football;
	}
	function greet(){
		return $this->football;
	}
}

class  tennis extends Sports{
	function __construct($volleyball, $soccer, $basketball, $tennis,$baseball, $softball){
		parent::__construct($volleyball, $soccer, $basketball, $tennis, $baseball);
		$this->softball = $softball;
	}
	function greet(){
		return $this->softball;
	}
}

$volleyball = new Sports("volleyball", "soccer", "basketball", "tennis", "football", "baseball", "softball");
print "Sports 1: " . $volleyball->getName();
?>
